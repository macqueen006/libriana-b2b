@props([
    'src' => '',
    'alt' => '',
    'loading' => 'lazy',
    'fetchpriority' => null,
    'class' => '',
    'width' => null,
    'height' => null,
    'objectFit' => 'cover',
    'eager' => false,
])

@php
    use Illuminate\Support\Facades\Cache;

    // Load manifest once and cache it
    $manifest = Cache::rememberForever('responsive-image-manifest', function () {
        $manifestPath = public_path('img/optimized/manifest.json');
        if (file_exists($manifestPath)) {
            return json_decode(file_get_contents($manifestPath), true);
        }
        return [];
    });

    // Extract filename without extension
    $pathInfo = pathinfo($src);
    $filename = $pathInfo['filename'];
    $dir = $pathInfo['dirname'];

    // Set loading strategy
    $loadingAttr = $eager ? 'eager' : $loading;
    $fetchpriorityAttr = $eager ? 'high' : $fetchpriority;

    // Get available sizes from manifest
    $imageData = $manifest[$filename] ?? null;
    $availableSizes = $imageData['generatedSizes'] ?? [];

    // Generate srcset only for available sizes
    $srcsetParts = [];
    foreach ($availableSizes as $size) {
        $srcsetParts[] = "$dir/optimized/$filename-{$size}w.webp {$size}w";
    }
    $srcset = !empty($srcsetParts) ? implode(', ', $srcsetParts) : null;

    // Default sizes attribute (responsive breakpoints)
    $sizesAttr = $attributes->get('sizes') ??
        '(max-width: 640px) 400px, ' .
        '(max-width: 768px) 640px, ' .
        '(max-width: 1024px) 768px, ' .
        '(max-width: 1280px) 1024px, ' .
        '(max-width: 1536px) 1280px, ' .
        '1536px';

    // Smart fallback: prefer mid-range size, fallback to original if none exist
    $fallbackSrc = $src; // Default to original

    if (!empty($availableSizes)) {
        // Preferred fallback order
        $preferredSizes = [1024, 1280, 768, 1536, 640, 1920, 400];

        foreach ($preferredSizes as $preferred) {
            if (in_array($preferred, $availableSizes)) {
                $fallbackSrc = "$dir/optimized/$filename-{$preferred}w.webp";
                break;
            }
        }

        // If none of the preferred sizes exist, use the first available
        if ($fallbackSrc === $src) {
            $firstSize = $availableSizes[0];
            $fallbackSrc = "$dir/optimized/$filename-{$firstSize}w.webp";
        }
    }

    // Object fit classes
    $objectFitClass = match($objectFit) {
        'contain' => 'object-contain',
        'fill' => 'object-fill',
        'scale-down' => 'object-scale-down',
        'none' => 'object-none',
        default => 'object-cover',
    };
@endphp

<img
    @if($srcset) srcset="{{ $srcset }}" @endif
@if($srcset) sizes="{{ $sizesAttr }}" @endif
    src="{{ $fallbackSrc }}"
    alt="{{ $alt }}"
    loading="{{ $loadingAttr }}"
    @if($fetchpriorityAttr) fetchpriority="{{ $fetchpriorityAttr }}" @endif
    decoding="async"
    @if($width) width="{{ $width }}" @endif
    @if($height) height="{{ $height }}" @endif
    {{ $attributes->merge(['class' => $objectFitClass . ' ' . $class]) }}
>

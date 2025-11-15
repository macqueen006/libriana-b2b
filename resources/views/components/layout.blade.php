@props(['title' => 'librana.ai'])

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap">
    </noscript>
    {{ $preload ?? '' }}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="antialiased md:subpixel-antialiased">
<!-- HEADER -->
<header
    class="flex flex-wrap lg:justify-start lg:flex-nowrap z-50 w-full py-3
         backdrop-blur-md bg-gradient-to-r from-body/90 via-[#001BB7]/90 to-primary/90
         border-b border-white/10 shadow-[0_0_20px_-5px_rgba(0,70,255,0.3)] transition-all duration-300">
    <nav
        class="relative max-w-7xl w-full flex flex-wrap lg:grid lg:grid-cols-12 basis-full items-center
           px-5 md:px-6 lg:px-8 mx-auto text-white">
        <div class="lg:col-span-3 flex items-center">
            <!-- Logo -->
            <a class="flex-none rounded-xl text-xl inline-block relative h-9 w-[136px] font-semibold
                 focus:outline-hidden focus:opacity-80"
               href="/" aria-label="Librana AI">
                <img src="{{ asset('/img/logo-text.svg') }}" class="w-full h-full object-contain" alt="Librana AI logo" width="136" height="36">
            </a>
            <!-- End Logo -->
        </div>

        <!-- Button Group -->
        <div class="flex items-center gap-x-1 lg:gap-x-2 ms-auto py-1 lg:ps-6 lg:order-3 lg:col-span-3">
            <a href="{{ route('contact-us') }}"
               class="btn group hidden lg:inline-flex bg-orange-600 hover:bg-orange-700 text-white transition-all">
                <div class="btn-icon group-hover:w-[calc(100%-0.5rem)]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="w-full h-full text-orange-700">
                        <path d="M5 12h14"/>
                        <path d="m12 5 7 7-7 7"/>
                    </svg>
                </div>
                <span class="text-base font-semibold">Get Started <span class="sr-only">- Contact Us</span></span>
            </a>

            <div class="md:hidden">
                <button type="button"
                        class="hs-collapse-toggle size-9.5 flex justify-center items-center text-sm font-semibold
                       rounded-xl border border-primary/40 text-white hover:bg-white/10 focus:outline-hidden
                       focus:bg-white/10 disabled:opacity-50 disabled:pointer-events-none"
                        id="hs-pro-hcail-collapse" aria-expanded="false" aria-controls="hs-pro-hcail"
                        aria-label="Toggle navigation" data-hs-collapse="#hs-pro-hcail">
                    <svg class="hs-collapse-open:hidden shrink-0 size-4 text-white"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6"/>
                        <line x1="3" x2="21" y1="12" y2="12"/>
                        <line x1="3" x2="21" y1="18" y2="18"/>
                    </svg>
                    <svg class="hs-collapse-open:block hidden shrink-0 size-4 text-white"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"/>
                        <path d="m6 6 12 12"/>
                    </svg>
                </button>
            </div>
        </div>
        <!-- End Button Group -->

        <!-- Collapse -->
        <div id="hs-pro-hcail"
             class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block
                lg:w-auto md:basis-auto md:order-2 md:col-span-6"
             aria-labelledby="hs-pro-hcail-collapse">
            <div
                class="flex flex-col gap-y-4 gap-x-0 mt-5 md:flex-row md:justify-center md:items-center
               md:gap-y-0 md:gap-x-7 md:mt-0">
                @foreach ([
                    'home' => 'Home',
                    'about-us' => 'About',
                    'products' => 'Products',
                    'solutions' => 'Solutions',
                    'our-story' => 'Our Story',
                    'contact-us' => 'Contact Us'
                ] as $route => $label)
                    <div style="contain: layout;">
                        <a href="{{ route($route) }}"
                           class="relative inline-block px-1 py-0.5 pb-[2px] text-white hover:text-accent
                                  transition-colors focus:outline-hidden">
                            {{ $label }}
                            <span class="absolute left-0 bottom-0 w-full h-[2px] bg-accent rounded-full
                                         transition-opacity duration-200
                                         {{ isActiveRoute($route) ? 'opacity-100' : 'opacity-0' }}"></span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- End Collapse -->
    </nav>
</header>
<!-- END HEADER -->

<main>
    {{ $slot }}
</main>

<footer
    class="content-flex bg-gradient-to-br from-body via-[#001234] to-secondary text-neutral mt-10 relative overflow-hidden">
    <!-- Floating soft glows -->
    <div
        class="absolute top-[-50px] left-[20%] w-[300px] h-[300px] bg-gradient-to-r from-primary/20 to-accent/10 blur-3xl rounded-full opacity-60"></div>
    <div
        class="absolute bottom-[-100px] right-[10%] w-[250px] h-[250px] bg-gradient-to-r from-accent/20 to-primary/10 blur-3xl rounded-full opacity-60"></div>

    <div class="pt-[50px] pb-[20px] w-full max-w-[1200px] mx-auto flex flex-col gap-10 md:gap-[60px] relative z-10">
        <div class="flex flex-col lg:flex-row gap-5 lg:gap-[141px]">
            <div class="flex flex-col sm:flex-row lg:flex-col gap-5 flex-1">
                <div class="flex flex-col gap-5 flex-1">
                    <a href="{{ route('home') }}">
                        <div class="logo h-9 w-[136px] relative">
                            <img src="{{ asset('img/logo-text.svg') }}" class="w-full h-full object-contain"
                                 alt="Librana AI logo" width="136" height="36">
                        </div>
                    </a>
                    <p class="w-[313px] lg:w-full text-sm text-neutral/80">
                        Empower your library with cutting-edge AI that transforms information into intelligent guidance.
                    </p>
                </div>

                <div class="flex flex-col gap-1">
                    <p class="text-neutral/50 text-sm uppercase tracking-wide">Contact us</p>
                    <a href="tel:+2349032732049" class="hover:text-accent transition-colors">+234 903 2732 049</a>
                    <a href="mailto:support@librana.ai"
                       class="hover:text-accent transition-colors">support@librana.ai</a>
                </div>
            </div>

            <!-- Navigation Sections -->
            <div class="flex-1 flex flex-col sm:flex-row gap-5">
                <!-- Quick Links -->
                <div class="flex flex-col gap-5 flex-1">
                    <p class="capitalize text-neutral/50 text-sm tracking-wide">Quick links</p>
                    <ul class="flex flex-col gap-3">
                        <li style="contain: layout;">
                            <a href="{{ route('home') }}"
                               class="relative inline-block hover:text-accent transition pb-[2px]">
                                Home
                                <span
                                    class="absolute left-0 bottom-[-3px] w-full h-[2px] bg-accent rounded-full transition-opacity duration-200
                                           {{ isActiveRoute('home') ? 'opacity-100' : 'opacity-0' }}"></span>
                            </a>
                        </li>
                        <li style="contain: layout;">
                            <a href="{{ route('products') }}"
                               class="relative inline-block hover:text-accent transition pb-[2px]">
                                Products
                                <span
                                    class="absolute left-0 bottom-[-3px] w-full h-[2px] bg-accent rounded-full transition-opacity duration-200
                                           {{ isActiveRoute('products') ? 'opacity-100' : 'opacity-0' }}"></span>
                            </a>
                        </li>
                        <li style="contain: layout;">
                            <a href="{{ route('solutions') }}"
                               class="relative inline-block hover:text-accent transition pb-[2px]">
                                Solutions
                                <span
                                    class="absolute left-0 bottom-[-3px] w-full h-[2px] bg-accent rounded-full transition-opacity duration-200
                                           {{ isActiveRoute('solutions') ? 'opacity-100' : 'opacity-0' }}"></span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Explore -->
                <div class="flex flex-col gap-5 flex-1">
                    <p class="capitalize text-neutral/50 text-sm tracking-wide">Explore</p>
                    <ul class="flex flex-col gap-3">
                        <li style="contain: layout;">
                            <a href="{{ route('about-us') }}"
                               class="relative inline-block hover:text-accent transition pb-[2px]">
                                About
                                <span
                                    class="absolute left-0 bottom-[-3px] w-full h-[2px] bg-accent rounded-full transition-opacity duration-200
                                           {{ isActiveRoute('about-us') ? 'opacity-100' : 'opacity-0' }}"></span>
                            </a>
                        </li>
                        <li style="contain: layout;">
                            <a href="{{ route('our-story') }}"
                               class="relative inline-block hover:text-accent transition pb-[2px]">
                                Our Story
                                <span
                                    class="absolute left-0 bottom-[-3px] w-full h-[2px] bg-accent rounded-full transition-opacity duration-200
                                           {{ isActiveRoute('our-story') ? 'opacity-100' : 'opacity-0' }}"></span>
                            </a>
                        </li>
                        <li style="contain: layout;">
                            <a href="{{ route('contact-us') }}"
                               class="relative inline-block hover:text-accent transition pb-[2px]">
                                Contact
                                <span
                                    class="absolute left-0 bottom-[-3px] w-full h-[2px] bg-accent rounded-full transition-opacity duration-200
                                           {{ isActiveRoute('contact-us') ? 'opacity-100' : 'opacity-0' }}"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Bottom Section -->
        <div
            class="flex flex-col gap-5 md:flex-row-reverse md:justify-between md:items-center border-t border-white/10 pt-6">
            <div class="flex gap-5">
                <p class="text-sm text-neutral/70">Follow:</p>
                <div class="flex gap-[6px] items-center">
                    <a href="https://facebook.com/"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="Visit Librana AI on Facebook"
                       title="Visit us on Facebook"
                       class="flex justify-center items-center border border-transparent hover:border-accent/50 rounded-full size-[30px] transition-all">
                        <svg viewBox="0 0 21.333 21.255" width="16" height="16"
                             class="size-4 fill-neutral/60 hover:fill-accent transition-all">
                            <path
                                d="M8.09 21.02V13.926H5.891V10.667H8.09V9.262C8.09 5.631 9.732 3.948 13.297 3.948c.356 0 .849.038 1.305.092v2.957a8.37 8.37 0 0 0-.652-.008c-.628 0-1.119.085-1.489.275-.248.124-.457.316-.603.552-.23.374-.333.885-.333 1.558v1.153h3.484l-.343 1.869h-3.485v7.329C17.241 20.617 21.333 16.12 21.333 10.667 21.333 4.776 16.557 0 10.667 0S0 4.776 0 10.667C0 15.669 3.444 19.867 8.09 21.02Z"/>
                        </svg>
                    </a>
                    <a href="https://linkedin.com"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="Visit Librana AI on Linkedin"
                       title="Visit us on Linkedin"
                       class="flex justify-center items-center border border-transparent hover:border-accent/50 rounded-full size-[30px] transition-all">
                        <svg viewBox="0 0 21.333 21.333" width="16" height="16"
                             class="size-4 fill-neutral/60 hover:fill-accent transition-all">
                            <path
                                d="M18.175 18.18h-3.159v-4.951c0-1.18-.024-2.699-1.646-2.699-1.647 0-1.899 1.284-1.899 2.612v5.038H8.312V8h3.035v1.388h.041c.424-.8 1.455-1.645 2.995-1.645 3.201 0 3.793 2.107 3.793 4.849v5.588ZM4.744 6.607a1.83 1.83 0 1 1 0-3.669 1.83 1.83 0 0 1 0 3.669Zm1.584 11.573H3.16V8h3.168v10.18ZM19.756 0H1.574C.704 0 0 .688 0 1.537v18.259c0 .85.704 1.537 1.574 1.537h18.179c.869 0 1.58-.687 1.58-1.537V1.537C21.333.688 20.622 0 19.753 0Z"/>
                        </svg>
                    </a>
                    <a href="https://x.com"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="Visit Librana AI on X (Twitter)"
                       title="Visit us on X (Twitter)"
                       class="flex justify-center items-center border border-transparent hover:border-accent/50 rounded-full size-[30px] transition-all">
                        <svg viewBox="0 0 21.333 19.283" overflow="visible" width="16" height="16"
                             class="size-4 fill-neutral/60 hover:fill-accent transition-all">
                            <path
                                d="M 16.801 0 L 20.072 0 L 12.925 8.169 L 21.333 19.283 L 14.75 19.283 L 9.595 12.541 L 3.694 19.283 L 0.421 19.283 L 8.066 10.545 L 0 0.001 L 6.75 0.001 L 11.411 6.163 Z M 15.653 17.325 L 17.466 17.325 L 5.765 1.855 L 3.82 1.855 Z"/>
                        </svg>
                    </a>
                    <a href="https://threads.com"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="Visit Librana AI on Threads"
                       title="Visit us on Threads"
                       class="flex justify-center items-center border border-transparent hover:border-accent/50 rounded-full size-[30px] transition-all duration-300 ease-in-out">
                        <svg viewBox="0 0 20.627 23.51" overflow="visible" width="16" height="16"
                             class="size-4 fill-neutral/60 hover:fill-accent transition-all">
                            <path
                                d="M 10.495 23.51 L 10.488 23.51 C 6.981 23.487 4.284 22.33 2.472 20.073 C 0.86 18.064 0.027 15.268 0 11.765 L 0 11.748 C 0.029 8.242 0.861 5.449 2.473 3.439 C 4.284 1.18 6.983 0.024 10.489 0 L 10.503 0 C 13.193 0.02 15.443 0.71 17.19 2.055 C 18.833 3.319 19.99 5.121 20.627 7.411 L 18.629 7.968 C 17.547 4.089 14.81 2.106 10.494 2.076 C 7.644 2.097 5.489 2.993 4.088 4.737 C 2.777 6.371 2.1 8.732 2.074 11.755 C 2.1 14.778 2.777 17.139 4.089 18.773 C 5.49 20.52 7.646 21.416 10.495 21.434 C 13.065 21.415 14.764 20.816 16.177 19.431 C 17.79 17.851 17.762 15.912 17.245 14.731 C 16.941 14.036 16.39 13.458 15.644 13.017 C 15.456 14.341 15.035 15.413 14.386 16.222 C 13.518 17.302 12.29 17.891 10.732 17.976 C 9.555 18.039 8.42 17.762 7.54 17.191 C 6.499 16.516 5.889 15.486 5.824 14.287 C 5.76 13.122 6.223 12.049 7.127 11.268 C 7.989 10.524 9.202 10.086 10.636 10.004 C 11.625 9.942 12.617 9.989 13.595 10.143 C 13.471 9.416 13.227 8.838 12.86 8.422 C 12.358 7.848 11.579 7.557 10.549 7.55 L 10.521 7.55 C 9.694 7.55 8.569 7.777 7.855 8.843 L 6.134 7.687 C 7.094 6.263 8.65 5.477 10.521 5.477 L 10.564 5.477 C 13.693 5.496 15.557 7.412 15.743 10.755 C 15.849 10.8 15.955 10.847 16.057 10.894 C 17.517 11.58 18.585 12.619 19.147 13.901 C 19.928 15.684 20 18.594 17.631 20.913 C 15.818 22.686 13.62 23.488 10.502 23.509 Z M 11.478 12.059 C 11.241 12.059 11.001 12.066 10.754 12.079 C 8.955 12.18 7.835 13.006 7.897 14.179 C 7.963 15.409 9.32 15.98 10.625 15.91 C 11.824 15.846 13.385 15.378 13.648 12.275 C 12.934 12.126 12.207 12.054 11.478 12.059 Z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <p class="text-sm text-neutral/60">
                &copy; {{ date('Y') }} <span class="text-white font-semibold">Librana AI</span>. Developed by
                <a href="https://github.com/macqueen006" target="_blank" rel="noopener noreferrer"
                   class="text-accent hover:underline">Macqueen006</a>.
            </p>
        </div>
    </div>
</footer>

@livewireScripts
</body>
</html>

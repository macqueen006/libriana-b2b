import sharp from 'sharp';
import { readdirSync, existsSync, mkdirSync, statSync, writeFileSync } from 'fs';
import { join, dirname } from 'path';
import { fileURLToPath } from 'url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);

// Configuration
const config = {
    // Sizes optimized for modern web (including retina displays)
    sizes: [
        { width: 400, suffix: '400w' },   // Mobile
        { width: 640, suffix: '640w' },   // Mobile landscape/Small tablet
        { width: 768, suffix: '768w' },   // Tablet portrait
        { width: 1024, suffix: '1024w' }, // Tablet landscape/Small desktop
        { width: 1280, suffix: '1280w' }, // Desktop
        { width: 1536, suffix: '1536w' }, // Large desktop
        { width: 1920, suffix: '1920w' }, // Full HD
    ],
    quality: 82, // Sweet spot for quality/size ratio
    inputDir: join(__dirname, '../../public/img'),
    outputDir: join(__dirname, '../../public/img/optimized'),
};

// ANSI color codes for pretty console output
const colors = {
    reset: '\x1b[0m',
    green: '\x1b[32m',
    blue: '\x1b[34m',
    yellow: '\x1b[33m',
    cyan: '\x1b[36m',
    red: '\x1b[31m',
};

const log = {
    info: (msg) => console.log(`${colors.blue}ℹ${colors.reset} ${msg}`),
    success: (msg) => console.log(`${colors.green}✓${colors.reset} ${msg}`),
    warn: (msg) => console.log(`${colors.yellow}⚠${colors.reset} ${msg}`),
    error: (msg) => console.log(`${colors.red}✗${colors.reset} ${msg}`),
    step: (msg) => console.log(`${colors.cyan}▶${colors.reset} ${msg}`),
};

// Create output directory if it doesn't exist
if (!existsSync(config.outputDir)) {
    mkdirSync(config.outputDir, { recursive: true });
    log.success(`Created output directory: ${config.outputDir}`);
}

// Get file size in KB
const getFileSizeKB = (filepath) => {
    const stats = statSync(filepath);
    return (stats.size / 1024).toFixed(2);
};

// Main optimization function
async function optimizeImage(inputPath, filename) {
    const name = filename.replace(/\.(webp|jpg|jpeg|png)$/i, '');
    const ext = filename.match(/\.(webp|jpg|jpeg|png)$/i)?.[1].toLowerCase() || 'webp';

    log.step(`Processing: ${filename}`);

    const originalSize = getFileSizeKB(inputPath);
    let totalSaved = 0;
    const metadata = await sharp(inputPath).metadata();
    const generatedSizes = [];

    log.info(`  Original: ${metadata.width}x${metadata.height} (${originalSize} KB) [${ext.toUpperCase()}]`);

    for (const size of config.sizes) {
        if (metadata.width < size.width) {
            log.warn(`  Skipping ${size.suffix} (original is ${metadata.width}px wide)`);
            continue;
        }

        const outputFormat = 'webp';
        const outputPath = join(config.outputDir, `${name}-${size.suffix}.${outputFormat}`);

        try {
            const sharpInstance = sharp(inputPath)
                .resize(size.width, null, {
                    withoutEnlargement: true,
                    fit: 'inside',
                });

            // Use the ext variable to determine output format
            if (outputFormat === 'webp') {
                sharpInstance.webp({
                    quality: config.quality,
                    effort: 6,
                });
            } else if (ext === 'jpg' || ext === 'jpeg') {
                sharpInstance.jpeg({
                    quality: config.quality,
                    mozjpeg: true,
                });
            } else if (ext === 'png') {
                sharpInstance.png({
                    quality: config.quality,
                    compressionLevel: 9,
                });
            }

            await sharpInstance.toFile(outputPath);

            const newSize = getFileSizeKB(outputPath);
            const saved = (parseFloat(originalSize) - parseFloat(newSize)).toFixed(2);
            totalSaved += parseFloat(saved);

            // Track successfully generated size
            generatedSizes.push(size.width);

            log.success(`  Generated ${size.suffix}: ${newSize} KB (saved ${saved} KB)`);
        } catch (error) {
            log.error(`  Failed to generate ${size.suffix}: ${error.message}`);
        }
    }

    log.success(`Total saved for this image: ${totalSaved.toFixed(2)} KB\n`);

    return {
        saved: totalSaved,
        manifest: {
            filename: name,
            original: {
                width: metadata.width,
                height: metadata.height,
                size: parseFloat(originalSize),
                format: ext,
            },
            generatedSizes: generatedSizes,
        }
    };
}

// Main execution
async function main() {
    console.log('\n' + '='.repeat(60));
    log.info('Starting Image Optimization');
    console.log('='.repeat(60) + '\n');

    if (!existsSync(config.inputDir)) {
        log.error(`Input directory not found: ${config.inputDir}`);
        process.exit(1);
    }

    // Get all image files
    const files = readdirSync(config.inputDir).filter(file =>
        /\.(webp|jpg|jpeg|png)$/i.test(file) &&
        !file.startsWith('.') // Ignore hidden files
    );

    if (files.length === 0) {
        log.warn('No images found to optimize');
        return;
    }

    log.info(`Found ${files.length} images to optimize\n`);

    let totalSavedOverall = 0;
    let processedCount = 0;
    const manifest = {};

    for (const file of files) {
        const inputPath = join(config.inputDir, file);

        try {
            const result = await optimizeImage(inputPath, file);
            totalSavedOverall += result.saved;
            manifest[result.manifest.filename] = result.manifest;
            processedCount++;
        } catch (error) {
            log.error(`Failed to process ${file}: ${error.message}\n`);
        }
    }

    // Generate manifest file
    const manifestPath = join(config.outputDir, 'manifest.json');
    try {
        writeFileSync(manifestPath, JSON.stringify(manifest, null, 2));
        log.success(`Generated manifest: ${manifestPath}`);
    } catch (error) {
        log.error(`Failed to write manifest: ${error.message}`);
    }

    console.log('='.repeat(60));
    log.success(`Optimization Complete!`);
    log.info(`Processed: ${processedCount}/${files.length} images`);
    log.info(`Total space saved: ${totalSavedOverall.toFixed(2)} KB (~${(totalSavedOverall / 1024).toFixed(2)} MB)`);
    log.info(`Manifest saved: ${manifestPath}`);
    console.log('='.repeat(60) + '\n');
}

// Run the script
main().catch(error => {
    log.error(`Script failed: ${error.message}`);
    process.exit(1);
});

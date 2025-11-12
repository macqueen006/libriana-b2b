// Check current page
const isHomePage = document.body.classList.contains('home') ||
    document.querySelector('.hero-text');

const initPreline = async () => {
    if (document.querySelector('[data-hs-overlay]') ||
        document.querySelector('[data-hs-dropdown]') ||
        document.querySelector('[data-hs-collapse]')) {
        await import('preline');
    }
};

const initHomeAnimations = async () => {
    if (!isHomePage) return; // Skip if not home page

    const heroTitle = document.querySelector(".hero-text h1");
    const heroSubheading = document.querySelector(".hero-text .subheading");

    if (heroTitle && heroSubheading) {
        const { gsap } = await import('gsap');
        const { ScrollTrigger } = await import('gsap/ScrollTrigger');

        gsap.registerPlugin(ScrollTrigger);

        const heroTimeline = gsap.timeline({ defaults: { ease: "power3.out" } });
        heroTimeline
            .from(heroTitle, { y: 80, opacity: 0, duration: 1.4 })
            .from(heroSubheading, { y: 60, opacity: 0, duration: 1.2 }, "-=0.8");
    }
};

document.addEventListener('DOMContentLoaded', () => {
    Promise.all([
        initPreline(),
        initHomeAnimations()
    ]).catch(err => console.error('Initialization error:', err));
});

import "preline";

const initHomeAnimations = async () => {
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
    initHomeAnimations().catch(err => console.error('Animation error:', err));
});

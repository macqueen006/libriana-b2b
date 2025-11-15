import "preline";

const initHomeAnimations = async () => {
    const heroTitle = document.querySelector(".hero-text h1");
    const heroSubheading = document.querySelector(".hero-text .subheading");

    if (heroTitle && heroSubheading) {
        const [{ gsap }, { ScrollTrigger }] = await Promise.all([
            import('gsap'),
            import('gsap/ScrollTrigger')
        ]);

        gsap.registerPlugin(ScrollTrigger);

        // Explicitly set initial state
        gsap.set([heroTitle, heroSubheading], {
            opacity: 0,
            y: 80,
            force3D: true,
            clearProps: "will-change" // Remove will-change after animation
        });

        const heroTimeline = gsap.timeline({
            defaults: { ease: "power3.out" }
        });

        heroTimeline
            .to(heroTitle, { y: 0, opacity: 1, duration: 1.4 })
            .to(heroSubheading, { y: 0, opacity: 1, duration: 1.2 }, "-=0.8");
    }
};

document.addEventListener('DOMContentLoaded', () => {
    initHomeAnimations().catch(err => console.error('Animation error:', err));
});

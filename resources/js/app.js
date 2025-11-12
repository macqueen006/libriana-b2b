import "preline";

import {gsap} from 'gsap';
import {ScrollTrigger} from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
    initHomeAnimations();
});

function initHomeAnimations() {
    const heroTitle = document.querySelector(".hero-text h1");
    const heroSubheading = document.querySelector(".hero-text .subheading");

    if (heroTitle && heroSubheading) {
        const heroTimeline = gsap.timeline({defaults: {ease: "power3.out"}});
        heroTimeline
            .from(heroTitle, {y: 80, opacity: 0, duration: 1.4})
            .from(heroSubheading, {y: 60, opacity: 0, duration: 1.2}, "-=0.8");
    }
}

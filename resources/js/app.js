import "preline";

import {gsap} from 'gsap';
import {ScrollTrigger} from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
    const heroTimeline = gsap.timeline({defaults: {ease: "power3.out"}});
    heroTimeline
        .from(".hero-text h1", {y: 80, opacity: 0, duration: 1.4})
        .from(".hero-text .subheading", {y: 60, opacity: 0, duration: 1.2}, "-=0.8")
        .fromTo(
            ".hero-text button.btn",
            {y: 40, opacity: 0},
            {y: 0, opacity: 1, duration: 1.2},
            "-=1"
        );

    /*gsap.to('.hero-bg-image',{
        scrollTrigger: {
            trigger: '.hero-main',
            start: 'top top',
            end: 'bottom top',
            scrub: true
        },
        backgroundPosition: '50% 100px',
    });*/

    // Stats cards animation
   /* gsap.from('.content-flex-center:nth-of-type(1) .border', {
        scrollTrigger: {
            trigger: '.content-flex-center:nth-of-type(1)',
            start: 'top 80%',
            toggleActions: 'play none none none'
        },
        opacity: 0,
        y: 50,
        stagger: 0.2,
        duration: 0.8,
        ease: 'power2.out'
    });*/

});

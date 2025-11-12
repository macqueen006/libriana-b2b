<x-layout title="Our Story">
    <!-- Hero section -->
    <section
        class="relative px-5 pt-24 pb-20 h-[420px] overflow-hidden text-white bg-gradient-to-br from-[#001234] via-[#001b4f] to-[#0a2a8f] animate-gradient-move bg-[length:200%_200%]">
        <!-- Floating accent glows -->
        <div class="absolute top-[-100px] left-[15%] w-[400px] h-[400px] bg-accent/20 blur-[120px] rounded-full"></div>
        <div
            class="absolute bottom-[-120px] right-[10%] w-[300px] h-[300px] bg-primary/25 blur-[100px] rounded-full"></div>

        <!-- Content -->
        <div class="relative z-10 wrapper">
            <div class="max-w-[780px] space-y-6">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight capitalize">
                    AI That Thinks Like a Librarian, <br class="hidden sm:block"/> Serves Like a Partner
                </h1>

                <p class="text-lg text-neutral/80 max-w-[620px]">
                    Built for libraries, by people who understand them. We're creating AI solutions that honor
                    the heart of librarianship empathy, ethics, and the pursuit of knowledge.
                </p>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <section class="content-flex bg-white text-body py-16">
        <div class="max-w-[1200px] space-y-10 mx-auto w-full md:px-5 lg:px-8">
            <!-- Top Row -->
            <div class="flex flex-col md:flex-row gap-8 md:gap-[61px] w-full items-center">
                <div class="flex flex-col gap-5 max-w-[480px]">
        <span
            class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-semibold uppercase bg-primary/10 border border-primary text-primary w-fit">
          Our Foundation
        </span>

                    <h2 class="text-3xl font-semibold text-primary">
                        Born From a Simple Truth: Libraries Deserve Better
                    </h2>

                    <p class="text-sm text-neutral-600 leading-relaxed">
                        Generic chatbots weren't designed for libraries. Librana.ai was. We built AI that honors patron
                        privacy,
                        information ethics, and the principled work librarians have done for centuries because
                        libraries deserve
                        technology as thoughtful as the people who run them.
                    </p>
                </div>

                <div class="flex-1 w-full relative min-h-[374px] rounded-sm overflow-hidden shadow-md">
                    <img src="{{ asset('img/library-design.webp') }}"
                         class="absolute inset-0 w-full h-full object-cover"
                         alt="Library foundation and excellence"
                         loading="lazy"
                         decoding="async"
                         width="600"
                         height="374">
                </div>
            </div>

            <!-- Metrics Row -->
            <div class="flex flex-col md:flex-row gap-5 md:gap-10">
                <div class="border border-gray-200 rounded-xl py-8 px-6 flex-1 shadow-sm bg-background">
                    <div class="mx-auto text-center space-y-3">
                        <h1 class="text-4xl font-bold text-primary">15+</h1>
                        <p class="capitalize text-neutral-600 font-medium">Years of experience</p>
                    </div>
                </div>

                <div class="border border-neutral/20 rounded-xl py-8 px-6 flex-1 shadow-sm bg-background">
                    <div class="mx-auto text-center space-y-3">
                        <h1 class="text-4xl font-bold text-primary">100+</h1>
                        <p class="capitalize text-neutral-600 font-medium">Global partners</p>
                    </div>
                </div>

                <div class="border border-neutral/20 rounded-xl py-8 px-6 flex-1 shadow-sm bg-background">
                    <div class="mx-auto text-center space-y-3">
                        <h1 class="text-4xl font-bold text-primary">95%</h1>
                        <p class="capitalize text-neutral-600 font-medium">Client satisfaction rate</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--FAQ-->
    <section class="content-flex-center bg-background">
        <div class="space-y-5 py-10">
            <div class="flex flex-col items-center justify-center relative gap-6 mx-auto text-center">
                <span
                    class="inline-flex items-center gap-x-1.5 py-1.5 px-4 rounded-full text-xs font-semibold uppercase tracking-wider bg-primary/10 text-primary border border-primary/20 shadow-sm">
                    FAQ
                </span>
                <h2 class="max-w-[480px] text-primary">Frequently Asked Questions</h2>
            </div>

            <div class="hs-accordion-group w-screen max-w-[700px] mx-auto px-5 space-y-5">
                <div class="hs-accordion border border-primary/10 bg-white shadow-sm rounded-sm w-full h-auto"
                     id="hs-faq-one">
                    <button class="hs-accordion-toggle p-4 text-start flex justify-between items-center  w-full h-hull"
                            aria-expanded="false" aria-controls="hs-faq-collapse-one">
                        What services we offer?
                        <svg
                            class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                        <svg
                            class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6"></path>
                        </svg>
                    </button>
                    <div id="hs-faq-collapse-one"
                         class="hs-accordion-content hidden overflow-hidden transition-[height] duration-300 w-full p-4"
                         role="region"
                         aria-labelledby="hs-faq-one">
                        <p class=" border-t border-primary/40 pt-1">
                            We offer three AI solutions: Librana® AI Librarian (digital reference), Librana® Mentor
                            (professional development), and Librana® Courseware Advisor (academic guidance).
                        </p>
                    </div>
                </div>
                <div class="hs-accordion border border-primary/10 bg-white shadow-sm rounded-sm w-full h-auto"
                     id="hs-faq-two">
                    <button class="hs-accordion-toggle p-4 text-start flex justify-between items-center  w-full h-hull"
                            aria-expanded="false" aria-controls="hs-faq-collapse-one">
                        What industries do we specialize in?
                        <svg
                            class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                        <svg
                            class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6"></path>
                        </svg>
                    </button>
                    <div id="hs-faq-collapse-two"
                         class="hs-accordion-content hidden overflow-hidden transition-[height] duration-300 w-full p-4"
                         role="region"
                         aria-labelledby="hs-faq-two">
                        <p class=" border-t border-primary/40 pt-1">
                            We specialize exclusively in academic and public libraries, ensuring our AI solutions align
                            with library ethics and professional standards.
                        </p>
                    </div>
                </div>
                <div class="hs-accordion border border-primary/10 bg-white shadow-sm rounded-sm w-full h-auto"
                     id="hs-faq-three">
                    <button class="hs-accordion-toggle p-4 text-start flex justify-between items-center  w-full h-hull"
                            aria-expanded="false" aria-controls="hs-faq-collapse-one">
                        How do AI solutions benefits my business?
                        <svg
                            class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                        <svg
                            class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6"></path>
                        </svg>
                    </button>
                    <div id="hs-faq-collapse-three"
                         class="hs-accordion-content hidden overflow-hidden transition-[height] duration-300 w-full p-4"
                         role="region"
                         aria-labelledby="hs-faq-three">
                        <p class=" border-t border-primary/40 pt-1">
                            Our AI solutions integrate seamlessly with your library systems, maintain data privacy, and
                            operate according to established library standards (ALA, IFLA, RUSA, ACRL).
                        </p>
                    </div>
                </div>
                <div class="hs-accordion border border-primary/10 bg-white shadow-sm rounded-sm w-full h-auto"
                     id="hs-faq-four">
                    <button class="hs-accordion-toggle p-4 text-start flex justify-between items-center  w-full h-hull"
                            aria-expanded="false" aria-controls="hs-faq-collapse-one">
                        How long does it take to see results?
                        <svg
                            class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                        <svg
                            class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6"></path>
                        </svg>
                    </button>
                    <div id="hs-faq-collapse-four"
                         class="hs-accordion-content hidden overflow-hidden transition-[height] duration-300 w-full p-4"
                         role="region"
                         aria-labelledby="hs-faq-four">
                        <p class=" border-t border-primary/40 pt-1">
                            Most institutions see immediate improvements in response time and user satisfaction within
                            the first week of deployment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  End FAQ -->

    <!-- CTA -->
    <section
        class="relative flex flex-col items-center justify-center py-20 px-6 sm:px-10 mt-10 bg-gradient-to-br from-primary/10 via-[var(--color-background)] to-accent/5 border border-primary/20 rounded-sm max-w-[1200px] mx-auto overflow-hidden shadow-sm backdrop-blur-md">

        <!-- Decorative background glows -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-24 -left-24 w-72 h-72 bg-primary/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-80 h-80 bg-accent/20 rounded-full blur-3xl"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 flex flex-col items-center gap-6 text-center max-w-xl mx-auto">
    <span
        class="inline-flex items-center gap-x-1.5 py-1.5 px-4 rounded-full text-xs font-semibold uppercase tracking-wider bg-primary/10 border border-accent/20 text-primary shadow-sm">
      Ready
    </span>

            <h2 class="text-3xl md:text-4xl font-semibold text-taupe leading-tight">
                Ready to Get Started?
            </h2>

            <p class="text-taupe/80 text-base leading-relaxed max-w-md">
                Join the next generation of libraries powered by AI. Let’s build future-ready services that empower
                communities.
            </p>

            <!-- Button -->
            <a href="{{ route('contact-us') }}"
               class="relative mt-4 inline-flex items-center justify-center gap-3 px-8 py-4 rounded-full text-base font-semibold text-white bg-primary hover:bg-secondary transition-all duration-300 shadow-sm hover:shadow-md group">
                <span class="relative z-10">Get started today</span>
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path d="M5 12h14"/>
                    <path d="m12 5 7 7-7 7"/>
                </svg>
            </a>
        </div>
    </section>
    <!-- End CTA -->
</x-layout>

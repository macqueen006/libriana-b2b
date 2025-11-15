<x-layout title="Contact Us" :useLivewire="true">
    <!-- Hero section -->
    <section
        class="relative px-5 pt-24 pb-16 overflow-hidden text-white bg-gradient-to-br from-[#001234] via-[#001b4f] to-[#0a2a8f] animate-gradient-move bg-[length:200%_200%]">
        <!-- Floating accent glows -->
        <div class="absolute top-[-120px] left-[15%] w-[400px] h-[400px] bg-accent/25 blur-[130px] rounded-full"></div>
        <div
            class="absolute bottom-[-150px] right-[10%] w-[320px] h-[320px] bg-primary/30 blur-[110px] rounded-full"></div>

        <div class="relative z-10 wrapper">
            <div class="max-w-[780px]">
                <div class="space-y-6">
                    <h1 class="text-4xl md:text-5xl font-bold leading-tight capitalize">
                        Get in Touch with Us
                    </h1>
                    <p class="text-lg text-neutral/80 max-w-[640px]">
                        We’re here to assist you reach out with your questions, feedback, or inquiries.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- Contact Content -->
    <section class="content-flex bg-white text-neutral-900 py-16">
        <div class="max-w-[1200px] mx-auto w-full lg:p-[32px] gap-10 flex flex-col md:flex-row">

            <!-- Contact Info -->
            <div class="flex-1 flex flex-col gap-[60px]">
                <h2 class="max-w-[308px] text-2xl font-semibold text-primary">
                    Success is a team play, right? Let’s work together!
                </h2>

                <div class="flex flex-col gap-[30px]">
                    <div class="flex flex-col gap-1">
                        <h3 class="text-neutral-900/90 font-semibold text-2xl">Address:</h3>
                        <p class="text-sm text-neutral-600 max-w-[380px]">
                            Innolibrary Global Limited s. r. o.<br>
                            Street: Nám. sv. Františka 18,<br>
                            841 04 Bratislava, Slovakia
                        </p>
                    </div>

                    <div class="flex flex-col gap-1">
                        <h3 class="text-neutral-900/90 font-semibold text-2xl">Email us:</h3>
                        <p class="text-sm text-neutral-600">support@librana.ai.com</p>
                    </div>

                    <div class="flex flex-col gap-1">
                        <h3 class="text-neutral-900/90 font-semibold text-2xl">Call us:</h3>
                        <p class="text-sm text-neutral-600">+234 903 2732 049</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="flex-1 bg-neutral-50 rounded-2xl shadow-sm md:p-8">
                @livewire('contact-form')
            </div>
        </div>
    </section>

    <!-- End Contact Content -->


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
                Transform Your Library With AI?
            </h2>

            <p class="text-taupe/80 text-base leading-relaxed max-w-md">
                Smarter services. Stronger staff. Future ready libraries. Let's lead the way together
            </p>
        </div>
    </section>
    <!-- End CTA -->
</x-layout>

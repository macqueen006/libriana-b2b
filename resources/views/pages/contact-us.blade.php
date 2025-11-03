<x-layout title="Contact Us">
    <!-- Hero section -->
    <section class="px-5 pt-[80px] h-screen">
        <div class="wrapper pt-20">
            <div class="wrapper-text">
                <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium uppercase bg-primary-shade-80 border border-punch text-primary">Contact us</span>
                <h1 class="capitalize">Get in Touch with Us</h1>
                <p class="subheading text-background/70">
                    We’re here to assist you, reach out with your questions, feedback, or inquiries
                </p>
            </div>
        </div>
    </section>

    <section class="content-flex">
        <div class="max-w-[1200px] mx-auto w-full lg:p-[32px] gap-5 flex flex-col md:flex-row">
            <div class="flex-1 flex flex-col gap-[60px]">
                <h4 class="max-w-[308px]">Success is a team play, right? Let’s work together!</h4>
                <div class="flex flex-col gap-[30px]">
                    <div class="flex flex-col gap-1">
                        <h4>Address:</h4>
                        <p class="text-sm text-background/70 max-w-[380px]">
                            Innolibrary Global Limited s. r. o.
                            Street: Nám. sv. Františka 18,
                            841 04 Bratislava
                            Slovakia
                        </p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h4>Email us:</h4>
                        <p class="text-sm text-background/70">Support@librana.ai.com</p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h4>Call us:</h4>
                        <p class="text-sm text-background/70">+234 903 2732 049</p>
                    </div>

                </div>
            </div>
            <div class="flex-1">
                @livewire('contact-form')
            </div>
        </div>
    </section>

    <!--FAQ-->
    <section class="content-flex-center">
        <div class="space-y-5 py-10 lg:py-[100px]">
            <div class="flex flex-col items-center justify-center relative gap-6 mx-auto text-center">
                <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium uppercase bg-primary-shade-80 border border-punch text-primary">FAQ</span>
                <h2 class="max-w-[480px]">Frequently Asked Questions</h2>
            </div>

            <div class="hs-accordion-group w-screen max-w-[700px] mx-auto px-5 space-y-5">
                <div class="hs-accordion border border-taupe/40 rounded-sm w-full h-auto" id="hs-faq-one">
                    <button class="hs-accordion-toggle p-4 text-start  w-full h-hull" aria-expanded="false"
                            aria-controls="hs-faq-collapse-one">
                        What services we offer?
                    </button>
                    <div id="hs-faq-collapse-one"
                         class="hs-accordion-content hidden overflow-hidden transition-[height] duration-300 w-full p-4"
                         role="region"
                         aria-labelledby="hs-faq-one">
                        <p class=" border-t border-taupe/40 pt-1">
                            We offer three AI solutions: librana® AI Librarian (digital reference), librana® Mentor (professional development), and librana® Courseware Advisor (academic guidance).
                        </p>
                    </div>
                </div>
                <div class="hs-accordion border border-taupe/40 rounded-sm w-full h-auto" id="hs-faq-two">
                    <button class="hs-accordion-toggle p-4 text-start  w-full h-hull" aria-expanded="false"
                            aria-controls="hs-faq-collapse-two">
                        What industries do we specialize in?
                    </button>
                    <div id="hs-faq-collapse-two"
                         class="hs-accordion-content hidden overflow-hidden transition-[height] duration-300 w-full p-4"
                         role="region"
                         aria-labelledby="hs-faq-two">
                        <p class=" border-t border-taupe/40 pt-1">
                            We specialize exclusively in academic and public libraries, ensuring our AI solutions align with library ethics and professional standards.
                        </p>
                    </div>
                </div>
                <div class="hs-accordion border border-taupe/40 rounded-sm w-full h-auto" id="hs-faq-three">
                    <button class="hs-accordion-toggle p-4 text-start  w-full h-hull" aria-expanded="false"
                            aria-controls="hs-faq-collapse-three">
                        How do AI solutions benefits my business?
                    </button>
                    <div id="hs-faq-collapse-three"
                         class="hs-accordion-content hidden overflow-hidden transition-[height] duration-300 w-full p-4"
                         role="region"
                         aria-labelledby="hs-faq-three">
                        <p class=" border-t border-taupe/40 pt-1">
                            Our AI solutions integrate seamlessly with your library systems, maintain data privacy, and operate according to established library standards (ALA, IFLA, RUSA, ACRL).
                        </p>
                    </div>
                </div>
                <div class="hs-accordion border border-taupe/40 rounded-sm w-full h-auto" id="hs-faq-four">
                    <button class="hs-accordion-toggle p-4 text-start  w-full h-hull" aria-expanded="false"
                            aria-controls="hs-faq-collapse-four">
                        How long does it take to see results?
                    </button>
                    <div id="hs-faq-collapse-four"
                         class="hs-accordion-content hidden overflow-hidden transition-[height] duration-300 w-full p-4"
                         role="region"
                         aria-labelledby="hs-faq-four">
                        <p class=" border-t border-taupe/40 pt-1">
                            Most institutions see immediate improvements in response time and user satisfaction within the first week of deployment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="content-flex-center flex-1 gap-2.5 p-10 sm:p-20 max-w-[1200px] mx-auto border border-taupe/40 rounded-sm backdrop-blur-[33.5px] bg-gold-sand/10">
        <div class="flex flex-col items-center gap-5 max-w-[570px] mx-auto text-center">
            <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium uppercase bg-primary-shade-80 border
             border-punch text-primary">Ready</span>
            <h2>Transform Your Library With AI?</h2>
            <p>Smarter services. Stronger staff. Future ready libraries. Let's lead the way together</p>
        </div>
    </section>
</x-layout>

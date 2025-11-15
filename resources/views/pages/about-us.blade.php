<x-layout title="About Us">
    <!-- Hero section -->
    <section
        class="relative px-5 pt-24 pb-20 overflow-hidden bg-gradient-to-br from-[#001234] via-[#001b4f] to-[#0a2a8f] text-white">
        <!-- Floating accent glow -->
        <div class="absolute top-[-100px] left-[20%] w-[400px] h-[400px] bg-accent/20 blur-[120px] rounded-full"></div>
        <div
            class="absolute bottom-[-150px] right-[10%] w-[300px] h-[300px] bg-primary/30 blur-[100px] rounded-full"></div>

        <div class="relative z-10 wrapper">
            <div class="max-w-[780px] space-y-6">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                    The Future of Libraries Today, <br class="hidden sm:block"/> AI That Thinks Like a Librarian!
                </h1>

                <p class="text-lg text-neutral/80 max-w-[600px]">
                    Librana AI blends artificial intelligence with the ethics and empathy of librarianship,
                    redefining how libraries serve, teach, and connect.
                </p>

                <a href="{{route('solutions')}}" class="btn group mt-6 relative overflow-hidden w-fit">
                    <div class="btn-icon group-hover:w-[calc(100%-0.5rem)] transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="w-full h-full text-primary">
                            <path d="M5 12h14"/>
                            <path d="m12 5 7 7-7 7"/>
                        </svg>
                    </div>
                    <span class="text-white text-base font-semibold">
                      Discover Librana Solutions
                    </span>
                </a>
            </div>
        </div>
    </section>

    <section class="content-flex-center">
        <div class="wrapper py-10">
            <div class="flex flex-col gap-2.5">
                <div class="wrapper-text">
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium uppercase bg-primary/10 text-primary border border-primary/20">
                      Business & Solutions
                    </span>
                    <h2 class="text-primary">Built by Librarians, Inspired by Intelligence</h2>
                    <p class="subheading-small">
                        Our AI solutions are designed exclusively for libraries, ensuring technology serves with
                        empathy, ethics, and professional integrity for academic purposes.
                    </p>
                </div>
            </div>
        </div>
        <!-- Cards -->
        <div class="space-y-5">
            <div class="grid-card-3">
                <div class="border border-gray-200 shadow-sm rounded-sm h-full flex flex-col relative space-y-5 col-span-1">
                    <!-- image -->
                    <div class="relative w-full h-64 shrink-0 overflow-hidden">
                        <x-responsive-image
                            src="img/librarian-computer.webp"
                            alt="Librana AI Librarian - Digital librarian assistant"
                            width="400"
                            height="256"
                            class="w-full h-full object-cover"
                        />
                    </div>
                    <!-- End image -->
                    <!-- Text-->
                    <div class="p-5 space-y-5">
                        <h3 class="text-primary text-2xl">Librana® AI Librarian</h3>
                        <p>
                            A digital librarian that thinks, guides, and communicates like a real academic librarian.
                            Human like, empathetic responses rooted in librarianship best practices.
                        </p>
                    </div>
                    <!-- End Text-->
                </div>
                <div class="border border-gray-200 shadow-sm rounded-sm h-full flex flex-col relative space-y-5 col-span-1">
                    <!-- image -->
                    <div class="relative w-full h-64 shrink-0 overflow-hidden">
                        <x-responsive-image
                            src="img/mentor.webp"
                            alt="Librana Mentor - Professional development for librarians"
                            width="400"
                            height="256"
                            class="w-full h-full object-cover"
                        />
                    </div>
                    <!-- End image -->
                    <!-- Text-->
                    <div class="p-5 space-y-5">
                        <h3 class="text-primary text-2xl">Librana® Mentor</h3>
                        <p>
                            The world's first AI-powered professional development companion built exclusively for
                            librarians. Built on global library standards (ALA, IFLA, RUSA, ACRL).
                        </p>
                    </div>
                    <!-- End Text-->
                </div>
                <div class="border border-gray-200 shadow-sm rounded-sm h-full flex flex-col relative space-y-5 col-span-1">
                    <!-- image -->
                    <div class="relative w-full h-64 shrink-0 overflow-hidden">
                        <x-responsive-image
                            src="img/academic-pathway.webp"
                            alt="Librana Courseware Advisor - Academic guidance tool"
                            width="400"
                            height="256"
                            class="w-full h-full object-cover"
                        />
                    </div>
                    <!-- End image -->
                    <!-- Text-->
                    <div class="p-5 space-y-5">
                        <h3 class="text-primary text-2xl">Librana® Courseware Advisor</h3>
                        <p>
                            AI-powered partner for smarter academic and career decisions. Transforms curiosity into
                            confident choices for learners everywhere.
                        </p>
                    </div>
                    <!-- End Text-->
                </div>
            </div>
        </div>

        <!-- End Cards -->
    </section>

    <section class="content-flex bg-white">
        <div class="max-w-[1200px] flex flex-col gap-[60px] mx-auto w-full pt-20 pb-10">
            <div class="wrapper-text">
            <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium uppercase bg-blue-50 border border-primary text-primary">
                Key Benefits
            </span>
                <h1 class="capitalize text-body">Why Choose Librana AI</h1>
                <p class="subheading text-body/70">
                    Librana AI offers powerful benefits that help you save time, improve decision making, and scale
                    your data operations effortlessly.
                </p>
            </div>

            <div class="flex flex-col md:flex-row gap-5 w-full">
                <div class="space-y-5 flex-1">
                    <div class="space-y-5">
                        <div class="border border-taupe/40 rounded-sm py-5 px-4 flex-1 bg-white hover:border-primary/50 transition-colors">
                            <div class="mx-auto w-full">
                                <div class="space-y-5">
                                    <div class="opacity-100 size-16">
                                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none">
                                            <rect width="64" height="64" rx="8" fill="url(#grad1)"></rect>
                                            <rect x="0.5" y="0.5" width="63" height="63" rx="7.5" stroke="#0046FF" stroke-opacity="0.24"></rect>
                                            <path d="M50.5 31.75C50.5 34.2123 50.015 36.6505 49.0727 38.9253C48.1305 41.2002 46.7493 43.2672 45.0083 45.0083C43.2672 46.7494 41.2002 48.1305 38.9253 49.0727C36.6505 50.015 34.2123 50.5 31.75 50.5C29.2877 50.5 26.8495 50.015 24.5747 49.0727C22.2998 48.1305 20.2328 46.7494 18.4917 45.0083C16.7506 43.2672 15.3695 41.2002 14.4273 38.9253C13.485 36.6505 13 34.2123 13 31.75C13 26.7772 14.9754 22.0081 18.4917 18.4917C22.0081 14.9754 26.7772 13 31.75 13C36.7228 13 41.4919 14.9754 45.0083 18.4917C48.5246 22.0081 50.5 26.7772 50.5 31.75Z" fill="#0046FF" fill-opacity="0.1"></path>
                                            <path d="M27 31.9464L30.4018 35.3482L37 28.75" stroke="#0046FF" stroke-width="2.90286" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <defs>
                                                <radialGradient id="grad1" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(32 32) rotate(90) scale(32)">
                                                    <stop stop-color="#0046FF" stop-opacity="0"></stop>
                                                    <stop offset="1" stop-color="#0046FF" stop-opacity="0.05"></stop>
                                                </radialGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <h4 class="text-body">Empathy Driven Technology</h4>
                                    <p class="text-body/70">
                                        AI solutions designed with librarian ethics and empathy at the core. Technology
                                        that serves with professional integrity.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="border border-taupe/40 rounded-sm py-5 px-4 flex-1 bg-white hover:border-primary/50 transition-colors">
                            <div class="mx-auto w-full">
                                <div class="space-y-5">
                                    <div class="opacity-100 size-16">
                                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none">
                                            <rect width="64" height="64" rx="8" fill="url(#grad2)"></rect>
                                            <rect x="0.5" y="0.5" width="63" height="63" rx="7.5" stroke="#0046FF" stroke-opacity="0.24"></rect>
                                            <path d="M50.5 31.75C50.5 34.2123 50.015 36.6505 49.0727 38.9253C48.1305 41.2002 46.7493 43.2672 45.0083 45.0083C43.2672 46.7494 41.2002 48.1305 38.9253 49.0727C36.6505 50.015 34.2123 50.5 31.75 50.5C29.2877 50.5 26.8495 50.015 24.5747 49.0727C22.2998 48.1305 20.2328 46.7494 18.4917 45.0083C16.7506 43.2672 15.3695 41.2002 14.4273 38.9253C13.485 36.6505 13 34.2123 13 31.75C13 26.7772 14.9754 22.0081 18.4917 18.4917C22.0081 14.9754 26.7772 13 31.75 13C36.7228 13 41.4919 14.9754 45.0083 18.4917C48.5246 22.0081 50.5 26.7772 50.5 31.75Z" fill="#0046FF" fill-opacity="0.1"></path>
                                            <path d="M27 31.9464L30.4018 35.3482L37 28.75" stroke="#0046FF" stroke-width="2.90286" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <defs>
                                                <radialGradient id="grad2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(32 32) rotate(90) scale(32)">
                                                    <stop stop-color="#0046FF" stop-opacity="0"></stop>
                                                    <stop offset="1" stop-color="#0046FF" stop-opacity="0.05"></stop>
                                                </radialGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <h4 class="text-body">Evidence-Based Excellence</h4>
                                    <p class="text-body/70">
                                        Built on global library standards (ALA, IFLA, RUSA, ACRL) and proven coaching
                                        models. Reliable, academically aligned guidance.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 w-full relative min-h-[374px]">
                    <x-responsive-image
                        src="img/library.webp"
                        alt="Excellence and Integrity in library services"
                        width="400"
                        height="374"
                        class="absolute left-0 top-0 w-full h-full object-cover rounded-sm"
                    />
                 </div>
                <div class="space-y-5 flex-1">
                    <div class="space-y-5">
                        <div class="border border-taupe/40 rounded-sm py-5 px-4 flex-1 bg-white hover:border-primary/50 transition-colors">
                            <div class="mx-auto w-full">
                                <div class="space-y-5">
                                    <div class="opacity-100 size-16">
                                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none">
                                            <rect width="64" height="64" rx="8" fill="url(#grad3)"></rect>
                                            <rect x="0.5" y="0.5" width="63" height="63" rx="7.5" stroke="#0046FF" stroke-opacity="0.24"></rect>
                                            <path d="M50.5 31.75C50.5 34.2123 50.015 36.6505 49.0727 38.9253C48.1305 41.2002 46.7493 43.2672 45.0083 45.0083C43.2672 46.7494 41.2002 48.1305 38.9253 49.0727C36.6505 50.015 34.2123 50.5 31.75 50.5C29.2877 50.5 26.8495 50.015 24.5747 49.0727C22.2998 48.1305 20.2328 46.7494 18.4917 45.0083C16.7506 43.2672 15.3695 41.2002 14.4273 38.9253C13.485 36.6505 13 34.2123 13 31.75C13 26.7772 14.9754 22.0081 18.4917 18.4917C22.0081 14.9754 26.7772 13 31.75 13C36.7228 13 41.4919 14.9754 45.0083 18.4917C48.5246 22.0081 50.5 26.7772 50.5 31.75Z" fill="#0046FF" fill-opacity="0.1"></path>
                                            <path d="M27 31.9464L30.4018 35.3482L37 28.75" stroke="#0046FF" stroke-width="2.90286" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <defs>
                                                <radialGradient id="grad3" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(32 32) rotate(90) scale(32)">
                                                    <stop stop-color="#0046FF" stop-opacity="0"></stop>
                                                    <stop offset="1" stop-color="#0046FF" stop-opacity="0.05"></stop>
                                                </radialGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <h4 class="text-body">Always-Available Service</h4>
                                    <p class="text-body/70">
                                        24/7 intelligent support that never sleeps. Transform every interaction into
                                        exceptional library service experiences.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="border border-taupe/40 rounded-sm py-5 px-4 flex-1 bg-white hover:border-primary/50 transition-colors">
                            <div class="mx-auto w-full">
                                <div class="space-y-5">
                                    <div class="opacity-100 size-16">
                                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none">
                                            <rect width="64" height="64" rx="8" fill="url(#grad4)"></rect>
                                            <rect x="0.5" y="0.5" width="63" height="63" rx="7.5" stroke="#0046FF" stroke-opacity="0.24"></rect>
                                            <path d="M50.5 31.75C50.5 34.2123 50.015 36.6505 49.0727 38.9253C48.1305 41.2002 46.7493 43.2672 45.0083 45.0083C43.2672 46.7494 41.2002 48.1305 38.9253 49.0727C36.6505 50.015 34.2123 50.5 31.75 50.5C29.2877 50.5 26.8495 50.015 24.5747 49.0727C22.2998 48.1305 20.2328 46.7494 18.4917 45.0083C16.7506 43.2672 15.3695 41.2002 14.4273 38.9253C13.485 36.6505 13 34.2123 13 31.75C13 26.7772 14.9754 22.0081 18.4917 18.4917C22.0081 14.9754 26.7772 13 31.75 13C36.7228 13 41.4919 14.9754 45.0083 18.4917C48.5246 22.0081 50.5 26.7772 50.5 31.75Z" fill="#0046FF" fill-opacity="0.1"></path>
                                            <path d="M27 31.9464L30.4018 35.3482L37 28.75" stroke="#0046FF" stroke-width="2.90286" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <defs>
                                                <radialGradient id="grad4" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(32 32) rotate(90) scale(32)">
                                                    <stop stop-color="#0046FF" stop-opacity="0"></stop>
                                                    <stop offset="1" stop-color="#0046FF" stop-opacity="0.05"></stop>
                                                </radialGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <h4 class="text-body">Future Ready Libraries</h4>
                                    <p class="text-body/70">
                                        Turn daily challenges into growth opportunities. Join the next generation of
                                        libraries powered by AI innovation.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-flex-center space-y-5 bg-white pb-10">
        <div class="flex flex-col md:flex-row items-center gap-5 justify-center relative w-full max-w-[1200px] mx-auto">
            <div class="space-y-5 pt-2.5 flex-1 justify-start">
            <span class="inline-flex w-fit items-center gap-x-1.5 py-[2px] px-3 rounded-full text-sm font-medium uppercase bg-primary/10 border border-primary text-primary">
                how it works
            </span>
                <h2 class="max-w-[480px] text-body">Choose Your Solution</h2>
                <p class="text-body/70 max-w-[480px]">
                    Get started quickly and effortlessly with Librana AI's streamlined solution designed to
                    optimize your data workflow.
                </p>
                <ul class="flex flex-col gap-4 text-body/70 text-sm">
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-primary mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span><strong class="text-body font-semibold">Regulatory Compliance:</strong> Meets standards and industry regulations.</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-primary mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span><strong class="text-body font-semibold">Multi-factor Authentication:</strong> Added security layer for protection.</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-primary mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span><strong class="text-body font-semibold">24/7 Monitoring:</strong> Continuous monitoring and threat detection.</span>
                    </li>
                </ul>
            </div>

            <div class="flex-1 relative min-h-[400px] w-full flex justify-end items-center">
                <div class="lg:w-3/4 lg:h-3/4 relative">
                    <div class="absolute inset-0 bg-primary/5 rounded-lg blur-3xl"></div>
                    <x-responsive-image
                        src="img/solution.webp"
                        alt="Choose your AI solution"
                        width="600"
                        height="400"
                        class="relative w-full h-full object-contain rounded-sm"
                    />
                </div>
            </div>
        </div>

        <div class="grid-card-3 max-w-[1200px] mx-auto w-full">
            <div class="border p-5 border-primary/20 rounded-lg h-full space-y-5 relative bg-gradient-to-br from-primary/5 via-white to-primary/10 hover:shadow-lg hover:shadow-primary/10 transition-all duration-300 group">
                <div class="relative w-full shrink-0 overflow-hidden">
                    <p class="capitalize text-primary font-medium">Select Your AI Partner</p>
                    <h4 class="text-lg text-body">
                        Whether you need an AI Librarian, Professional Mentor, or Courseware Advisor, find the perfect
                        fit for your institution.
                    </h4>
                </div>
                <div class="w-full">
                    <svg style="width:100%;height:100%" viewBox="0 0 328 3" preserveAspectRatio="none" width="100%"
                         height="100%">
                        <defs>
                            <linearGradient id="gradient-1" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" style="stop-color:#0046FF;stop-opacity:0.1"></stop>
                                <stop offset="50%" style="stop-color:#0046FF;stop-opacity:0.8"></stop>
                                <stop offset="100%" style="stop-color:#0046FF;stop-opacity:0.1"></stop>
                            </linearGradient>
                        </defs>
                        <rect width="328" height="1" fill="url(#gradient-1)"></rect>
                    </svg>
                </div>
                <ul class="flex flex-col gap-4 text-body/70 text-sm">
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-primary mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span><strong class="text-body font-semibold">Librana® AI Librarian:</strong> Digital reference excellence.</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-primary mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span><strong class="text-body font-semibold">Librana® Mentor:</strong> Professional development.</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-primary mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span><strong class="text-body font-semibold">Librana® Advisor:</strong> Academic guidance.</span>
                    </li>
                </ul>
                <button class="w-fit btn group hidden lg:flex items-center gap-2 px-5 py-2.5 bg-primary text-white rounded-lg hover:bg-secondary transition-colors">
                    <span class="text-base font-semibold capitalize">Explore</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="group-hover:translate-x-1 transition-transform">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </button>
            </div>

            <div class="border p-5 border-primary/20 rounded-lg h-full space-y-5 relative bg-gradient-to-br from-primary/5 via-white to-primary/10 hover:shadow-lg hover:shadow-primary/10 transition-all duration-300 group">
                <div class="relative w-full shrink-0 overflow-hidden">
                    <p class="capitalize text-primary font-medium">Easy Setup & Customization</p>
                    <h4 class="text-lg text-body">
                        Effortlessly integrate with your existing systems. Customize AI personality and knowledge base
                        to match your institution's values.
                    </h4>
                </div>
                <div class="w-full">
                    <svg style="width:100%;height:100%" viewBox="0 0 328 3" preserveAspectRatio="none" width="100%"
                         height="100%">
                        <defs>
                            <linearGradient id="gradient-2" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" style="stop-color:#0046FF;stop-opacity:0.1"></stop>
                                <stop offset="50%" style="stop-color:#0046FF;stop-opacity:0.8"></stop>
                                <stop offset="100%" style="stop-color:#0046FF;stop-opacity:0.1"></stop>
                            </linearGradient>
                        </defs>
                        <rect width="328" height="1" fill="url(#gradient-2)"></rect>
                    </svg>
                </div>
                <ul class="flex flex-col gap-4 text-body/70 text-sm">
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-primary mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Quick OPAC/LMS integration</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-primary mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Custom knowledge base upload</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-primary mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Brand & personality alignment.</span>
                    </li>
                </ul>
                <button class="w-fit btn group hidden lg:flex items-center gap-2 px-5 py-2.5 bg-primary text-white rounded-lg hover:bg-secondary transition-colors">
                    <span class="text-base font-semibold capitalize">Discover</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="group-hover:translate-x-1 transition-transform">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </button>
            </div>

            <div class="border p-5 border-primary/20 rounded-lg h-full space-y-5 relative bg-gradient-to-br from-primary/5 via-white to-primary/10 hover:shadow-lg hover:shadow-primary/10 transition-all duration-300 group">
                <div class="relative w-full shrink-0 overflow-hidden">
                    <p class="capitalize text-primary font-medium">Watch Your Library Evolve</p>
                    <h4 class="text-lg text-body">
                        Experience enhanced user engagement, empowered staff, and data-driven insights that continuously
                        improve your library services.
                    </h4>
                </div>
                <div class="w-full">
                    <svg style="width:100%;height:100%" viewBox="0 0 328 3" preserveAspectRatio="none" width="100%"
                         height="100%">
                        <defs>
                            <linearGradient id="gradient-3" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" style="stop-color:#0046FF;stop-opacity:0.1"></stop>
                                <stop offset="50%" style="stop-color:#0046FF;stop-opacity:0.8"></stop>
                                <stop offset="100%" style="stop-color:#0046FF;stop-opacity:0.1"></stop>
                            </linearGradient>
                        </defs>
                        <rect width="328" height="1" fill="url(#gradient-3)"></rect>
                    </svg>
                </div>
                <ul class="flex flex-col gap-4 text-body/70 text-sm">
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-primary mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Real-time analytics dashboard</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-primary mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Continuous AI learning & improvement</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-primary mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Ongoing support & updates</span>
                    </li>
                </ul>
                <button class="w-fit btn group hidden lg:flex items-center gap-2 px-5 py-2.5 bg-primary text-white rounded-lg hover:bg-secondary transition-colors">
                    <span class="text-base font-semibold capitalize">Discover</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="group-hover:translate-x-1 transition-transform">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </button>
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

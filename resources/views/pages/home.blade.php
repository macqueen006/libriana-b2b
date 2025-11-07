<x-layout title="Home">
    <!-- Hero section -->
    <section class="relative px-5 pt-[80px] min-h-[450px] h-[500px] overflow-hidden hero-main text-white">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 hero-bg-image">
            <img src="{{ asset('img/hero-bg.png') }}"
                 alt="Background particles"
                 class="w-full h-full object-cover object-center">
        </div>

        <!-- Gradient Overlay -->
        <div class="absolute inset-0 z-[1] bg-gradient-to-br from-[#0046FF]/20 via-[#FF8040]/10 to-[#F5F1DC]/20"></div>

        <!-- Content -->
        <div class="wrapper pb-10 relative z-10">
            <div class="wrapper-text hero-text text-body text-center md:text-left">
                <h1 class="capitalize text-[#001B44] font-extrabold">
                    Transforming Libraries With <br>
                    <span class="text-[#0046FF]">AI Intelligence</span>
                </h1>

                <p class="subheading mt-4 text-[#2b2b2b]/90 max-w-2xl mx-auto md:mx-0">
                    Empower your library with AI solutions that think, guide, and mentor like professional librarians
                    delivering 24/7 support that combines empathy, ethics, and academic excellence.
                </p>


            </div>
        </div>
    </section>

    <section class="content-flex-center bg-neutral">
        <div class="max-w-[1200px] mx-auto py-10 w-full">
            <div class="flex flex-col md:flex-row gap-5 md:gap-10">
                <div
                    class="border border-secondary/10 hover:border-secondary/30 transition-all duration-300 shadow-sm rounded-sm p-5 flex-1 bg-white">
                    <div class="w-full">
                        <div class="flex items-center justify-start gap-5">
                            <h4 class="text-3xl text-primary">67%</h4>
                            <p class="text-sm text-body opacity-70">Staff Time Saved</p>
                        </div>
                    </div>
                </div>
                <div
                    class="border border-secondary/10 hover:border-secondary/30 transition-all duration-300 shadow-sm rounded-sm p-5 flex-1 bg-white">
                    <div class="w-full">
                        <div class="flex items-center justify-start gap-5">
                            <h4 class="text-3xl text-primary">95%</h4>
                            <p class="text-sm text-body opacity-70">Query Resolution Rate</p>
                        </div>
                    </div>
                </div>
                <div
                    class="border border-secondary/10 hover:border-secondary/30 transition-all duration-300 shadow-sm rounded-sm p-5 flex-1 bg-white">
                    <div class="w-full">
                        <div class="flex items-center justify-start gap-5">
                            <h4 class="text-3xl text-primary">24/7</h4>
                            <p class="text-sm text-body opacity-70">Always Available Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product -->
    <section class="content-flex-center pb-10">
        <div class="wrapper py-10">
            <div class="flex flex-col gap-2.5">
                <div class="wrapper-text">
                    <span
                        class="inline-flex items-center gap-x-1.5 py-1.5 px-4 rounded-full text-xs font-semibold uppercase tracking-wide bg-primary/10 border border-primary/30 text-primary backdrop-blur-sm shadow-sm">
                    our products
                  </span>
                    <h2 class="text-primary">The Future of Libraries Today</h2>
                    <p class="subheading-small text-body/70">
                        Libraries are evolving. At Librana.ai, we create AI that does more than answer questions it
                        guides, mentors, and empowers. Our solutions put knowledge, professionalism, and trust at the
                        heart of every interaction.
                    </p>
                </div>
            </div>
        </div>

        <div class="grid-card-3">
            <div
                class="border p-[30px] border-gray-200 rounded-sm h-full space-y-5 relative bg-background shadow-sm hover:shadow-sm transition-all duration-300 hover:-translate-y-1">
                <!-- image -->
                <div class="relative w-full shrink-0 overflow-hidden">
                    <p class="capitalize text-body font-semibold">Librana® AI Librarian</p>
                    <h4 class="text-lg text-gray-700">
                        A Digital Librarian with Personality, Empathy, and Purpose!
                    </h4>
                </div>
                <!-- End image -->
                <div class="w-full">
                    <svg viewBox="0 0 328 3" preserveAspectRatio="none" width="100%" height="100%">
                        <defs>
                            <linearGradient id="gradient-1" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" style="stop-color:#0046FF;stop-opacity:0.1"/>
                                <stop offset="50%" style="stop-color:#FF8040;stop-opacity:0.8"/>
                                <stop offset="100%" style="stop-color:#0046FF;stop-opacity:0.1"/>
                            </linearGradient>
                        </defs>
                        <rect width="328" height="3" fill="url(#gradient-1)"/>
                    </svg>
                </div>
                <!-- Text-->
                <ul class="flex flex-col gap-4 text-body text-sm">
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Human like interaction with empathetic and professional responses</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Trustworthy research guidance rooted in established frameworks</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Academic alignment supporting the core mission of libraries</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Enhanced safety reducing the risk of misleading or harmful answers</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span> Integration with library catalogs & databases</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Reference interview best practices built-in</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>24/7 availability for patrons</span>
                    </li>
                </ul>
                <!-- End Text-->
                <a href="{{ route('ai-librarian') }}" class="w-fit btn group inline-flex">
                    <div class="btn-icon group-hover:w-[calc(100%-0.5rem)]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="w-full h-full text-accent">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </div>
                    <span class="text-white text-base font-semibold capitalize">Explore</span>
                </a>
            </div>
            <div
                class="border p-[30px] border-gray-200 rounded-sm h-full space-y-5 relative bg-background shadow-sm hover:shadow-sm transition-all duration-300 hover:-translate-y-1">
                <!-- image -->
                <div class="relative w-full shrink-0 overflow-hidden">
                    <p class="capitalize text-body font-semibold">Librana® Mentor</p>
                    <h4 class="text-lg text-gray-700">
                        The AI Mentor for Librarians
                    </h4>
                </div>
                <!-- End image -->
                <div class="w-full">
                    <svg viewBox="0 0 328 3" preserveAspectRatio="none" width="100%" height="100%">
                        <defs>
                            <linearGradient id="gradient-1" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" style="stop-color:#0046FF;stop-opacity:0.1"/>
                                <stop offset="50%" style="stop-color:#FF8040;stop-opacity:0.8"/>
                                <stop offset="100%" style="stop-color:#0046FF;stop-opacity:0.1"/>
                            </linearGradient>
                        </defs>
                        <rect width="328" height="3" fill="url(#gradient-1)"/>
                    </svg>
                </div>
                <!-- Text-->
                <ul class="flex flex-col gap-4 text-body text-sm">
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>24/7 professional development support</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Skill-building across technical and interpersonal domains</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Training in cataloguing, metadata, acquisitions, and policy application</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Leadership, resilience, and communication coaching</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Personalized learning paths for career growth</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Turns everyday library challenges into guided learning opportunities</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Mentorship at scale, accessible anytime, anywhere</span>
                    </li>
                </ul>
                <!-- End Text-->
                <a href="{{ route('mentor') }}" class="w-fit btn group inline-flex">
                    <div class="btn-icon group-hover:w-[calc(100%-0.5rem)]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="w-full h-full text-secondary">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </div>
                    <span class="text-white text-base font-semibold capitalize">Discover</span>
                </a>
            </div>
            <div
                class="border p-[30px] border-gray-200 rounded-sm h-full space-y-5 relative bg-background shadow-sm hover:shadow-sm transition-all duration-300 hover:-translate-y-1">
                <!-- image -->
                <div class="relative w-full shrink-0 overflow-hidden">
                    <p class="capitalize text-body font-semibold">Librana Courseware Advisor</p>
                    <h4 class="text-lg text-gray-700">
                        Your Intelligent Academic Guide Personalized, Accurate, Available
                    </h4>
                </div>
                <!-- End image -->
                <div class="w-full">
                    <svg viewBox="0 0 328 3" preserveAspectRatio="none" width="100%" height="100%">
                        <defs>
                            <linearGradient id="gradient-1" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" style="stop-color:#0046FF;stop-opacity:0.1"/>
                                <stop offset="50%" style="stop-color:#FF8040;stop-opacity:0.8"/>
                                <stop offset="100%" style="stop-color:#0046FF;stop-opacity:0.1"/>
                            </linearGradient>
                        </defs>
                        <rect width="328" height="3" fill="url(#gradient-1)"/>
                    </svg>
                </div>
                <!-- Text-->
                <ul class="flex flex-col gap-4 text-body text-sm">
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Natural language course and program search</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Personalized recommendations based on student goals and interests</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Prerequisite and pathway guidance</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Career alignment counseling</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Integration with institutional course catalogs</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Support for prospective, current, and returning students</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Alumni and continuing education guidance</span>
                    </li>
                </ul>
                <!-- End Text-->
                <a href="{{ route('course-advisor') }}" class="w-fit btn group inline-flex">
                    <div class="btn-icon group-hover:w-[calc(100%-0.5rem)]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="w-full h-full text-accent">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </div>
                    <span class="text-white text-base font-semibold capitalize">Discover</span>
                </a>
            </div>
        </div>
    </section>
    <!-- End Product -->

    <!--  Metrics cards    -->
    <section class="content-flex-center gap-5 bg-white pb-10">
        <div class="wrapper py-10">
            <div class="flex flex-col gap-2.5">
                <div class="wrapper-text">
                    <span
                        class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium uppercase bg-primary/10 border border-primary text-primary">Efficiency</span>
                    <h2 class="text-primary">Intelligence That Scales with Your Library</h2>
                    <p class="subheading-small text-gray-700">
                        Librana.ai combines cutting-edge AI with professional library standards to deliver solutions
                        that grow with your institution's needs and evolve with your community.
                    </p>
                </div>
            </div>
        </div>
        <!-- Cards -->
        <div class="flex flex-col gap-5">
            <div class="grid-card-3">
                <div
                    class="border bg-white border-gray-200 rounded-xl h-full flex flex-col relative shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1 overflow-hidden group">
                    <!-- image -->
                    <div class="relative w-full h-64 shrink-0 overflow-hidden">
                        <img src="{{asset('img/bar-cardr.png')}}"
                             class="w-full h-full object-cover absolute top-0 left-0 group-hover:scale-110 transition-transform duration-300"
                             alt="metrics"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent"></div>
                    </div>
                    <!-- End image -->
                    <!-- Text-->
                    <div class="space-y-5 p-6 flex-1 flex flex-col">
                        <h4 class="text-primary">Smart Reference Analytics</h4>
                        <p class="text-body/70 flex-1">
                            Track user queries, identify knowledge gaps, and optimize your library services with
                            real-time insights that inform better decisions.
                        </p>
                    </div>
                    <!-- End Text-->
                </div>

                <div
                    class="border border-gray-200 rounded-xl h-full flex flex-col relative bg-white shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1 overflow-hidden group">
                    <!-- image -->
                    <div class="relative w-full h-64 shrink-0 overflow-hidden">
                        <img src="{{asset('img/card-flowr.png')}}"
                             class="w-full h-full object-cover absolute left-0 top-0 group-hover:scale-110 transition-transform duration-300"
                             alt="metrics"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent"></div>
                    </div>
                    <!-- End image -->
                    <!-- Text-->
                    <div class="space-y-5 p-6 flex-1 flex flex-col">
                        <h4 class="text-primary">Intelligent Service Automation</h4>
                        <p class="text-body/70 flex-1">
                            Free your librarians from routine inquiries while ensuring patrons receive accurate,
                            empathetic responses aligned with professional standards
                        </p>
                    </div>
                    <!-- End Text-->
                </div>

                <div
                    class="border border-gray-200 rounded-xl h-full flex flex-col relative bg-white shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1 overflow-hidden group">
                    <!-- image -->
                    <div class="relative w-full h-64 shrink-0 overflow-hidden">
                        <img src="{{asset('img/integration-cardr.png')}}"
                             class="w-full h-full object-cover absolute left-0 top-0 group-hover:scale-110 transition-transform duration-300"
                             alt="metrics"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent"></div>
                    </div>
                    <!-- End image -->
                    <!-- Text-->
                    <div class="space-y-5 p-6 flex-1 flex flex-col">
                        <h4 class="text-primary">Predictive Library Intelligence</h4>
                        <p class="text-body/70 flex-1">
                            Anticipate user needs, optimize collection development, and identify emerging research
                            trends with AI-powered analytics.
                        </p>
                    </div>
                    <!-- End Text-->
                </div>
            </div>
            <div class="grid-card-2">
                <div
                    class="border border-gray-200 rounded-xl h-full flex flex-col relative bg-white shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1 overflow-hidden group">
                    <!-- image -->
                    <div class="relative w-full h-64 shrink-0 overflow-hidden">
                        <img src="{{asset('img/progress-cardr.png')}}"
                             class="w-full h-full object-contain absolute left-0 top-0 group-hover:scale-110 transition-transform duration-300"
                             alt="metrics"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/10 to-transparent"></div>
                    </div>
                    <!-- End image -->
                    <!-- Text-->
                    <div class="space-y-5 p-6 flex-1 flex flex-col">
                        <h4 class="text-primary">Professional Development Tracking</h4>
                        <p class="text-body/70 flex-1">
                            Monitor librarian skill growth and identify training opportunities with comprehensive
                            mentorship analytics and progress tracking.
                        </p>
                    </div>
                    <!-- End Text-->
                </div>

                <div
                    class="border border-gray-200 rounded-xl h-full flex flex-col relative bg-white shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1 overflow-hidden group">
                    <!-- image -->
                    <div class="relative w-full h-64 shrink-0 overflow-hidden">
                        <img src="{{asset('img/searches-cardr.png')}}"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                             alt="metrics"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/10 to-transparent"></div>
                    </div>
                    <!-- End image -->
                    <!-- Text-->
                    <div class="space-y-5 p-6 flex-1 flex flex-col">
                        <h4 class="text-primary">Course Discovery Intelligence</h4>
                        <p class="text-body/70 flex-1">
                            Transform academic advising with AI that understands student goals and matches them with
                            verified programs using natural language understanding.
                        </p>
                    </div>
                    <!-- End Text-->
                </div>
            </div>
        </div>

        <!-- End Cards -->
    </section>
    <!-- End Metrics cards    -->

    <section
        class="content-flex-center gap-16 py-20 bg-gradient-to-b from-white via-slate-50 to-slate-100 relative overflow-hidden">
        <!-- Subtle background glow -->
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_50%_10%,rgba(0,70,255,0.07),transparent_70%)] pointer-events-none"></div>

        <div class="wrapper relative z-10">
            <div class="flex flex-col items-center text-center gap-5">
                  <span
                      class="inline-flex items-center gap-x-1.5 py-1.5 px-4 rounded-full text-xs font-semibold uppercase tracking-wide bg-primary/10 border border-primary/30 text-primary backdrop-blur-sm shadow-sm">
                    ✨ Features
                  </span>
                <h2 class="max-w-[780px] text-3xl md:text-4xl font-bold text-primary leading-tight">
                    Why Leading Libraries Choose Our AI Solutions
                </h2>
                <p class="max-w-[600px] text-gray-600 text-lg">
                    Empower your academic and public institutions with AI technology that transforms how libraries serve
                    their communities — while maintaining the highest professional standards.
                </p>
            </div>
        </div>
        <!-- Cards -->
        <div class="grid-card-6">
            <!-- box 1  -->
            <div
                class="group flex flex-col gap-5 border border-primary/20 bg-white/60 shadow-sm backdrop-blur-sm hover:border-primary/40 transition-all duration-300 rounded-sm w-full h-full p-5">
                <div class="opacity-100 size-16">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" id="svg1488100570_1277">
                        <rect width="64" height="64" rx="8"
                              fill="url(#svg1488100570_1277_paint0_radial_147_2320)"></rect>
                        <rect x="0.5" y="0.5" width="63" height="63" rx="7.5" stroke="#0046FF"
                              stroke-opacity="0.24"></rect>
                        <path
                            d="M50.5 31.75C50.5 34.2123 50.015 36.6505 49.0727 38.9253C48.1305 41.2002 46.7493 43.2672 45.0083 45.0083C43.2672 46.7494 41.2002 48.1305 38.9253 49.0727C36.6505 50.015 34.2123 50.5 31.75 50.5C29.2877 50.5 26.8495 50.015 24.5747 49.0727C22.2998 48.1305 20.2328 46.7494 18.4917 45.0083C16.7506 43.2672 15.3695 41.2002 14.4273 38.9253C13.485 36.6505 13 34.2123 13 31.75C13 26.7772 14.9754 22.0081 18.4917 18.4917C22.0081 14.9754 26.7772 13 31.75 13C36.7228 13 41.4919 14.9754 45.0083 18.4917C48.5246 22.0081 50.5 26.7772 50.5 31.75Z"
                            fill="#8190f7" fill-opacity="0.26"></path>
                        <path d="M27 31.9464L30.4018 35.3482L37 28.75" stroke="#0046FF" stroke-width="2.90286"
                              stroke-linecap="round" stroke-linejoin="round"></path>
                        <defs>
                            <radialGradient id="svg1488100570_1277_paint0_radial_147_2320" cx="0" cy="0" r="1"
                                            gradientUnits="userSpaceOnUse"
                                            gradientTransform="translate(32 32) rotate(90) scale(32)">
                                <stop stop-color="#322f86" stop-opacity="0"></stop>
                                <stop offset="1" stop-color="#0046FF" stop-opacity="0.25"></stop>
                            </radialGradient>
                        </defs>
                    </svg>
                </div>
                <h4 class="text-gray-900 group-hover:text-primary transition-colors">24/7 Availability</h4>
                <p class="text-gray-600">
                    AI-driven services across all web platforms, mobile, and in person, ensuring patrons get help
                    whenever they need it.
                </p>
            </div>
            <!-- end box 1  -->
            <!-- box 2  -->
            <div
                class="group flex flex-col gap-5 border border-primary/20 bg-white/60 shadow-sm backdrop-blur-sm hover:border-primary/40 transition-all duration-300 rounded-sm w-full h-full p-5">
                <div class="opacity-100 size-16">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" id="svg1978418783_3425">
                        <rect width="64" height="64" rx="8"
                              fill="url(#svg1978418783_3425_paint0_radial_147_2328)"></rect>
                        <rect x="0.5" y="0.5" width="63" height="63" rx="7.5" stroke="#0046FF"
                              stroke-opacity="0.24"></rect>
                        <g clip-path="url(#svg1978418783_3425_clip0_147_2328)">
                            <mask id="svg1978418783_3425_mask0_147_2328" style="mask-type:luminance"
                                  maskUnits="userSpaceOnUse" x="12" y="12" width="40" height="40">
                                <path d="M52 12H12V52H52V12Z" fill="white"></path>
                            </mask>
                            <g mask="url(#svg1978418783_3425_mask0_147_2328)">
                                <path
                                    d="M25.5084 14.0522C25.7049 12.8689 26.731 12 27.9317 12H33.5927C34.7935 12 35.8196 12.8689 36.0161 14.0522L36.4811 16.8489C36.6186 17.6654 37.1644 18.3465 37.8892 18.7482C38.0508 18.8356 38.2102 18.9294 38.3695 19.0255C39.0791 19.4534 39.9414 19.5866 40.7165 19.2962L43.3734 18.3007C43.9179 18.0959 44.5174 18.091 45.0651 18.287C45.6128 18.4829 46.0733 18.8668 46.3644 19.3704L49.1938 24.2761C49.4843 24.7797 49.5867 25.3701 49.4827 25.9422C49.3788 26.5143 49.0753 27.0309 48.6262 27.4002L46.4364 29.2057C45.7967 29.7318 45.4802 30.544 45.4977 31.3714C45.5007 31.557 45.5007 31.7426 45.4977 31.9281C45.4802 32.7534 45.7967 33.5655 46.4364 34.0917L48.6283 35.8972C49.554 36.6613 49.7942 37.9821 49.196 39.0191L46.3622 43.9247C46.0715 44.4283 45.6116 44.8123 45.0643 45.0086C44.517 45.2049 43.9179 45.2007 43.3734 44.9967L40.7165 44.0012C39.9414 43.7108 39.0791 43.844 38.3674 44.2719C38.2091 44.3682 38.049 44.4613 37.8871 44.5513C37.1644 44.9508 36.6186 45.632 36.4811 46.4485L36.0161 49.2452C35.8196 50.4306 34.7935 51.2974 33.5927 51.2974H27.9296C26.7288 51.2974 25.7049 50.4285 25.5062 49.2452L25.0412 46.4485C24.9058 45.632 24.36 44.9508 23.6352 44.5491C23.4733 44.4598 23.3132 44.3674 23.1549 44.2719C22.4454 43.844 21.583 43.7108 20.8058 44.0012L18.1489 44.9967C17.6047 45.2009 17.0057 45.2054 16.4584 45.0095C15.9112 44.8137 15.4511 44.4301 15.1601 43.9269L12.3285 39.0213C12.038 38.5176 11.9356 37.9272 12.0396 37.3552C12.1435 36.7831 12.447 36.2665 12.8961 35.8972L15.088 34.0917C15.7255 33.5677 16.0421 32.7534 16.0268 31.9281C16.0234 31.7426 16.0234 31.557 16.0268 31.3714C16.0421 30.5418 15.7255 29.7318 15.088 29.2057L12.8961 27.4002C12.4476 27.031 12.1444 26.5148 12.0405 25.9432C11.9366 25.3716 12.0386 24.7817 12.3285 24.2782L15.1601 19.3726C15.4509 18.8686 15.9111 18.4842 16.4589 18.2879C17.0067 18.0916 17.6063 18.0961 18.1511 18.3007L20.8058 19.2962C21.583 19.5866 22.4454 19.4534 23.1549 19.0255C23.3121 18.9294 23.4737 18.8377 23.6352 18.746C24.36 18.3465 24.9058 17.6654 25.0412 16.8489L25.5084 14.0522Z"
                                    fill="#8190f7" fill-opacity="0.25"></path>
                                <path
                                    d="M37.3111 31.6489C37.3111 33.386 36.621 35.0519 35.3927 36.2802C34.1645 37.5084 32.4986 38.1985 30.7615 38.1985C29.0245 38.1985 27.3585 37.5084 26.1303 36.2802C24.902 35.0519 24.2119 33.386 24.2119 31.6489C24.2119 29.9119 24.902 28.246 26.1303 27.0177C27.3585 25.7894 29.0245 25.0994 30.7615 25.0994C32.4986 25.0994 34.1645 25.7894 35.3927 27.0177C36.621 28.246 37.3111 29.9119 37.3111 31.6489Z"
                                    fill="#0046FF"></path>
                            </g>
                        </g>
                        <defs>
                            <radialGradient id="svg1978418783_3425_paint0_radial_147_2328" cx="0" cy="0" r="1"
                                            gradientUnits="userSpaceOnUse"
                                            gradientTransform="translate(32 32) rotate(90) scale(32)">
                                <stop stop-color="#322f86" stop-opacity="0"></stop>
                                <stop offset="1" stop-color="#0046FF" stop-opacity="0.25"></stop>
                            </radialGradient>
                            <clipPath id="svg1978418783_3425_clip0_147_2328">
                                <rect width="40" height="40" fill="white" transform="translate(12 12)"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <h4 class="text-gray-900 group-hover:text-primary transition-colors">Deep Service Analytics</h4>
                <p class="text-gray-600">
                    Unlock actionable insights through real-time dashboards tracking usage
                    patterns, user satisfaction, and service effectiveness.
                </p>
            </div>
            <!-- End box 2  -->
            <!-- box 3  -->
            <div
                class="group flex flex-col gap-5 border border-primary/20 bg-white/60 shadow-sm backdrop-blur-sm hover:border-primary/40 transition-all duration-300 rounded-sm w-full h-full p-5">
                <div class="opacity-100 size-16">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" id="svg-1539072092_1033">
                        <rect width="64" height="64" rx="8"
                              fill="url(#svg-1539072092_1033_paint0_radial_147_2340)"></rect>
                        <rect x="0.5" y="0.5" width="63" height="63" rx="7.5" stroke="#0046FF"
                              stroke-opacity="0.25"></rect>
                        <path
                            d="M32.182 14C27.8592 18.105 22.1024 20.3565 16.1416 20.2733C15.3834 22.5833 14.998 24.9993 15 27.4306C15 38.1063 22.3004 47.0753 32.182 49.6201C42.0635 47.0772 49.3639 38.1082 49.3639 27.4325C49.3639 24.9315 48.963 22.5242 48.2223 20.2714H47.9321C41.8306 20.2714 36.2865 17.8888 32.182 14Z"
                            fill="#8190f7" fill-opacity="0.25"></path>
                        <path d="M27 32.1964L30.4018 35.5982L37 29" stroke="#0046FF" stroke-width="2.90286"
                              stroke-linecap="round" stroke-linejoin="round"></path>
                        <defs>
                            <radialGradient id="svg-1539072092_1033_paint0_radial_147_2340" cx="0" cy="0" r="1"
                                            gradientUnits="userSpaceOnUse"
                                            gradientTransform="translate(32 32) rotate(90) scale(32)">
                                <stop stop-color="#322f86" stop-opacity="0"></stop>
                                <stop offset="1" stop-color="#0046FF" stop-opacity="0.25"></stop>
                            </radialGradient>
                        </defs>
                    </svg>
                </div>
                <h4 class="text-gray-900 group-hover:text-primary transition-colors">Intelligent Automation</h4>
                <p class="text-gray-600">
                    Automate routine tasks while freeing up staff for complex reference work
                    and meaningful patron engagement.
                </p>
            </div>
            <!-- End box 3  -->
            <!-- box 4  -->
            <div
                class="group flex flex-col gap-5 border border-primary/20 bg-white/60 shadow-sm backdrop-blur-sm hover:border-primary/40 transition-all duration-300 rounded-sm w-full h-full p-5">
                <div class="opacity-100 size-16">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" id="svg-101354392_1424">
                        <rect width="64" height="64" rx="8"
                              fill="url(#svg-101354392_1424_paint0_radial_147_2349)"></rect>
                        <rect x="0.5" y="0.5" width="63" height="63" rx="7.5" stroke="#0046FF"
                              stroke-opacity="0.25"></rect>
                        <path
                            d="M29.5 23.0001C29.5 22.4478 29.0516 21.9959 28.501 22.0401C26.3808 22.21 24.3331 22.9189 22.5554 24.1067C20.4998 25.4802 18.8976 27.4325 17.9515 29.7166C17.0054 32.0006 16.7579 34.514 17.2402 36.9387C17.7225 39.3635 18.913 41.5908 20.6612 43.3389C22.4093 45.0871 24.6366 46.2776 27.0614 46.7599C29.4861 47.2422 31.9995 46.9947 34.2835 46.0486C36.5676 45.1025 38.5199 43.5003 39.8934 41.4447C41.0812 39.667 41.7901 37.6193 41.96 35.4991C42.0042 34.9486 41.5523 34.5001 41 34.5001H30.5C29.9477 34.5001 29.5 34.0524 29.5 33.5001V23.0001Z"
                            fill="#8190f7" fill-opacity="0.25"></path>
                        <path
                            d="M34.5 28.4999C34.5 29.0522 34.9477 29.4999 35.5 29.4999H46C46.5523 29.4999 47.0042 29.0514 46.96 28.5009C46.7237 25.5514 45.4464 22.7687 43.3388 20.6611C41.2312 18.5535 38.4485 17.2762 35.499 17.0398C34.9485 16.9957 34.5 17.4476 34.5 17.9999V28.4999Z"
                            fill="#0046FF"></path>
                        <defs>
                            <radialGradient id="svg-101354392_1424_paint0_radial_147_2349" cx="0" cy="0" r="1"
                                            gradientUnits="userSpaceOnUse"
                                            gradientTransform="translate(32 32) rotate(90) scale(32)">
                                <stop stop-color="#322f86" stop-opacity="0"></stop>
                                <stop offset="1" stop-color="#0046FF" stop-opacity="0.25"></stop>
                            </radialGradient>
                        </defs>
                    </svg>
                </div>
                <h4 class="text-gray-900 group-hover:text-primary transition-colors">ILS & Catalog Integration</h4>
                <p class="text-gray-600">
                    Effortlessly connect with your existing library management systems, OPACs, and digital collections
                    no disruption required.
                </p>
            </div>
            <!-- End box 4  -->
            <!-- box 5  -->
            <div
                class="group flex flex-col gap-5 border border-primary/20 bg-white/60 shadow-sm backdrop-blur-sm hover:border-primary/40 transition-all duration-300 rounded-sm w-full h-full p-5">
                <div class="opacity-100 size-16">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" id="svg1120926131_1973">
                        <rect width="64" height="64" rx="8"
                              fill="url(#svg1120926131_1973_paint0_radial_147_2357)"></rect>
                        <rect x="0.5" y="0.5" width="63" height="63" rx="7.5" stroke="#0046FF"
                              stroke-opacity="0.25"></rect>
                        <path
                            d="M28.6667 37C28.2246 37 27.8007 36.8244 27.4882 36.5118C27.1756 36.1993 27 35.7754 27 35.3333V28.6667C27 28.2246 27.1756 27.8007 27.4882 27.4882C27.8007 27.1756 28.2246 27 28.6667 27H35.3333C35.7754 27 36.1993 27.1756 36.5118 27.4882C36.8244 27.8007 37 28.2246 37 28.6667V35.3333C37 35.7754 36.8244 36.1993 36.5118 36.5118C36.1993 36.8244 35.7754 37 35.3333 37H28.6667Z"
                            fill="#0046FF"></path>
                        <path
                            d="M47 30.3333C47 29.4493 46.6488 28.6014 46.0237 27.9763C45.3986 27.3512 44.5507 27 43.6667 27H40.0267C40.2242 27.5337 40.3279 28.0976 40.3333 28.6667V35.3333C40.332 36.659 39.8048 37.93 38.8674 38.8674C37.93 39.8048 36.659 40.332 35.3333 40.3333H28.6667C28.0976 40.3278 27.5338 40.2241 27 40.0267V43.6667C27 44.5507 27.3512 45.3986 27.9763 46.0237C28.6014 46.6488 29.4493 47 30.3333 47H43.6667C44.5507 47 45.3986 46.6488 46.0237 46.0237C46.6488 45.3986 47 44.5507 47 43.6667V30.3333ZM20.3333 17C19.4493 17 18.6014 17.3512 17.9763 17.9763C17.3512 18.6014 17 19.4493 17 20.3333V33.6667C17 34.5507 17.3512 35.3986 17.9763 36.0237C18.6014 36.6488 19.4493 37 20.3333 37H23.9733C23.7759 36.4662 23.6722 35.9024 23.6667 35.3333V28.6667C23.668 27.341 24.1952 26.07 25.1326 25.1326C26.07 24.1952 27.341 23.668 28.6667 23.6667H35.3333C35.9024 23.6721 36.4663 23.7758 37 23.9733V20.3333C37 19.4493 36.6488 18.6014 36.0237 17.9763C35.3986 17.3512 34.5507 17 33.6667 17H20.3333Z"
                            fill="#8190f7" fill-opacity="0.25"></path>
                        <defs>
                            <radialGradient id="svg1120926131_1973_paint0_radial_147_2357" cx="0" cy="0" r="1"
                                            gradientUnits="userSpaceOnUse"
                                            gradientTransform="translate(32 32) rotate(90) scale(32)">
                                <stop stop-color="#322f86" stop-opacity="0"></stop>
                                <stop offset="1" stop-color="#0046FF" stop-opacity="0.25"></stop>
                            </radialGradient>
                        </defs>
                    </svg>
                </div>
                <h4 class="text-gray-900 group-hover:text-primary transition-colors">Enterprise Grade Security</h4>
                <p class="text-gray-600">
                    Your user data and institutional information protected with high level encryption and compliance
                    with data protection regulations.
                </p>
            </div>
            <!-- End box 5  -->
            <!-- box 6  -->
            <div
                class="group flex flex-col gap-5 border border-primary/20 bg-white/60 shadow-sm backdrop-blur-sm hover:border-primary/40 transition-all duration-300 rounded-sm w-full h-full p-5">
                <div class="opacity-100 size-16">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" id="svg-977523143_3632">
                        <rect width="64" height="64" rx="8"
                              fill="url(#svg-977523143_3632_paint0_radial_147_2365)"></rect>
                        <rect x="0.5" y="0.5" width="63" height="63" rx="7.5" stroke="#0046FF"
                              stroke-opacity="0.25"></rect>
                        <path
                            d="M45.0726 42.7972C44.3118 40.5328 41.2793 39.1154 39.1173 38.1653C38.2703 37.7943 35.9255 37.1649 35.6437 36.0984C35.5428 35.7142 35.5564 35.3519 35.6391 35.0048C35.5076 35.0306 35.3739 35.0439 35.2398 35.0444H33.8311C33.2906 35.0438 32.7723 34.8288 32.3902 34.4466C32.008 34.0643 31.7931 33.5461 31.7926 33.0056C31.7926 31.8824 32.7068 30.9693 33.8311 30.9693H35.2398C35.7052 30.9693 36.1465 31.1269 36.5023 31.4079C37.0087 31.3412 37.5085 31.2317 37.9965 31.0808C38.6126 29.7899 39.0931 28.2463 39.2008 26.9177C39.6606 21.2329 36.1756 17.9069 31.1787 18.4819C27.5456 18.9001 25.3753 21.6092 25.1407 25.0968C24.9034 28.6517 26.2215 31.2772 27.6215 33.2031C28.2347 34.0452 28.8788 34.5866 28.7798 35.6013C28.665 36.8011 27.382 37.1354 26.4644 37.5041C25.3772 37.9409 24.2061 38.6035 23.653 38.9099C21.7478 39.962 19.6569 41.229 19.1869 42.9623C18.1461 46.8035 21.661 47.9671 24.5627 48.5043C27.053 48.9637 29.861 48.9999 32.1707 48.9999C36.3486 48.9999 43.8611 48.8326 45.0726 45.6921C45.4171 44.8009 45.2694 43.3809 45.0726 42.7972Z"
                            fill="#8190f7" fill-opacity="0.25"></path>
                        <path
                            d="M36.1315 32.4318C36.035 32.2833 35.903 32.1612 35.7475 32.0766C35.5919 31.9919 35.4177 31.9474 35.2407 31.9471H33.8319C33.6902 31.9433 33.5491 31.968 33.4171 32.0196C33.285 32.0712 33.1646 32.1488 33.0631 32.2477C32.9615 32.3466 32.8807 32.4649 32.8256 32.5955C32.7705 32.7261 32.7421 32.8665 32.7421 33.0083C32.7421 33.1501 32.7705 33.2904 32.8256 33.4211C32.8807 33.5517 32.9615 33.67 33.0631 33.7689C33.1646 33.8678 33.285 33.9453 33.4171 33.997C33.5491 34.0486 33.6902 34.0732 33.8319 34.0695H35.2407C35.4345 34.0693 35.6245 34.0156 35.7897 33.9144C35.955 33.8131 36.089 33.6682 36.1772 33.4956C38.1412 33.3411 39.8495 32.7412 41.0486 31.8553C41.324 32.0329 41.6497 32.1368 42.001 32.1368H42.0894C42.3221 32.1368 42.5526 32.091 42.7676 32.0019C42.9826 31.9128 43.178 31.7821 43.3425 31.6175C43.507 31.4528 43.6374 31.2573 43.7262 31.0422C43.8151 30.8271 43.8607 30.5966 43.8604 30.3638V26.8248C43.8605 26.4906 43.7657 26.1631 43.587 25.8807C43.4083 25.5982 43.1531 25.3722 42.851 25.2291C42.5911 19.5462 37.8866 15 32.1399 15C26.3931 15 21.6879 19.5462 21.4291 25.2291C21.1268 25.372 20.8714 25.5979 20.6925 25.8804C20.5137 26.1629 20.4188 26.4904 20.4189 26.8248V30.3638C20.4187 30.5965 20.4642 30.8269 20.553 31.0419C20.6418 31.2569 20.772 31.4523 20.9364 31.6169C21.1007 31.7816 21.2958 31.9122 21.5107 32.0014C21.7255 32.0906 21.9558 32.1366 22.1884 32.1368H22.278C22.5107 32.1367 22.7411 32.0908 22.956 32.0017C23.171 31.9125 23.3663 31.7819 23.5307 31.6172C23.6951 31.4526 23.8255 31.2571 23.9144 31.0421C24.0032 30.827 24.0489 30.5965 24.0486 30.3638V26.8248C24.0484 26.4952 23.9561 26.1723 23.782 25.8924C23.6079 25.6126 23.359 25.387 23.0634 25.2412C23.3161 20.4528 27.2896 16.6362 32.1399 16.6362C36.9883 16.6362 40.9636 20.4528 41.2152 25.2412C40.9199 25.3872 40.6713 25.6129 40.4974 25.8927C40.3235 26.1725 40.2313 26.4954 40.2311 26.8248V30.3638C40.2311 30.5988 40.2768 30.8176 40.3573 31.0219C39.3252 31.7605 37.8228 32.2867 36.1315 32.4318Z"
                            fill="#0046FF"></path>
                        <defs>
                            <radialGradient id="svg-977523143_3632_paint0_radial_147_2365" cx="0" cy="0" r="1"
                                            gradientUnits="userSpaceOnUse"
                                            gradientTransform="translate(32 32) rotate(90) scale(32)">
                                <stop stop-color="#322f86" stop-opacity="0"></stop>
                                <stop offset="1" stop-color="#0046FF" stop-opacity="0.25"></stop>
                            </radialGradient>
                        </defs>
                    </svg>
                </div>
                <h4 class="text-gray-900 group-hover:text-primary transition-colors">Expert Implementation Support</h4>
                <p class="text-gray-600">
                    Our 24/7 support team helps you integrate, customize, and optimize
                    Librana.ai for your unique library environment.
                </p>
            </div>
            <!-- End box 6  -->
        </div>
    </section>

    <!-- Advance Protection    -->
    <section class="content-flex-center">
        <div
            class="flex flex-col md:flex-row items-center gap-10 justify-center py-10 relative w-full max-w-[1200px] mx-auto">
            <div class="flex flex-col gap-5 pt-2.5 flex-1 justify-start">
                <span
                    class="inline-flex w-fit items-center gap-x-1.5 py-[2px] px-3 rounded-full text-sm font-medium uppercase bg-background border border-primary/40 text-primary">Protection</span>
                <h2 class="max-w-[480px] text-primary">Advanced Protection for Library Data</h2>
                <p class="text-gray-600 max-w-[480px]">
                    Enterprise grade security ensuring your patron information, institutional data, and research queries
                    remain confidential and protected at every interaction.
                </p>
                <ul class="flex flex-col gap-4 text-gray-600 text-sm">
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span><strong class="text-body font-semibold">GDPR & Privacy Compliant:</strong> Built with data protection regulations at the core.</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span><strong class="text-body font-semibold">Encrypted Communications:</strong> All interactions secured with end-to-end encryption.</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span><strong class="text-body font-semibold">Audit Trails:</strong> Complete transparency with detailed logging and compliance reporting</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span><strong class="text-body font-semibold">Role Based Access:</strong> Granular control over who accesses sensitive information</span>
                    </li>
                </ul>
                <a href="http://localhost:8000/ai-librarian" class="w-fit btn group inline-flex">
                    <div class="btn-icon group-hover:w-[calc(100%-0.5rem)]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="w-full h-full text-accent">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </div>
                    <span class="text-white text-base font-semibold capitalize">Get Started</span>
                </a>
            </div>

            <div class="flex-1 relative min-h-[512px] w-full">
                <img src="{{asset('img/uptime-cardr.png')}}"
                     class="absolute top-0 left-0 w-full h-full object-contain"
                     alt="metrics"
                >
            </div>
        </div>
    </section>
    <!-- End Advance Protection    -->

    <section class="content-flex-center">
        <div
            class="flex flex-col-reverse md:flex-row gap-5 items-center justify-center pb-20 relative w-full max-w-[1200px] mx-auto">
            <div class="flex-1 relative min-h-[512px] w-full">
                <img src="{{asset('img/security.png')}}"
                     class="absolute top-0 left-0 w-full h-full object-cover"
                     alt="metrics"
                >
            </div>
            <div class="flex flex-col gap-5 pt-2.5 flex-1 justify-start">
                <span
                    class="inline-flex w-fit items-center gap-x-1.5 py-[2px] px-3 rounded-full text-sm font-medium uppercase bg-background border border-primary text-primary">Security</span>
                <h2 class="max-w-[480px] text-primary">
                    Data Security at Every Step
                </h2>
                <p class="text-gray-600 max-w-[480px]">
                    Librana.ai takes data security seriously with multi layered protection ensuring patron privacy,
                    institutional integrity, and regulatory compliance across all interactions.
                </p>
                <ul class="flex flex-col gap-4 text-gray-600 text-sm">
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span><strong class="text-body font-semibold">256-bit encryption:</strong> excellent protection for all data.</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span><strong class="text-body font-semibold">ISO 27001:</strong> International security standard compliance</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span><strong class="text-body font-semibold">Regular penetration testing:</strong> Proactive vulnerability assessment.</span>
                    </li>
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-accent mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span><strong class="text-body font-semibold">FERPA compliant:</strong> Educational records protection for academic libraries.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--  End Data Security  -->

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

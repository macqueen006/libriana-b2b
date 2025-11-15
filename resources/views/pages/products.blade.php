<x-layout title="Our Product">
    <!-- Hero section -->
    <section class="relative px-5 pt-24 pb-20 h-auto overflow-hidden text-white bg-gradient-to-br from-[#001234] via-[#001b4f] to-[#0a2a8f] animate-gradient-move bg-[length:200%_200%]">
        <!-- Floating accent glows -->
        <div class="absolute top-[-100px] left-[15%] w-[400px] h-[400px] bg-accent/25 blur-[130px] rounded-full"></div>
        <div class="absolute bottom-[-120px] right-[10%] w-[320px] h-[320px] bg-primary/30 blur-[110px] rounded-full"></div>

        <div class="relative z-10 wrapper">
            <div class="max-w-[780px]">
                <div class="space-y-6">
                    <h1 class="text-4xl md:text-5xl font-bold leading-tight capitalize">
                        Transform Your Library With AI-Powered Intelligence!
                    </h1>

                    <p class="text-lg text-neutral/80 max-w-[640px]">
                        Empowering libraries with AI solutions that guide, mentor, and support delivering professional
                        reference services, staff development, and courseware guidance built on global library standards.
                    </p>

                    <a href="{{ route('contact-us') }}" class="btn group inline-flex mt-4">
                        <div class="btn-icon group-hover:w-[calc(100%-0.5rem)] transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="w-full h-full text-primary">
                                <path d="M5 12h14"/>
                                <path d="m12 5 7 7-7 7"/>
                            </svg>
                        </div>
                        <span class="text-white text-base font-semibold">Get Started</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <section class="content-flex-center gap-10 bg-background text-body">
        <div class="wrapper py-10">
            <div class="flex flex-col gap-2.5 text-center">
                <h2 class="text-taupe font-semibold text-2xl md:text-3xl mt-3">
                    Discover our range of innovative tools designed for your success
                </h2>
                <p class="subheading-small text-body/70 max-w-2xl mx-auto mt-2">
                    Explore tailored solutions that meet the unique needs of your business, driving efficiency and
                    productivity in every aspect.
                </p>
            </div>
        </div>

        <!-- Cards -->
        <div class="space-y-5 w-full max-w-[1200px] mx-auto">
            <div class="grid-card-3 gap-6">
                <!-- Card 1 -->
                <div class="rounded-md border border-taupe/20 bg-white shadow-sm hover:shadow-md transition">
                    <div class="p-6 space-y-8 text-center">
                        <p class="text-secondary font-semibold text-lg">librana® AI Librarian</p>
                        <p class="text-body/70">
                            Converses like a real librarian with empathetic, professional support. Rooted in
                            research ethics and best practices for safer, smarter answers every time.
                        </p>

                        <div class="flex flex-col justify-center items-center group">
                            <div class="size-[48px] block rounded-lg border border-accent/40 p-1">
                                <div class="w-full h-full rounded-lg bg-accent/10 border border-accent/20"></div>
                            </div>

                            <div class="h-[40px] w-px bg-gradient-to-b from-transparent via-accent/60 to-primary/60"></div>

                            <div
                                class="relative w-full rounded-md border border-taupe/20 bg-neutral/40 overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-accent/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                                <div class="relative z-10 w-full space-y-6 sm:w-[395px] p-5 text-left">
                                    <p class="text-body font-medium text-md">Tell me about the pillars of research.</p>
                                    <p class="text-body/70 text-sm">
                                        AI research pillars are essential for building robust, scalable, and efficient AI systems—from data collection to model performance.
                                    </p>
                                    <div class="flex flex-wrap gap-3">
                  <span
                      class="px-3 py-2 rounded-full border border-primary/40 hover:border-primary text-sm text-primary cursor-pointer">
                    Add Details
                  </span>
                                        <span
                                            class="px-3 py-2 rounded-full border border-taupe/30 hover:border-taupe text-sm text-body/70 cursor-pointer">
                    Suggest something else
                  </span>
                                    </div>
                                </div>

                                <div class="p-4 border-t border-taupe/20 bg-background/60">
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm text-body/70">Ask Another Question</span>
                                        <span class="text-primary">
                    <svg viewBox="0 0 17 19" class="w-4 h-4 inline-block fill-current">
                      <path
                          d="M 16.126 9.476 C 16.127 9.699 16.068 9.918 15.956 10.11 C 15.843 10.302 15.682 10.461 15.487 10.57 L 2.369 18.071 C 2.181 18.177 1.968 18.234 1.751 18.235 C 1.552 18.234 1.355 18.186 1.177 18.094 C 1 18.002 0.848 17.868 0.732 17.705 C 0.617 17.542 0.543 17.353 0.516 17.155 C 0.488 16.957 0.509 16.756 0.576 16.567 L 2.712 10.321 C 2.733 10.26 2.773 10.206 2.826 10.168 C 2.879 10.13 2.943 10.11 3.008 10.11 L 8.626 10.11 C 8.712 10.11 8.797 10.092 8.876 10.059 C 8.954 10.024 9.025 9.975 9.084 9.912 C 9.142 9.85 9.187 9.776 9.216 9.695 C 9.245 9.615 9.257 9.529 9.251 9.443 C 9.237 9.283 9.163 9.133 9.043 9.025 C 8.924 8.917 8.767 8.858 8.606 8.86 L 3.014 8.86 C 2.949 8.86 2.885 8.84 2.832 8.802 C 2.779 8.764 2.739 8.71 2.718 8.649 L 0.574 2.399 C 0.491 2.159 0.482 1.9 0.549 1.656 C 0.617 1.411 0.757 1.193 0.951 1.03 C 1.145 0.867 1.385 0.767 1.637 0.743 C 1.89 0.719 2.143 0.773 2.365 0.896 L 15.49 8.388 C 15.683 8.497 15.843 8.655 15.955 8.846 C 16.067 9.037 16.126 9.255 16.126 9.476 Z">
                      </path>
                    </svg>
                  </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="rounded-md border border-taupe/20 bg-white shadow-sm hover:shadow-md transition">
                    <div class="p-6 space-y-8 text-center">
                        <p class="text-secondary font-semibold text-lg">librana® Mentor</p>
                        <p class="text-body/70">
                            24/7 professional development based on global library standards (ALA, IFLA,
                            RUSA, ACRL). Builds technical and leadership skills by turning everyday
                            challenges into learning opportunities.
                        </p>

                        <div class="flex flex-col justify-center items-center group">
                            <div class="size-[48px] block rounded-lg border border-accent/40 p-1">
                                <div class="w-full h-full rounded-lg bg-accent/10 border border-accent/20"></div>
                            </div>

                            <div class="h-[40px] w-px bg-gradient-to-b from-transparent via-accent/60 to-primary/60"></div>

                            <div class="relative w-full rounded-md border border-taupe/20 bg-neutral/40 overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-accent/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                                <div class="relative z-10 w-full space-y-4 sm:w-[395px] p-5 text-left">
                                    <p class="text-body font-medium text-md">Suggested citations.</p>
                                    <div class="space-y-2">
                                        <p class="text-body/80">LLM transformer models</p>
                                        <ul class="space-y-1 text-sm text-body/70">
                                            <li>MIT, PhD</li>
                                            <li>John Carter</li>
                                            <li>c.2025</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="p-4 border-t border-taupe/20 bg-background/60">
                                    <div class="flex flex-wrap gap-3">
                  <span
                      class="px-3 py-2 rounded-full border border-primary/40 hover:border-primary text-sm text-primary cursor-pointer">
                    Most Cited
                  </span>
                                        <span
                                            class="px-3 py-2 rounded-full border border-taupe/30 hover:border-taupe text-sm text-body/70 cursor-pointer">
                    Latest
                  </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="rounded-md border border-taupe/20 bg-white shadow-sm hover:shadow-md transition">
                    <div class="p-6 space-y-8 text-center">
                        <p class="text-secondary font-semibold text-lg">librana® Courseware Advisor</p>
                        <p class="text-body/70">
                            Transform how universities and organizations connect with knowledge. Powered by
                            intelligent conversation and verified academic data for seamless, personalized
                            course discovery.
                        </p>

                        <div class="flex flex-col justify-center items-center group">
                            <div class="size-[48px] block rounded-lg border border-accent/40 p-1">
                                <div class="w-full h-full rounded-lg bg-accent/10 border border-accent/20"></div>
                            </div>

                            <div class="h-[40px] w-px bg-gradient-to-b from-transparent via-accent/60 to-primary/60"></div>

                            <div class="relative w-full rounded-md border border-taupe/20 bg-neutral/40 overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-accent/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                                <div class="relative z-10 w-full space-y-6 sm:w-[395px] p-5 text-left">
                                    <p class="text-body font-medium text-md">Time spent</p>
                                    <div class="flex items-center gap-5 flex-wrap">
                                        <div>
                                            <p class="text-sm text-body/70">Meetings</p>
                                            <p class="text-body/80"><span class="text-primary font-semibold">12</span> hours</p>
                                        </div>
                                        <div>
                                            <p class="text-sm text-body/70">Personal</p>
                                            <p class="text-body/80"><span class="text-primary font-semibold">2.5</span> hours</p>
                                        </div>
                                        <div>
                                            <p class="text-sm text-body/70">Blocked</p>
                                            <p class="text-body/80"><span class="text-primary font-semibold">1.5</span> hours</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-4 border-t border-taupe/20 bg-background/60">
                                    <ul class="space-y-2 list-disc list-inside text-sm text-body/80">
                                        <li class="flex justify-between">
                                            <span>John - Studio Meet</span>
                                            <span>Today 21:00pm</span>
                                        </li>
                                        <li class="flex justify-between">
                                            <span class="text-orange-600 font-medium">Engineering All Hands</span>
                                            <span>Today 1:00am</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="content-flex-center bg-background text-body py-10">
        <div class="max-w-[1200px] mx-auto">
            <div class="flex flex-col md:flex-row gap-5 md:gap-10">

                <!-- Card 1 -->
                <div class="border border-taupe/20 bg-white rounded-md p-6 flex-1 shadow-sm hover:shadow-md transition">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div class="size-10 rounded-md bg-primary/10 flex items-center justify-center">
                                <span class="text-primary font-semibold text-lg">✓</span>
                            </div>
                        </div>
                        <div>
                            <div class="text-3xl font-semibold text-taupe">99%</div>
                            <p class="text-sm text-body/70 mt-1">
                                AI solutions built exclusively for academic and public libraries.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="border border-taupe/20 bg-white rounded-md p-6 flex-1 shadow-sm hover:shadow-md transition">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div class="size-10 rounded-md bg-accent/10 flex items-center justify-center">
                                <span class="text-orange-600 font-semibold text-lg">⚡</span>
                            </div>
                        </div>
                        <div>
                            <div class="text-3xl font-semibold text-taupe">24/7</div>
                            <p class="text-sm text-body/70 mt-1">
                                Professional development and reference support around the clock.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="border border-taupe/20 bg-white rounded-md p-6 flex-1 shadow-sm hover:shadow-md transition">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div class="size-10 rounded-md bg-secondary/10 flex items-center justify-center">
                                <span class="text-secondary font-semibold text-lg">📚</span>
                            </div>
                        </div>
                        <div>
                            <div class="text-3xl font-semibold text-taupe">3X</div>
                            <p class="text-sm text-body/70 mt-1">
                                Comprehensive tools for reference, mentoring, and courseware guidance.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="content-flex-center bg-background text-body pb-10">
        <div class="wrapper py-10">
            <div class="flex flex-col gap-2.5 text-center">
                <div class="wrapper-text max-w-2xl mx-auto">
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium uppercase bg-primary/10 border border-primary/20 text-primary">
                      The Future
                    </span>
                    <h2 class="text-taupe font-semibold text-3xl md:text-4xl">
                        The Future of Libraries Today
                    </h2>
                    <p class="subheading-small text-body/70">
                        Libraries are evolving. At <span class="text-primary font-semibold">Librana AI</span>, we create AI that does more than answer questions it guides, mentors, and empowers. Our solutions put knowledge, professionalism, and trust at the heart of every interaction.
                    </p>
                </div>
            </div>
        </div>

        <!-- Cards -->
        <div class="grid-card-3 max-w-[1200px] mx-auto">

            <!-- Card 1 -->
            <div class="border border-taupe/20 bg-white rounded-md p-8 shadow-sm hover:shadow-md transition space-y-5 relative">
                <div class="relative w-full overflow-hidden">
                    <p class="text-primary font-semibold uppercase text-sm">librana® AI Librarian</p>
                    <h4 class="text-lg text-taupe font-semibold">Your Digital Reference Librarian</h4>
                </div>

                <div class="w-full">
                    <div class="h-px w-full bg-gradient-to-r from-primary/10 via-primary/70 to-primary/10"></div>
                </div>

                <ul class="flex flex-col gap-3 text-body/70 text-sm">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-orange-600 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span><strong class="text-body font-semibold">Real Librarian:</strong> Converses like a real librarian.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-orange-600 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span><strong class="text-body font-semibold">Multi-factor Authentication:</strong> Added security layer for protection.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-orange-600 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span><strong class="text-body font-semibold">24/7 Monitoring:</strong> Continuous monitoring and threat detection.</span>
                    </li>
                </ul>

                <a href="{{ route('contact-us') }}" class="inline-flex items-center gap-2 text-primary font-semibold text-sm mt-4 group">
                    <span>Try it now</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14m-7-7 7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <!-- Card 2 -->
            <div class="border border-taupe/20 bg-white rounded-md p-8 shadow-sm hover:shadow-md transition space-y-5 relative">
                <div class="relative w-full overflow-hidden">
                    <p class="text-orange-600 font-semibold uppercase text-sm">librana® Mentor</p>
                    <h4 class="text-lg text-taupe font-semibold">Your AI Librarian Mentor</h4>
                </div>

                <div class="w-full">
                    <div class="h-px w-full bg-gradient-to-r from-accent/10 via-accent/70 to-accent/10"></div>
                </div>

                <ul class="flex flex-col gap-3 text-body/70 text-sm">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-orange-600 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span><strong class="text-body font-semibold">Regulatory Compliance:</strong> Meets GDPR standards and industry regulations.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-orange-600 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span><strong class="text-body font-semibold">AI Guidance:</strong> Personalized mentoring to develop research skills.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-orange-600 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span><strong class="text-body font-semibold">24/7 Monitoring:</strong> Continuous improvement and ethical auditing.</span>
                    </li>
                </ul>

                <a href="{{ route('contact-us') }}" class="inline-flex items-center gap-2 text-orange-600 font-semibold text-sm mt-4 group">
                    <span>Try it now</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14m-7-7 7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <!-- Card 3 -->
            <div class="border border-taupe/20 bg-white rounded-md p-8 shadow-sm hover:shadow-md transition space-y-5 relative">
                <div class="relative w-full overflow-hidden">
                    <p class="text-secondary font-semibold uppercase text-sm">librana® Courseware Advisor</p>
                    <h4 class="text-lg text-taupe font-semibold">AI that transforms how universities and organizations teach</h4>
                </div>

                <div class="w-full">
                    <div class="h-px w-full bg-gradient-to-r from-secondary/10 via-secondary/70 to-secondary/10"></div>
                </div>

                <ul class="flex flex-col gap-3 text-body/70 text-sm">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-secondary shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span><strong class="text-body font-semibold">Regulatory Compliance:</strong> Meets GDPR and educational standards.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-secondary shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span><strong class="text-body font-semibold">Course Insights:</strong> Provides analytics to optimize teaching outcomes.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-secondary shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span><strong class="text-body font-semibold">Smart Feedback:</strong> Delivers contextual feedback for continuous improvement.</span>
                    </li>
                </ul>

                <a href="{{ route('contact-us') }}" class="inline-flex items-center gap-2 text-secondary font-semibold text-sm mt-4 group">
                    <span>Try it now</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14m-7-7 7 7-7 7"></path>
                    </svg>
                </a>
            </div>

        </div>
    </section>

    <section class="content-flex-center gap-[60px] mt-20 pb-10 bg-gradient-to-b from-white via-[#f5f5f7] to-[#F5F1DC]/40 rounded-2xl shadow-sm">
        <div class="wrapper-text">
    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs
      font-medium uppercase bg-primary/10 border border-primary text-primary">Features</span>

            <h2 class="text-taupe font-semibold">Explore features designed to enhance your business operations</h2>

            <p class="subheading-small text-taupe/80">
                Powerful tools designed for today’s challenges. Learn more about how we can best support your needs from
                startups to big companies.
            </p>
        </div>

        <!-- Cards -->
        <div class="grid-card-6">
            <div class="flex flex-col gap-5 border border-taupe/20 rounded-xl w-full h-full p-6 bg-white shadow-[0_2px_10px_rgba(0,0,0,0.05)] hover:shadow-[0_4px_20px_rgba(0,0,0,0.08)] transition-shadow">
                <div class="size-16 flex items-center justify-center">
                    <div class="size-[48px] rounded-full border border-accent p-1 bg-gradient-to-br from-[#FFF7F3] to-[#FFD1B3]">
                        <div class="w-full h-full rounded-full bg-[radial-gradient(30%_20%_at_50%_0%,rgba(255,255,255,0.9)_0%,rgba(255,128,64,0.3)_60%,#fff_100%)] border border-taupe/20"></div>
                    </div>
                </div>
                <h4 class="text-lg font-semibold text-taupe">Empathetic Professional Support</h4>
                <p class="text-taupe/70">Human-like conversations grounded in library ethics.</p>
            </div>

            <div class="flex flex-col gap-5 border border-taupe/20 rounded-xl w-full h-full p-6 bg-white shadow-[0_2px_10px_rgba(0,0,0,0.05)] hover:shadow-[0_4px_20px_rgba(0,0,0,0.08)] transition-shadow">
                <div class="size-16 flex items-center justify-center">
                    <div class="size-[48px] rounded-full border border-accent p-1 bg-gradient-to-br from-[#FFF7F3] to-[#FFD1B3]">
                        <div class="w-full h-full rounded-full bg-[radial-gradient(30%_20%_at_50%_0%,rgba(255,255,255,0.9)_0%,rgba(255,128,64,0.3)_60%,#fff_100%)] border border-taupe/20"></div>
                    </div>
                </div>
                <h4 class="text-lg font-semibold text-taupe">Global Library Standards</h4>
                <p class="text-taupe/70">Built on ALA, IFLA, RUSA, and ACRL best practices.</p>
            </div>

            <div class="flex flex-col gap-5 border border-taupe/20 rounded-xl w-full h-full p-6 bg-white shadow-[0_2px_10px_rgba(0,0,0,0.05)] hover:shadow-[0_4px_20px_rgba(0,0,0,0.08)] transition-shadow">
                <div class="size-16 flex items-center justify-center">
                    <div class="size-[48px] rounded-full border border-accent p-1 bg-gradient-to-br from-[#FFF7F3] to-[#FFD1B3]">
                        <div class="w-full h-full rounded-full bg-[radial-gradient(30%_20%_at_50%_0%,rgba(255,255,255,0.9)_0%,rgba(255,128,64,0.3)_60%,#fff_100%)] border border-taupe/20"></div>
                    </div>
                </div>
                <h4 class="text-lg font-semibold text-taupe">Continuous Learning & Development</h4>
                <p class="text-taupe/70">24/7 mentorship that grows with your team.</p>
            </div>

            <div class="flex flex-col gap-5 border border-taupe/20 rounded-xl w-full h-full p-6 bg-white shadow-[0_2px_10px_rgba(0,0,0,0.05)] hover:shadow-[0_4px_20px_rgba(0,0,0,0.08)] transition-shadow">
                <div class="size-16 flex items-center justify-center">
                    <div class="size-[48px] rounded-full border border-accent p-1 bg-gradient-to-br from-[#FFF7F3] to-[#FFD1B3]">
                        <div class="w-full h-full rounded-full bg-[radial-gradient(30%_20%_at_50%_0%,rgba(255,255,255,0.9)_0%,rgba(255,128,64,0.3)_60%,#fff_100%)] border border-taupe/20"></div>
                    </div>
                </div>
                <h4 class="text-lg font-semibold text-taupe">Safer, Smarter Answers</h4>
                <p class="text-taupe/70">Research-backed responses you can trust.</p>
            </div>

            <div class="flex flex-col gap-5 border border-taupe/20 rounded-xl w-full h-full p-6 bg-white shadow-[0_2px_10px_rgba(0,0,0,0.05)] hover:shadow-[0_4px_20px_rgba(0,0,0,0.08)] transition-shadow">
                <div class="size-16 flex items-center justify-center">
                    <div class="size-[48px] rounded-full border border-accent p-1 bg-gradient-to-br from-[#FFF7F3] to-[#FFD1B3]">
                        <div class="w-full h-full rounded-full bg-[radial-gradient(30%_20%_at_50%_0%,rgba(255,255,255,0.9)_0%,rgba(255,128,64,0.3)_60%,#fff_100%)] border border-taupe/20"></div>
                    </div>
                </div>
                <h4 class="text-lg font-semibold text-taupe">Seamless Integration</h4>
                <p class="text-taupe/70">Works within your existing library systems.</p>
            </div>

            <div class="flex flex-col gap-5 border border-taupe/20 rounded-xl w-full h-full p-6 bg-white shadow-[0_2px_10px_rgba(0,0,0,0.05)] hover:shadow-[0_4px_20px_rgba(0,0,0,0.08)] transition-shadow">
                <div class="size-16 flex items-center justify-center">
                    <div class="size-[48px] rounded-full border border-accent p-1 bg-gradient-to-br from-[#FFF7F3] to-[#FFD1B3]">
                        <div class="w-full h-full rounded-full bg-[radial-gradient(30%_20%_at_50%_0%,rgba(255,255,255,0.9)_0%,rgba(255,128,64,0.3)_60%,#fff_100%)] border border-taupe/20"></div>
                    </div>
                </div>
                <h4 class="text-lg font-semibold text-taupe">Mission Critical Reliability</h4>
                <p class="text-taupe/70">Future-proof AI designed for library professionals.</p>
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

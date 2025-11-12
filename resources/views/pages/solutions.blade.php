<x-layout title="Solution">
    <!-- Hero Section -->
    <section
        class="relative px-5 pt-24 pb-20 h-auto overflow-hidden text-white bg-gradient-to-br from-[#001234] via-[#001b4f] to-[#0a2a8f] animate-gradient-move bg-[length:200%_200%]">
        <!-- Floating accent glows -->
        <div class="absolute top-[-120px] left-[20%] w-[380px] h-[380px] bg-accent/25 blur-[130px] rounded-full"></div>
        <div
            class="absolute bottom-[-150px] right-[10%] w-[320px] h-[320px] bg-primary/30 blur-[110px] rounded-full"></div>

        <!-- Content -->
        <div class="relative z-10 wrapper">
            <div class="max-w-[780px] space-y-6">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight capitalize">
                    Smarter Reference. <br class="hidden sm:block"/> Stronger Research.
                </h1>

                <p class="text-lg text-neutral/80 max-w-[640px]">
                    Empower librarians and researchers with AI that understands your needs. Explore how Librana's
                    automation suite transforms the way libraries serve their communities.
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
    </section>
    <!-- End Hero Section -->

    <section class="content-flex-center space-y-5 bg-white text-body py-16">
        <div class="flex flex-col md:flex-row items-center gap-10 justify-center relative w-full max-w-[1200px] mx-auto lg:px-8">
            <!-- Left Chat Simulation Panel -->
            <div class="flex-1 relative min-h-[512px] w-full overflow-hidden bg-gradient-to-b from-primary/5 to-terracotta/10 rounded-2xl p-4 md:p-6 shadow-md">
                <!-- Librana AI Bubble -->
                <div
                    class="p-3 rounded-md flex items-start gap-3 bg-primary text-white shadow-lg w-full sm:w-fit
               md:absolute md:top-5 md:left-5 md:justify-start">
                    <div class="size-[42px] rounded-md relative overflow-hidden shrink-0">
                        <img src="{{ asset('img/profile-1.webp') }}" class="absolute w-full h-full object-cover"
                             alt="profile picture">
                    </div>
                    <div class="flex-1">
                        <span class="font-medium block">Librana® AI Librarian</span>
                        <p class="text-xs text-white/80 leading-tight">
                            "Your 24/7 digital reference companion providing empathetic, precise research support."
                        </p>
                        <p class="text-xs text-white/60 mt-1">Replying now...</p>
                    </div>
                    <div class="time ml-auto sm:ml-2">
                        <p class="text-xs text-white/70 whitespace-nowrap">09:45 AM</p>
                    </div>
                </div>

                <!-- User Chat Bubbles -->
                <div class="space-y-2 mt-5 md:mt-0 md:absolute md:bottom-6 md:left-6">
                    <!-- Sarah -->
                    <div class="p-2 rounded-md flex items-start gap-3 border border-primary/10 bg-white shadow-sm w-full sm:w-fit">
                        <div class="size-[42px] rounded-md relative overflow-hidden shrink-0">
                            <img src="{{ asset('img/young-woman.webp') }}" class="absolute w-full h-full object-cover"
                                 alt="profile picture">
                        </div>
                        <div class="flex-1">
                            <span class="font-medium text-primary block">Sarah, Graduate Student</span>
                            <p class="text-xs text-neutral-600 leading-[16px]">"Looking for primary sources on climate change research..."</p>
                        </div>
                        <div class="time ml-auto sm:ml-2">
                            <p class="text-xs text-neutral-400 whitespace-nowrap">02:15 AM</p>
                        </div>
                    </div>

                    <!-- Dr. James -->
                    <div
                        class="p-2 rounded-md flex items-start gap-3 border border-primary/10 bg-white shadow-sm w-full sm:w-fit">
                        <div class="size-[42px] rounded-md relative overflow-hidden shrink-0">
                            <img src="{{ asset('img/profile-2.webp') }}" class="absolute w-full h-full object-cover"
                                 alt="profile picture">
                        </div>
                        <div class="flex-1">
                            <span class="font-medium text-primary block">Dr. James, Faculty</span>
                            <p class="text-xs text-neutral-600 leading-[16px]">"Need help with systematic literature review..."</p>
                        </div>
                        <div class="time ml-auto sm:ml-2">
                            <p class="text-xs text-neutral-400 whitespace-nowrap">04:01 PM</p>
                        </div>
                    </div>

                    <!-- David -->
                    <div
                        class="p-2 rounded-md flex items-start gap-3 border border-primary/10 bg-white shadow-sm w-full sm:w-fit">
                        <div class="size-[42px] rounded-md relative overflow-hidden shrink-0">
                            <img src="{{ asset('img/profile-3.webp') }}" class="absolute w-full h-full object-cover"
                                 alt="profile picture">
                        </div>
                        <div class="flex-1">
                            <span class="font-medium text-primary block">David, Undergraduate</span>
                            <p class="text-xs text-neutral-600 leading-[16px]">"Need assistance finding stem cells research papers?"</p>
                        </div>
                        <div class="time ml-auto sm:ml-2">
                            <p class="text-xs text-neutral-400 whitespace-nowrap">06:20 PM</p>
                        </div>
                    </div>

                    <!-- Rachel -->
                    <div
                        class="p-2 rounded-md flex items-start gap-3 border border-primary/10 bg-white shadow-sm w-full sm:w-fit">
                        <div class="size-[42px] rounded-md relative overflow-hidden shrink-0">
                            <img src="{{ asset('img/young-woman-2.webp') }}" class="absolute w-full h-full object-cover"
                                 alt="profile picture">
                        </div>
                        <div class="flex-1">
                            <span class="font-medium text-primary block">Rachel, PhD Postgraduate</span>
                            <p class="text-xs text-neutral-600 leading-[16px]">"Can you recommend databases for sociology research?"</p>
                        </div>
                        <div class="time ml-auto sm:ml-2">
                            <p class="text-xs text-neutral-400 whitespace-nowrap">11:21 AM</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Content -->
            <div class="space-y-6 flex-1">
                  <span
                      class="inline-flex w-fit items-center gap-x-1.5 py-[3px] px-3 rounded-full text-sm font-medium uppercase bg-primary/10 border border-primary text-primary">
                    Automation
                  </span>
                <h2 class="max-w-[480px] text-3xl font-semibold text-primary">
                    Workflow Automation
                </h2>
                <p class="text-neutral-600 max-w-[480px] leading-relaxed">
                    Librana AI connects your internal systems, triggers actions based on business logic, and eliminates
                    manual coordination.
                </p>

                <ul class="flex flex-col gap-4 text-sm text-neutral-600">
                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-primary mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span><strong class="text-neutral-900 font-semibold">Regulatory Compliance:</strong> Automate cataloguing, metadata standards (ALA, IFLA, ACRL compliance)</span>
                    </li>

                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-primary mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span><strong class="text-neutral-900 font-semibold">Multi-factor Authentication:</strong> Secure access workflows across library systems and patron databases.</span>
                    </li>

                    <li class="flex items-start gap-3 pl-1">
                        <svg class="w-5 h-5 shrink-0 text-primary mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span><strong class="text-neutral-900 font-semibold">24/7 Monitoring:</strong> Real-time patron query handling, reference desk support, and research assistance.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="relative px-5 bg-gradient-to-b from-white via-white to-orange-50/10 overflow-hidden">
        <div class="max-w-[1200px] mx-auto flex flex-col items-center gap-14 text-center">
            <!-- Header -->
            <div class="space-y-5 max-w-[700px]">
      <span
          class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-semibold uppercase bg-orange-100 border border-orange-300 text-orange-700 shadow-sm"
      >
        Features
      </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                    Explore features designed to enhance your business operations
                </h2>
                <p class="text-gray-600 text-base md:text-lg leading-relaxed">
                    Powerful tools designed for today’s challenges. Learn how we can best support your needs from
                    startups to global institutions.
                </p>
            </div>

            <!-- Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 w-full">
                <!-- Card -->
                <div
                    class="group p-6 border border-gray-200 rounded-2xl bg-white shadow-sm hover:shadow-lg hover:border-orange-400 transition-all duration-300">
                    <div
                        class="size-14 flex items-center justify-center mx-auto rounded-full bg-orange-100 border border-orange-300 group-hover:scale-110 transition-transform duration-300">
                        <div class="size-7 rounded-full bg-orange-500"></div>
                    </div>
                    <h4 class="text-xl font-semibold mt-6 text-gray-900">Intelligent Query Resolution</h4>
                    <p class="text-gray-600 mt-3">
                        Transform complex research questions into precise answers instantly connecting patrons to the
                        right resources with librarian-level accuracy.
                    </p>
                </div>

                <!-- Card -->
                <div
                    class="group p-6 border border-gray-200 rounded-2xl bg-white shadow-sm hover:shadow-lg hover:border-orange-400 transition-all duration-300">
                    <div
                        class="size-14 flex items-center justify-center mx-auto rounded-full bg-orange-100 border border-orange-300 group-hover:scale-110 transition-transform duration-300">
                        <div class="size-7 rounded-full bg-orange-500"></div>
                    </div>
                    <h4 class="text-xl font-semibold mt-6 text-gray-900">Workflow Intelligence</h4>
                    <p class="text-gray-600 mt-3">
                        Automate repetitive tasks from classification to circulation while maintaining the highest
                        standards of library excellence.
                    </p>
                </div>

                <!-- Card -->
                <div
                    class="group p-6 border border-gray-200 rounded-2xl bg-white shadow-sm hover:shadow-lg hover:border-orange-400 transition-all duration-300">
                    <div
                        class="size-14 flex items-center justify-center mx-auto rounded-full bg-orange-100 border border-orange-300 group-hover:scale-110 transition-transform duration-300">
                        <div class="size-7 rounded-full bg-orange-500"></div>
                    </div>
                    <h4 class="text-xl font-semibold mt-6 text-gray-900">Empathetic AI Conversations</h4>
                    <p class="text-gray-600 mt-3">
                        Engage patrons through warm, intuitive dialogue that understands context, emotion, and intent
                        just like your best reference librarians.
                    </p>
                </div>

                <!-- Card -->
                <div
                    class="group p-6 border border-gray-200 rounded-2xl bg-white shadow-sm hover:shadow-lg hover:border-orange-400 transition-all duration-300">
                    <div
                        class="size-14 flex items-center justify-center mx-auto rounded-full bg-orange-100 border border-orange-300 group-hover:scale-110 transition-transform duration-300">
                        <div class="size-7 rounded-full bg-orange-500"></div>
                    </div>
                    <h4 class="text-xl font-semibold mt-6 text-gray-900">Strategic Collection Insights</h4>
                    <p class="text-gray-600 mt-3">
                        Discover hidden patterns in usage data and emerging research needs empowering smarter
                        acquisitions and resource allocation.
                    </p>
                </div>

                <!-- Card -->
                <div
                    class="group p-6 border border-gray-200 rounded-2xl bg-white shadow-sm hover:shadow-lg hover:border-orange-400 transition-all duration-300">
                    <div
                        class="size-14 flex items-center justify-center mx-auto rounded-full bg-orange-100 border border-orange-300 group-hover:scale-110 transition-transform duration-300">
                        <div class="size-7 rounded-full bg-orange-500"></div>
                    </div>
                    <h4 class="text-xl font-semibold mt-6 text-gray-900">Universal System Harmony</h4>
                    <p class="text-gray-600 mt-3">
                        Integrate your ILS, discovery layers, and research databases into one cohesive ecosystem that
                        works as hard as your team does.
                    </p>
                </div>

                <!-- Card -->
                <div
                    class="group p-6 border border-gray-200 rounded-2xl bg-white shadow-sm hover:shadow-lg hover:border-orange-400 transition-all duration-300">
                    <div
                        class="size-14 flex items-center justify-center mx-auto rounded-full bg-orange-100 border border-orange-300 group-hover:scale-110 transition-transform duration-300">
                        <div class="size-7 rounded-full bg-orange-500"></div>
                    </div>
                    <h4 class="text-xl font-semibold mt-6 text-gray-900">Adaptive Professional Growth</h4>
                    <p class="text-gray-600 mt-3">
                        Evolve alongside your librarians through personalized mentorship that transforms daily
                        challenges into mastery moments.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- GROWTH SECTION -->
    <section class="relative py-20 px-5 bg-white overflow-hidden">
        <div class="flex flex-col md:flex-row items-center gap-10 justify-center w-full max-w-[1200px] mx-auto">
            <!-- Image -->
            <div class="flex-1 relative min-h-[512px] w-full">
                <img
                    src="{{ asset('img/engagement.webp') }}"
                    class="absolute top-0 left-0 w-full h-full object-cover rounded-lg shadow-md"
                    alt="metrics"
                />
            </div>

            <!-- Text -->
            <div class="space-y-6 flex-1">
      <span
          class="inline-flex w-fit items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-semibold uppercase bg-orange-100 border border-orange-300 text-orange-700"
      >
        Growth
      </span>
                <h2 class="max-w-[480px] text-3xl md:text-4xl font-bold text-gray-900">
                    Professional Development & Patron Engagement
                </h2>
                <p class="text-gray-600 max-w-[480px] leading-relaxed">
                    Scale your library services without expanding staff hours. <span
                        class="font-semibold text-orange-600">librana®</span> supports both patrons and
                    librarians elevating service quality and professional growth.
                </p>

                <!-- List -->
                <ul class="flex flex-col gap-4 text-gray-700 text-sm">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 shrink-0 text-orange-500 mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span><strong class="text-gray-900 font-semibold">Regulatory Compliance:</strong> AI-driven reference support based on ALA, IFLA, and ACRL standards.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 shrink-0 text-orange-500 mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span><strong class="text-gray-900 font-semibold">Multi-factor Authentication:</strong> Seamless access for librarians, students, researchers, and staff.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 shrink-0 text-orange-500 mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span><strong class="text-gray-900 font-semibold">24/7 Monitoring:</strong> Track queries, skill development, and patron engagement in real-time.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ANALYTICS SECTION -->
    <section class="relative px-5 bg-gradient-to-b from-white via-orange-50/10 to-white overflow-hidden">
        <div class="flex flex-col md:flex-row items-center gap-10 justify-center w-full max-w-[1200px] mx-auto">
            <!-- Text -->
            <div class="space-y-6 flex-1">
      <span
          class="inline-flex w-fit items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-semibold uppercase bg-orange-100 border border-orange-300 text-orange-700"
      >
        Analytics
      </span>
                <h2 class="max-w-[480px] text-3xl md:text-4xl font-bold text-gray-900">
                    Data Processing & Insights
                </h2>
                <p class="text-gray-600 max-w-[480px] leading-relaxed">
                    Make better decisions with clean, contextual data. <span class="font-semibold text-orange-600">librana®</span>
                    processes your collection data, patron trends, and staff performance into actionable insights.
                </p>

                <!-- List -->
                <ul class="flex flex-col gap-4 text-gray-700 text-sm">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 shrink-0 text-orange-500 mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span><strong class="text-gray-900 font-semibold">Regulatory Compliance:</strong> Automate metadata standards and cataloguing best practices.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 shrink-0 text-orange-500 mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span><strong class="text-gray-900 font-semibold">Multi-factor Authentication:</strong> Visual access dashboards for library staff and administrators.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 shrink-0 text-orange-500 mt-0.5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span><strong class="text-gray-900 font-semibold">24/7 Monitoring:</strong> Monitor patron activity, collection usage, and knowledge gaps in real-time.</span>
                    </li>
                </ul>

                <!-- Button -->
                <a
                    href="{{ route('contact-us') }}"
                    class="inline-flex items-center gap-2 bg-orange-600 text-white px-6 py-3 rounded-full font-semibold shadow-md hover:bg-orange-700 transition-all duration-300 group"
                >
                    <span>Get Started</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="text-white group-hover:translate-x-1 transition-transform duration-300">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <!-- Image -->
            <div class="flex-1 relative lg:min-h-[512px] w-full flex items-center justify-end">
                <div class="lg:w-3/4 lg:h-3/4 rounded-lg overflow-hidden shadow-md">
                    <img
                        src="{{ asset('img/data-usage.webp') }}"
                        class="w-full h-full object-cover"
                        alt="metrics"
                    />
                </div>
            </div>
        </div>
    </section>

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

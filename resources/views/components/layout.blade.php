@props(['title' => 'libriana.ai'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="relative">
<!-- HEADER -->
<header
    class="flex flex-wrap lg:justify-start lg:flex-nowrap z-50 w-full py-2.5 backdrop-blur-[5px]bg-body/5">
    <nav
        class="relative max-w-7xl w-full flex flex-wrap lg:grid lg:grid-cols-12 basis-full items-center px-5 md:px-6 lg:px-8 mx-auto">
        <div class="lg:col-span-3 flex items-center">
            <!-- Logo -->
            <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-hidden focus:opacity-80"
               href="/" aria-label="Preline">
                <img src="{{ asset("/img/logo-text.svg") }}" class="h-9" alt="logo">
            </a>
            <!-- End Logo -->
        </div>

        <!-- Button Group -->
        <div class="flex items-center gap-x-1 lg:gap-x-2 ms-auto py-1 lg:ps-6 lg:order-3 lg:col-span-3">
            <button class="btn group hidden lg:block">
                <div class="btn-icon group-hover:w-[calc(100%-0.5rem)]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="w-full h-full text-primary">
                        <path d="M5 12h14"/>
                        <path d="m12 5 7 7-7 7"/>
                    </svg>
                </div>
                <span class="text-white text-base font-semibold">Get Started</span>
            </button>

            <div class="md:hidden">
                <button type="button"
                        class="hs-collapse-toggle size-9.5 flex justify-center items-center text-sm font-semibold rounded-xl border border-punch text-body hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        id="hs-pro-hcail-collapse" aria-expanded="false" aria-controls="hs-pro-hcail"
                        aria-label="Toggle navigation" data-hs-collapse="#hs-pro-hcail">
                    <svg class="hs-collapse-open:hidden shrink-0 size-4 text-primary" xmlns="http://www.w3.org/2000/svg"
                         width="24"
                         height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6"/>
                        <line x1="3" x2="21" y1="12" y2="12"/>
                        <line x1="3" x2="21" y1="18" y2="18"/>
                    </svg>
                    <svg class="hs-collapse-open:block hidden shrink-0 size-4 text-primary"
                         xmlns="http://www.w3.org/2000/svg"
                         width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"/>
                        <path d="m6 6 12 12"/>
                    </svg>
                </button>
            </div>
        </div>
        <!-- End Button Group -->

        <!-- Collapse -->
        <div id="hs-pro-hcail"
             class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block lg:w-auto md:basis-auto md:order-2 md:col-span-6"
             aria-labelledby="hs-pro-hcail-collapse">
            <div
                class="flex flex-col gap-y-4 gap-x-0 mt-5 md:flex-row md:justify-center md:items-center md:gap-y-0 md:gap-x-7 md:mt-0">
                <div>
                    <a class="relative inline-block text-background focus:outline-hidden {{ isActiveRoute('home', 'before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-orange') }} dark:text-white"
                       href="{{route('home')}}">Home</a>
                </div>
                <div>
                    <a class="relative inline-block text-background hover:text-gray-600 focus:outline-hidden focus:text-gray-600 {{ isActiveRoute('about-us', 'before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-orange') }} dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300"
                       href="{{route('about-us')}}">About</a>
                </div>
                <div>
                    <a class="relative inline-block text-background hover:text-gray-600 focus:outline-hidden focus:text-gray-600 {{ isActiveRoute('product', 'before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-orange') }} dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300"
                       href="{{route('product')}}">Product</a>
                </div>
                <div>
                    <a class="relative inline-block text-background hover:text-gray-600 focus:outline-hidden focus:text-gray-600 {{ isActiveRoute('solution', 'before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-orange') }} dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300"
                       href="{{route('solution')}}">Solution</a>
                </div>
                <div>
                    <a class="relative inline-block text-background hover:text-gray-600 focus:outline-hidden focus:text-gray-600 {{ isActiveRoute('our-story', 'before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-orange') }} dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300"
                       href="{{route('our-story')}}">Our Story</a>
                </div>
                <div>
                    <a class="relative inline-block text-background hover:text-gray-600 focus:outline-hidden focus:text-gray-600 {{ isActiveRoute('contact-us', 'before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-orange') }} dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300"
                       href="{{route('contact-us')}}">Contact us</a>
                </div>
            </div>
        </div>
        <!-- End Collapse -->
    </nav>
</header>
<!-- END HEADER -->

<main>
    {{ $slot }}
</main>

<footer class="content-flex">
    <div class="pt-[50px] pb-[20px] w-full max-w-[1200px] mx-auto flex flex-col gap-10 md:gap-[60px]">
        <div class="flex flex-col lg:flex-row gap-5 lg:gap-[141px]">
            <div class="flex flex-col sm:flex-row lg:flex-col gap-5 flex-1">
                <div class="flex flex-col gap-5 flex-1">
                    <div class="logo h-[30px] w-[108px] relative">
                        <img src="{{asset('img/logo-text.svg')}}" class="w-full h-full object-contain" alt="logo">
                    </div>
                    <p class="w-[313px] lg:w-full">Empower your business with cutting-edge AI technology that transforms
                        raw data into actionable
                        insights.</p>
                </div>
                <div class="flex flex-col gap-1">
                    <p class="text-background/70 text-sm">Contact us</p>
                    <a href="">+234 903 2732 049</a>
                    <a href="">Libriana.ai@support.com</a>
                </div>
            </div>
            <div class="flex-1 flex flex-col sm:flex-row gap-5">
                <div class="flex flex-col gap-5 flex-1">
                    <p class="capitalize text-background/70 text-sm">Quick links</p>
                    <ul class="flex flex-col gap-5">
                        <li>
                            <a href="{{route('home')}}"
                               class="text-sm cursor-pointer capitalize {{ request()->routeIs('home') ? 'text-orange' : '' }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{route('product')}}"
                               class="text-sm cursor-pointer capitalize {{ request()->routeIs('product') ? 'text-orange' : '' }}">
                                Product
                            </a>
                        </li>
                        <li>
                            <a href="{{route('solution')}}"
                               class="text-sm cursor-pointer capitalize {{ request()->routeIs('solution') ? 'text-orange' : '' }}">
                                Solution
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col gap-5 flex-1">
                    <p class="capitalize text-background/70 text-sm">explore</p>
                    <ul class="flex flex-col gap-5">
                        <li>
                            <a href="{{route('about-us')}}"
                               class="text-sm cursor-pointer capitalize {{ request()->routeIs('about-us') ? 'text-orange' : '' }}">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="{{route('our-story')}}"
                               class="text-sm cursor-pointer capitalize {{ request()->routeIs('our-story') ? 'text-orange' : '' }}">
                                Our Story
                            </a>
                        </li>
                        <li>
                            <a href="{{route('contact-us')}}"
                               class="text-sm cursor-pointer capitalize {{ request()->routeIs('contact-us') ? 'text-orange' : '' }}">
                                Contact us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-5 md:flex-row-reverse md:justify-between md:items-center">
            <div class="flex gap-5">
                <p>Follow:</p>
                <div class="flex gap-[6px] items-center justify-start">
                    <a href="#"
                       class="flex justify-center items-center border border-transparent hover:border-background rounded-full size-[30px] transition-all duration-300 ease-in-out">
                        <svg viewBox="0 0 21.333 21.255" class="size-4" overflow="visible" id="svg1588946707_884">
                            <path d="M 8.09 21.02 L 8.09 13.926 L 5.891 13.926 L 5.891 10.667 L 8.09 10.667 L 8.09 9.262 C 8.09 5.631 9.732 3.948 13.297 3.948 C 13.653 3.948 14.146 3.986 14.602 4.04 C 14.943 4.075 15.282 4.133 15.616 4.213 L 15.616 7.169 C 15.423 7.151 15.229 7.14 15.036 7.137 C 14.818 7.131 14.601 7.129 14.384 7.129 C 13.756 7.129 13.265 7.214 12.895 7.404 C 12.647 7.528 12.438 7.72 12.292 7.956 C 12.062 8.33 11.959 8.841 11.959 9.514 L 11.959 10.667 L 15.443 10.667 L 15.1 12.536 L 14.844 13.926 L 11.959 13.926 L 11.959 21.255 C 17.241 20.617 21.333 16.12 21.333 10.667 C 21.333 4.776 16.557 0 10.667 0 C 4.776 0 0 4.776 0 10.667 C 0 15.669 3.444 19.867 8.09 21.02 Z"
                                  fill="var(--token-9f836d20-b606-4117-bf86-0922a20c4174, rgb(165, 165, 165))"></path>
                        </svg>
                    </a>
                    <a href="#"
                       class="flex justify-center items-center border border-transparent hover:border-background rounded-full size-[30px] transition-all duration-300 ease-in-out">
                        <svg viewBox="0 0 21.333 21.333" overflow="visible" id="svg2000015389_991" class="size-4">
                            <path d="M 18.175 18.18 L 15.016 18.18 L 15.016 13.229 C 15.016 12.049 14.992 10.53 13.37 10.53 C 11.723 10.53 11.471 11.814 11.471 13.142 L 11.471 18.18 L 8.312 18.18 L 8.312 8 L 11.347 8 L 11.347 9.388 L 11.388 9.388 C 11.812 8.588 12.843 7.743 14.383 7.743 C 17.584 7.743 18.176 9.85 18.176 12.592 L 18.176 18.18 Z M 4.744 6.607 C 4.257 6.607 3.79 6.414 3.446 6.07 C 3.102 5.725 2.91 5.258 2.91 4.772 C 2.911 3.758 3.733 2.937 4.746 2.938 C 5.759 2.938 6.58 3.76 6.58 4.773 C 6.579 5.787 5.757 6.608 4.744 6.607 Z M 6.328 18.18 L 3.16 18.18 L 3.16 8 L 6.328 8 Z M 19.756 0 L 1.574 0 C 0.704 0 0 0.688 0 1.537 L 0 19.796 C 0 20.646 0.704 21.333 1.574 21.333 L 19.753 21.333 C 20.622 21.333 21.333 20.646 21.333 19.796 L 21.333 1.537 C 21.333 0.688 20.622 0 19.753 0 Z"
                                  fill="var(--token-9f836d20-b606-4117-bf86-0922a20c4174, rgb(165, 165, 165))"></path>
                        </svg>
                    </a>
                    <a href="#"
                       class="flex justify-center items-center border border-transparent hover:border-background rounded-full size-[30px] transition-all duration-300 ease-in-out">
                        <svg viewBox="0 0 21.333 19.283" overflow="visible" class="size-4" id="svg1738607330_459">
                            <path d="M 16.801 0 L 20.072 0 L 12.925 8.169 L 21.333 19.283 L 14.75 19.283 L 9.595 12.541 L 3.694 19.283 L 0.421 19.283 L 8.066 10.545 L 0 0.001 L 6.75 0.001 L 11.411 6.163 Z M 15.653 17.325 L 17.466 17.325 L 5.765 1.855 L 3.82 1.855 Z"
                                  fill="var(--token-9f836d20-b606-4117-bf86-0922a20c4174, rgb(165, 165, 165))"></path>
                        </svg>
                    </a>
                    <a href="#"
                       class="flex justify-center items-center border border-transparent hover:border-background rounded-full size-[30px] transition-all duration-300 ease-in-out">
                        <svg viewBox="0 0 20.627 23.51" overflow="visible" id="svg-1950279893_1776" class="size-4">
                            <path d="M 10.495 23.51 L 10.488 23.51 C 6.981 23.487 4.284 22.33 2.472 20.073 C 0.86 18.064 0.027 15.268 0 11.765 L 0 11.748 C 0.029 8.242 0.861 5.449 2.473 3.439 C 4.284 1.18 6.983 0.024 10.489 0 L 10.503 0 C 13.193 0.02 15.443 0.71 17.19 2.055 C 18.833 3.319 19.99 5.121 20.627 7.411 L 18.629 7.968 C 17.547 4.089 14.81 2.106 10.494 2.076 C 7.644 2.097 5.489 2.993 4.088 4.737 C 2.777 6.371 2.1 8.732 2.074 11.755 C 2.1 14.778 2.777 17.139 4.089 18.773 C 5.49 20.52 7.646 21.416 10.495 21.434 C 13.065 21.415 14.764 20.816 16.177 19.431 C 17.79 17.851 17.762 15.912 17.245 14.731 C 16.941 14.036 16.39 13.458 15.644 13.017 C 15.456 14.341 15.035 15.413 14.386 16.222 C 13.518 17.302 12.29 17.891 10.732 17.976 C 9.555 18.039 8.42 17.762 7.54 17.191 C 6.499 16.516 5.889 15.486 5.824 14.287 C 5.76 13.122 6.223 12.049 7.127 11.268 C 7.989 10.524 9.202 10.086 10.636 10.004 C 11.625 9.942 12.617 9.989 13.595 10.143 C 13.471 9.416 13.227 8.838 12.86 8.422 C 12.358 7.848 11.579 7.557 10.549 7.55 L 10.521 7.55 C 9.694 7.55 8.569 7.777 7.855 8.843 L 6.134 7.687 C 7.094 6.263 8.65 5.477 10.521 5.477 L 10.564 5.477 C 13.693 5.496 15.557 7.412 15.743 10.755 C 15.849 10.8 15.955 10.847 16.057 10.894 C 17.517 11.58 18.585 12.619 19.147 13.901 C 19.928 15.684 20 18.594 17.631 20.913 C 15.818 22.686 13.62 23.488 10.502 23.509 Z M 11.478 12.059 C 11.241 12.059 11.001 12.066 10.754 12.079 C 8.955 12.18 7.835 13.006 7.897 14.179 C 7.963 15.409 9.32 15.98 10.625 15.91 C 11.824 15.846 13.385 15.378 13.648 12.275 C 12.934 12.126 12.207 12.054 11.478 12.059 Z"
                                  fill="var(--token-9f836d20-b606-4117-bf86-0922a20c4174, rgb(165, 165, 165))"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <p class="text-sm text-background/70">
                &copy; {{ date('Y') }} Libriana ai Developed by&nbsp;Macqueen006.
            </p>
        </div>
    </div>
</footer>

@livewireScripts
</body>
</html>

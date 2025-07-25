<header x-data="headerScroll" @scroll.window="checkScroll"
        :class="{ 'opacity-0 -translate-y-full': hidden, 'opacity-100 translate-y-0': !hidden }"
        class="fixed inset-x-0 top-12 z-50 w-full text-sm transition-all duration-300 ease-in-out md:flex md:justify-start">

    <nav class="relative mx-2 w-full rounded-[36px] border border-black/40 bg-black/50 px-4 py-3 backdrop-blur-md md:flex md:items-center md:justify-between md:px-6 md:py-0 lg:px-8 xl:mx-auto"
        aria-label="Global">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="flex justify-between items-center h-16 w-full">
                <a href="/" class="flex items-center">
                    <x-brandLogo class="w-[200px]"/>
                </a>
                <x-nav-links/>
                <div class="md:hidden flex items-center">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-[#f4f4f5]">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div x-show="mobileMenuOpen" @click.away="mobileMenuOpen = false"
            class="md:hidden bg-[#f4f4f5]/90 shadow-lg absolute top-16 left-0 right-0">
            <x-responsive-nav-links/>
        </div>
    </nav>
</header>

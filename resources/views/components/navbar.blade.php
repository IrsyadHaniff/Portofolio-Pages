<nav x-data="{ open: false, scrolled: false }" @scroll.window="scrolled = window.pageYOffset > 50"
    :class="scrolled ? 'shadow-lg py-3' : 'shadow-md py-5'"
    class="fixed w-full top-0 z-50 bg-white dark:bg-gray-900 transition-all duration-300">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">

            {{-- Logo & Dark Mode Toggle (Left Side) --}}
            <div class="flex items-center space-x-4">
                <a href="/"
                    class="text-2xl font-bold text-gray-800 dark:text-white tracking-wider hover:text-blue-500 dark:hover:text-blue-400 transition-colors">
                    Hallo
                </a>

                <div class="flex items-center">
                    <!-- ICON MATAHARI (tampil saat LIGHT MODE) -->
                    <svg id="icon-light" class="w-6 h-6 cursor-pointer hidden dark:block text-gray-200"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5V3m0 18v-2M7.05 7.05 5.636 5.636m12.728 12.728L16.95 16.95M5 12H3m18 0h-2M7.05 16.95l-1.414 1.414M18.364 5.636 16.95 7.05M16 12a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" />
                    </svg>

                    <!-- ICON BULAN (tampil saat DARK MODE) -->
                    <svg id="icon-dark" class="w-6 h-6 cursor-pointer dark:hidden text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 21a9 9 0 0 1-.5-17.986V3c-.354.966-.5 1.911-.5 3a9 9 0 0 0 9 9c.239 0 .254.018.488 0A9.004 9.004 0 0 1 12 21Z" />
                    </svg>
                </div>
            </div>

            {{-- Desktop Menu (Centered) --}}
            <div class="hidden lg:flex items-center space-x-8 absolute left-1/2 transform -translate-x-1/2">

                {{-- Home with Dropdown --}}
                <div x-data="{ dropdownOpen: false }" class="relative">
                    <button @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false"
                        class="flex items-center space-x-1 text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 font-medium transition-colors">
                        <span>Home</span>
                    </button>
                </div>

                {{-- Regular Menu Items --}}
                <a href="#about" class="text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 font-medium transition-colors">
                    About Me
                </a>

                <a href="#portfolio" class="text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 font-medium transition-colors">
                    Portfolio
                </a>

                {{-- Blog with Dropdown --}}
                <div x-data="{ dropdownOpen: false }" class="relative">
                    <button @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false"
                        class="flex items-center space-x-1 text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 font-medium transition-colors">
                        <span>Blog</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div x-show="dropdownOpen" @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform translate-y-2"
                        class="absolute left-0 mt-4 w-56 bg-white dark:bg-gray-800 rounded-lg shadow-xl py-2" style="display: none;">
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-blue-500 dark:hover:text-blue-400 hover:pl-6 transition-all">
                            My Blog
                        </a>
                    </div>
                </div>

                <a href="#contact" class="text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 font-medium transition-colors">
                    Contact
                </a>
            </div>

            {{-- CTA Button (Right) --}}
            <div class="hidden lg:block">
                <a href="#contact"
                    class="bg-blue-500 dark:bg-blue-600 text-white px-6 py-2.5 rounded-full font-semibold hover:bg-transparent dark:hover:bg-transparent hover:text-blue-500 dark:hover:text-blue-400 border-2 border-blue-500 dark:border-blue-600 transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5">
                    Let's Talk
                </a>
            </div>

            {{-- Mobile Hamburger Button --}}
            <button @click="open = !open" class="lg:hidden focus:outline-none">
                <svg class="w-6 h-6 text-gray-700 dark:text-gray-200" :class="{ 'hidden': open }" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg class="w-6 h-6 text-gray-700 dark:text-gray-200" :class="{ 'hidden': !open }" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Mobile Menu --}}
        <div x-show="open" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 transform -translate-y-2"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform -translate-y-2" class="lg:hidden mt-4 pb-4"
            style="display: none;">

            {{-- Mobile Home Dropdown --}}
            <div x-data="{ mobileDropdown: false }" class="py-2">
                <button @click="mobileDropdown = !mobileDropdown"
                    class="w-full flex items-center justify-between px-4 py-2 text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 font-medium">
                    <span>Home</span>
                    <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': mobileDropdown }" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="mobileDropdown" class="bg-gray-50 dark:bg-gray-800 py-2" style="display: none;">
                    <a href="#" class="block px-8 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400">Home One</a>
                    <a href="#" class="block px-8 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400">Home Two</a>
                </div>
            </div>

            <a href="#about" class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 font-medium">About Me</a>
            <a href="#portfolio" class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 font-medium">Portfolio</a>
            <a href="#services" class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 font-medium">Services</a>
            <a href="#testimonial"
                class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 font-medium">Testimonial</a>

            {{-- Mobile Blog Dropdown --}}
            <div x-data="{ mobileDropdown: false }" class="py-2">
                <button @click="mobileDropdown = !mobileDropdown"
                    class="w-full flex items-center justify-between px-4 py-2 text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 font-medium">
                    <span>Blog</span>
                    <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': mobileDropdown }" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="mobileDropdown" class="bg-gray-50 dark:bg-gray-800 py-2" style="display: none;">
                    <a href="#" class="block px-8 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400">Standard Blog</a>
                    <a href="#" class="block px-8 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400">Grid Blog</a>
                    <a href="#" class="block px-8 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400">Blog List</a>
                    <a href="#" class="block px-8 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400">Blog Right Sidebar</a>
                    <a href="#" class="block px-8 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400">Blog Details</a>
                </div>
            </div>

            <a href="#contact" class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 font-medium">Contact</a>

            <div class="px-4 mt-4">
                <a href="#contact"
                    class="block text-center bg-blue-500 dark:bg-blue-600 text-white px-6 py-2.5 rounded-full font-semibold hover:bg-blue-600 dark:hover:bg-blue-700 transition-colors">
                    Let's Talk
                </a>
            </div>
        </div>
    </div>
</nav>


<div class="h-12 dark:bg-gray-900"></div>
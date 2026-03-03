<nav x-data="{ open: false, activeTag: {{ request()->routeIs('blog.index') ? "'Terkini'" : "null" }} }" class="w-full font-['Sora',sans-serif]">

    {{-- ===== TOP BAR ===== --}}
    <div class="bg-zinc-950 border-b border-zinc-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">

                {{-- Logo --}}
                <div class="flex items-center space-x-4">
                    <a href="/" class="flex items-center gap-2 group">
                        <span
                            class="text-emerald-400 text-xl font-black tracking-tight group-hover:text-emerald-300 transition-colors duration-200">
                            mon<span class="text-white">X</span>info
                        </span>
                    </a>
                    <div class="flex items-center">
                        <!-- ICON MATAHARI (tampil saat LIGHT MODE) -->
                        <svg id="icon-light" class="w-6 h-6 cursor-pointer hidden dark:block text-gray-200"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 5V3m0 18v-2M7.05 7.05 5.636 5.636m12.728 12.728L16.95 16.95M5 12H3m18 0h-2M7.05 16.95l-1.414 1.414M18.364 5.636 16.95 7.05M16 12a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" />
                        </svg>
    
                        <!-- ICON BULAN (tampil saat DARK MODE) -->
                        <svg id="icon-dark" class="w-6 h-6 cursor-pointer dark:hidden text-gray-700"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 21a9 9 0 0 1-.5-17.986V3c-.354.966-.5 1.911-.5 3a9 9 0 0 0 9 9c.239 0 .254.018.488 0A9.004 9.004 0 0 1 12 21Z" />
                        </svg>
                    </div>
                </div>

                {{-- Desktop Menu --}}
                <ul class="hidden md:flex items-center gap-1">
                    @foreach ([['label' => 'Home', 'href' => route('blog.index')], ['label' => 'About', 'href' => route('blog.about')], ['label' => 'Disclaimer', 'href' => '/disclaimer'], ['label' => 'Contact', 'href' => '/contact']] as $item)
                        <li>
                            <a href="{{ $item['href'] }}"
                                class="px-4 py-2 text-sm text-zinc-400 hover:text-white hover:bg-zinc-800 rounded-md transition-all duration-200 {{ request()->is(ltrim($item['href'], '/') ?: '/') ? 'text-white bg-zinc-800' : '' }}">
                                {{ $item['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                {{-- Search + Mobile Toggle --}}
                <div class="flex items-center gap-3">
                    <button
                        class="hidden md:flex items-center gap-2 px-3 py-1.5 text-xs text-zinc-500 bg-zinc-800 border border-zinc-700 rounded-full hover:border-zinc-500 hover:text-zinc-300 transition-all duration-200">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z" />
                        </svg>
                        Cari artikel...
                    </button>

                    {{-- Mobile hamburger --}}
                    <button @click="open = !open"
                        class="md:hidden text-zinc-400 hover:text-white transition-colors p-1.5">
                        <svg x-show="!open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg x-show="open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>
    </div>

    {{-- ===== TAG BAR ===== --}}
    <div class="bg-zinc-900 border-b border-zinc-800 overflow-x-auto scrollbar-hide">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <ul class="flex items-center gap-1 py-2 whitespace-nowrap">
                @foreach (['Terkini', 'Teknologi Informasi', 'Programming', 'HTML', 'CSS', 'JavaScript', 'Framework', 'Laravel'] as $tag)
                    <li>
                        <button @click="activeTag = '{{ $tag }}'"
                            :class="activeTag === '{{ $tag }}'
                                ?
                                'bg-emerald-500 text-zinc-950 font-semibold' :
                                'text-zinc-400 hover:text-white hover:bg-zinc-800'"
                            class="px-3 py-1 text-xs rounded-full transition-all duration-200 cursor-pointer">
                            {{ $tag }}
                        </button>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    {{-- ===== MOBILE DROPDOWN ===== --}}
    <div x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2" class="md:hidden bg-zinc-950 border-b border-zinc-800">
        <ul class="flex flex-col px-4 py-3 gap-1">
            @foreach ([['label' => 'Home', 'href' => '/'], ['label' => 'About', 'href' => '/about'], ['label' => 'Disclaimer', 'href' => '/disclaimer'], ['label' => 'Contact', 'href' => '/contact']] as $item)
                <li>
                    <a href="{{ $item['href'] }}"
                        class="block px-4 py-2.5 text-sm text-zinc-400 hover:text-white hover:bg-zinc-800 rounded-md transition-all duration-200">
                        {{ $item['label'] }}
                    </a>
                </li>
            @endforeach
            <li class="pt-2 border-t border-zinc-800 mt-1">
                <input type="text" placeholder="Cari artikel..."
                    class="w-full px-3 py-2 text-sm bg-zinc-800 border border-zinc-700 text-zinc-300 placeholder-zinc-500 rounded-md focus:outline-none focus:border-emerald-500 transition-colors" />
            </li>
        </ul>
    </div>

</nav>


<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>

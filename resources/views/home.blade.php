@extends('layouts.app')

@section('title', 'Home - Cv Portfolio')

@section('content')
    {{-- Hero Section - Split Layout (Foto Kiri, Teks Kanan) --}}
    <section class="flex items-center bg-gradient-to-br from-gray-50 to-blue-50 dark:from-gray-900 dark:to-gray-800 pt-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                {{-- Bagian Kiri - Foto --}}
                <div class="order-2 lg:order-1 flex justify-center lg:justify-start">
                    <div class="relative">
                        {{-- Background Circle Decoration --}}
                        <div class="absolute inset-0 bg-blue-500/10 dark:bg-blue-400/20 rounded-full blur-3xl"></div>

                        {{-- Profile Image --}}
                        <div class="relative">
                            {{-- light mode --}}
                            <img src="{{ asset('images/light-mode-preview.png') }}" alt="Irsyad Hanif Munawar"
                                class="rounded-3xl w-full max-w-md object-cover dark:opacity-90 dark:brightness-90 block dark:hidden">
                            {{-- dark mode --}}
                            <img src="{{ asset('images/dark-mode-preview.png') }}" alt="Irsyad Hanif Munawar"
                                class="rounded-3xl w-full max-w-md object-cover dark:opacity-90 dark:brightness-90 hidden dark:block">
                        </div>
                    </div>
                </div>

                {{-- Bagian Kanan - Teks (Centered Vertically) --}}
                <div class="order-1 lg:order-2 flex flex-col justify-center text-center lg:text-left">
                    {{-- Greeting Badge --}}
                    <div
                        class="inline-flex items-center gap-2 bg-white dark:bg-gray-800 rounded-full px-4 py-2 shadow-md dark:shadow-gray-700/50 mb-6 w-fit mx-auto lg:mx-0">
                        <span class="text-2xl">👋</span>
                        <span class="text-gray-700 dark:text-gray-200 font-medium">Hi there!</span>
                    </div>

                    {{-- Main Text --}}
                    <h2 class="text-gray-600 dark:text-gray-400 text-lg mb-2">I'm</h2>
                    <h1 class="text-5xl lg:text-5xl font-bold text-gray-800 dark:text-white mb-4">
                        Irsyad Hanif Munawar
                    </h1>

                    {{-- Job Title with Animation --}}
                    <div class="mb-6">
                        <span
                            class="inline-block bg-gradient-to-r from-blue-500 to-gray-600 dark:from-blue-400 dark:to-gray-500 text-white px-6 py-2 rounded-full text-sm font-semibold tracking-wider">
                            Student of Thecnology Information
                        </span>
                    </div>

                    {{-- Description --}}
                    <p class="text-gray-600 dark:text-gray-300 text-lg mb-8 max-w-xl mx-auto lg:mx-0">
                        Saya percaya bahwa kolaborasi dan kreativitas adalah inti dari kemajuan.
                        Dan saya berdedikasi untuk menghadirkan inovasi baru pada setiap proyek yang saya kerjakan.
                    </p>

                    {{-- CTA Buttons --}}
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#contact"
                            class="bg-blue-500 dark:bg-blue-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-gradient-to-r from-blue-500 to-gray-600 dark:from-blue-400 dark:to-gray-500 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                            Let's Talk
                        </a>
                        <a href="#"
                            class="bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200 px-8 py-3 rounded-full font-semibold border-2 border-gray-300 dark:border-gray-600 hover:border-blue-500 dark:hover:border-blue-400 hover:text-blue-500 dark:hover:text-blue-400 transition-all duration-300">
                            Download CV
                        </a>
                    </div>

                    {{-- Skills Icons --}}
                    <div class="flex items-center gap-6 mt-5 justify-center lg:justify-start">
                        <div class="text-center">
                            <div
                                class="w-12 h-12 bg-white dark:bg-gray-800 rounded-lg shadow-md dark:shadow-gray-700/50 flex items-center justify-center mb-2 hover:shadow-xl dark:hover:shadow-gray-700 transition-all duration-300 hover:-translate-y-1">
                                <a href="https://www.instagram.com/monxyzvi/" target="a_blank">
                                    <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/instagram.svg"
                                        class="w-8 h-8 fill-pink-500 dark:fill-pink-400 transition-all duration-300">
                                </a>
                            </div>
                        </div>
                        <div class="text-center">
                            <div
                                class="w-12 h-12 bg-white dark:bg-gray-800 rounded-lg shadow-md dark:shadow-gray-700/50 flex items-center justify-center mb-2 hover:shadow-xl dark:hover:shadow-gray-700 transition-all duration-300 hover:-translate-y-1">
                                <a href="#linkidln">
                                    <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/linkedin.svg"
                                        alt="LinkedIn"
                                        class="w-8 h-8 fill-blue-600 dark:fill-blue-400 transition-all duration-300">
                                </a>
                            </div>
                        </div>
                        <div class="text-center">
                            <div
                                class="w-12 h-12 bg-white dark:bg-gray-800 rounded-lg shadow-md dark:shadow-gray-700/50 flex items-center justify-center mb-2 hover:shadow-xl dark:hover:shadow-gray-700 transition-all duration-300 hover:-translate-y-1">
                                <a href="#wa">
                                    <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/whatsapp.svg"
                                        alt="WhatsApp"
                                        class="w-8 h-8 fill-green-500 dark:fill-green-400 transition-all duration-300">
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- UI UX Designer Text Outline --}}
                    <div class="mt-2 overflow-hidden relative">
                        <h2 class="text-6xl lg:text-5xl xl:text-5xl font-bold text-transparent select-none leading-tight
               [--stroke-color:rgba(20,93,238,0.795)] dark:[--stroke-color:rgba(255,255,255,0.8)]"
                            style="-webkit-text-stroke: 1px var(--stroke-color); text-stroke: 1px var(--stroke-color);">
                            Technology Information
                        </h2>

                        {{-- Teks stratch (tertarik) --}}
                        <div class="relative">
                            <h2 class="text-4xl lg:text-5xl xl:text-5xl font-bold text-transparent select-none leading-tight
                   [--stroke-color:rgba(20,93,238,0.795)] dark:[--stroke-color:rgba(255,255,255,0.8)]"
                                style="-webkit-text-stroke: 1px var(--stroke-color); text-stroke: 1px var(--stroke-color); transform: scaleY(-1) scaleX(1); opacity: 0.4;">
                                Technology Information
                            </h2>

                            {{-- Gradient Overlay --}}
                            <div
                                class="absolute inset-0 bg-gradient-to-t 
                    from-gray-50 via-gray-50/50 to-transparent 
                    dark:from-gray-900 dark:via-gray-900/50 dark:to-transparent 
                    pointer-events-none">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>

    {{-- About Me Section --}}
    <section id="about" class="min-h-screen overflow-hidden flex items-center py-20 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">

            {{-- Section Title --}}
            <div class="text-center mb-16">
                <span class="text-blue-500 dark:text-blue-400 font-semibold text-sm uppercase tracking-wider">About
                    Me</span>
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 dark:text-white mt-2">Know More About Me</h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                {{-- Bagian Kiri - Content --}}
                <div class="order-1 lg:order-2">
                    <div class="relative">
                        {{-- Main Photo --}}
                        <div class="relative z-10">
                            {{-- light mode --}}
                            <img src="{{ asset('images/about_lightmode.png') }}" alt="About Me Photo"
                                class="w-full max-w-lg object-cover dark:opacity-90 dark:brightness-90 block dark:hidden">
                            {{-- dark mode --}}
                            <img src="{{ asset('images/about_darkmode.png') }}" alt="About Me Photo"
                                class="w-full max-w-lg object-cover dark:opacity-90 dark:brightness-90 hidden dark:block">

                            {{-- Decorative Element --}}
                            <div
                                class="absolute -bottom-6 -right-6 w-32 h-32 bg-blue-500 dark:bg-blue-400 rounded-full -z-10 blur-2xl opacity-50 dark:opacity-40">
                            </div>
                            <div
                                class="absolute -top-6 -left-6 w-32 h-32 bg-purple-500 dark:bg-purple-400 rounded-full -z-10 blur-2xl opacity-50 dark:opacity-40">
                            </div>
                        </div>
                    </div>
                </div>


                {{-- Bagian Kiri - Quote Content --}}
                <div class="order-2 lg:order-1">
                    {{-- Quote Icon --}}
                    <div class="mb-6">
                        <svg class="w-10 h-10 text-black dark:text-gray-400 opacity-50" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                    </div>

                    {{-- Quote Text --}}
                    <blockquote class="relative">
                        <p
                            class="text-2xl lg:text-3xl font-medium text-gray-700 dark:text-gray-200 leading-relaxed mb-6 italic">
                            "Aku"
                        </p>

                        <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed mb-5">
                            Nama saya Irsyad Hanif Munawar, biasa dipanggil Hanif. Saat ini saya sedang menempuh pendidikan
                            di <span
                                class="bg-gray-500 bg-gradient-to-r from-blue-500 to-gray-600 dark:from-blue-400 dark:to-gray-500 text-gray-950 dark:text-white py-1 px-2 text-sm rounded-sm">Universitas
                                Bina Sarana Informatika</span>
                            dengan program studi Teknologi Informasi. Selama masa
                            perkuliahan, saya juga aktif dalam organisasi Himpunan Mahasiswa Teknologi Informasi sebagai
                            anggota PSDM.
                        </p>

                        <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed mb-5">
                            Ketertarikan saya terhadap dunia teknologi dan editing sudah dimulai sejak SMA. Awalnya, saya
                            melihat sebuah konten di TikTok dari seorang content creator bernama 
                            <span class="relative group">
                                <span class="underline cursor-pointer">Pak Sandhika Galih</span>
                                <span
                                    class="absolute left-full top-1/2 -translate-y-1/2 ml-2 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-gray-900 dark:bg-gray-700 text-white text-sm px-3 py-1 rounded-lg whitespace-nowrap shadow-lg z-99">
                                    {{-- dark mode --}}
                                    <img src="{{ asset("images/wpu-dark-mode.png") }}" alt="" class="hidden dark:block">
                                    {{-- light mode --}}
                                    <img src="{{ asset("images/wpu-light-mode.png") }}" alt="" class="block dark:hidden">
                                    Content Creator & Web Developer
                                </span>
                            </span> 
                            yang
                            membahas tentang web development. Dari situ saya berpikir bahwa dunia web development terlihat
                            sangat menarik.
                        </p>

                        <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed mb-5">
                            Sejak saat itu, saya mulai belajar secara bertahap, dimulai dari dasar HTML dan CSS. Hingga saat
                            ini, saya masih terus belajar dan mengembangkan kemampuan di bidang teknologi.
                        </p>

                        <div class="mb-6 flex justify-end">
                            <svg class="w-10 h-10 text-black dark:text-gray-400 opacity-50" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                        </div>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    {{-- Skills/Software Marquee Section --}}
    <section class="py-10 bg-gray-50 dark:bg-gray-800 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Section Title --}}
            <div class="text-center mb-16">
                <span class="text-blue-500 dark:text-blue-400 font-semibold text-sm uppercase tracking-wider">My
                    Skill</span>
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 dark:text-white mt-2">Tools & Software</h2>
                <p class="text-gray-600 dark:text-gray-300 mt-4 text-lg">Software dan tools yang saya pakai</p>
            </div>

            {{-- Marquee Container --}}
            <div class="relative">
                {{-- Gradient Overlays untuk fade effect di kiri-kanan --}}
                <div
                    class="absolute left-0 top-0 bottom-0 w-32 bg-gradient-to-r from-gray-50 dark:from-gray-800 to-transparent z-10 pointer-events-none">
                </div>
                <div
                    class="absolute right-0 top-0 bottom-0 w-32 bg-gradient-to-l from-gray-50 dark:from-gray-800 to-transparent z-10 pointer-events-none">
                </div>

                {{-- Marquee Wrapper --}}
                <div class="marquee-wrapper">
                    <div class="marquee-content flex gap-8">
                        {{-- Set 1 - Original --}}
                        <div class="flex gap-8 items-center">
                            {{-- Capcut --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="{{ asset('images/software/capcut.png') }}" alt="Capcut"
                                        class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">Capcut</p>
                            </div>
                            {{-- Laragon --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="{{ asset('images/software/laragon.png') }}" alt="Laragon"
                                        class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">Laragon</p>
                            </div>
                            {{-- Laravel --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="{{ asset('images/software/laravel.png') }}" alt="Laravel"
                                        class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">Laravel</p>
                            </div>
                            {{-- Excel --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="{{ asset('images/software/excel.png') }}" alt="Excel"
                                        class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">Excel</p>
                            </div>
                            {{-- Kinemaster --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="{{ asset('images/software/kinemaster.png') }}" alt="Kinemaster"
                                        class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">Kinemaster</p>
                            </div>
                            {{-- Pixellab --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="{{ asset('images/software/pixellab.png') }}" alt="Pixellab"
                                        class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">Pixellab</p>
                            </div>
                            {{-- Ppt --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="{{ asset('images/software/ppt.png') }}" alt="PowerPoint"
                                        class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">PPT</p>
                            </div>
                            {{-- Word --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="{{ asset('images/software/word.png') }}" alt="Word"
                                        class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">Word</p>
                            </div>
                            {{-- Bootstrap --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg"
                                        alt="Bootstrap" class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">Bootstrap</p>
                            </div>

                            {{-- Figma --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg"
                                        alt="Figma" class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">Figma</p>
                            </div>

                            {{-- HTML5 --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"
                                        alt="HTML5" class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">HTML5</p>
                            </div>

                            {{-- CSS3 --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg"
                                        alt="CSS3" class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">CSS3</p>
                            </div>

                            {{-- JavaScript --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                                        alt="JavaScript" class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">JavaScript</p>
                            </div>

                            {{-- Tailwind --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg"
                                        alt="Tailwind CSS" class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">Tailwind CSS</p>
                            </div>
                        </div>

                        {{-- Set 2 - Duplicate untuk infinite loop --}}
                        <div class="flex gap-8 items-center">
                            {{-- Capcut --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="{{ asset('images/software/capcut.png') }}" alt="Capcut"
                                        class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">Capcut</p>
                            </div>
                            {{-- Laragon --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="{{ asset('images/software/laragon.png') }}" alt="Laragon"
                                        class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">Laragon</p>
                            </div>
                            {{-- Laravel --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="{{ asset('images/software/laravel.png') }}" alt="Laravel"
                                        class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">Laravel</p>
                            </div>
                            {{-- Excel --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="{{ asset('images/software/excel.png') }}" alt="Excel"
                                        class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">Excel</p>
                            </div>
                            {{-- Kinemaster --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="{{ asset('images/software/kinemaster.png') }}" alt="Kinemaster"
                                        class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">Kinemaster</p>
                            </div>
                            {{-- Pixellab --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="{{ asset('images/software/pixellab.png') }}" alt="Pixellab"
                                        class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">Pixellab</p>
                            </div>
                            {{-- Ppt --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="{{ asset('images/software/ppt.png') }}" alt="PowerPoint"
                                        class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">PPT</p>
                            </div>
                            {{-- Word --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="{{ asset('images/software/word.png') }}" alt="Word"
                                        class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">Word</p>
                            </div>
                            {{-- Bootstrap --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg"
                                        alt="Bootstrap" class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">Bootstrap</p>
                            </div>

                            {{-- Figma --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg"
                                        alt="Figma" class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">Figma</p>
                            </div>

                            {{-- HTML5 --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"
                                        alt="HTML5" class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">HTML5</p>
                            </div>

                            {{-- CSS3 --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg"
                                        alt="CSS3" class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">CSS3</p>
                            </div>

                            {{-- JavaScript --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                                        alt="JavaScript" class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">JavaScript</p>
                            </div>

                            {{-- Tailwind --}}
                            <div class="flex-shrink-0 w-40 text-center">
                                <div
                                    class="bg-white dark:bg-gray-700 rounded-2xl p-6 shadow-lg dark:shadow-gray-900/50 hover:shadow-xl dark:hover:shadow-gray-900/70 transition-shadow duration-300 mb-4">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg"
                                        alt="Tailwind CSS" class="w-16 h-16 mx-auto dark:brightness-90">
                                </div>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">Tailwind CSS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CSS untuk Marquee Animation --}}
    <style>
        .marquee-wrapper {
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        .marquee-content {
            display: flex;
            animation: marquee 30s linear infinite;
            width: fit-content;
        }

        .marquee-content:hover {
            animation-play-state: paused;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .marquee-content {
                animation-duration: 20s;
            }
        }
    </style>

    {{-- Portfolio Section --}}
    <section id="portfolio" class="py-20 bg-white dark:bg-gray-900" x-data="portfolioModal()">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Section Title --}}
            <div class="text-center mb-16">
                <span
                    class="text-blue-500 dark:text-blue-400 font-semibold text-sm uppercase tracking-wider">Portfolio</span>
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 dark:text-white mt-2">My Recent Works</h2>
                <p class="text-gray-600 dark:text-gray-300 mt-4 text-lg">Project & Tugas yang pernah saya kerjakan</p>
            </div>

            {{-- Filter Tabs --}}
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button @click="activeTab = 'all'"
                    :class="activeTab === 'all' ? 'bg-blue-500 dark:bg-blue-600 text-white' :
                        'bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-600'"
                    class="px-6 py-2 rounded-full font-semibold transition-all duration-300">
                    All Projects
                </button>
                <button @click="activeTab = 'apk-web'"
                    :class="activeTab === 'apk-web' ? 'bg-blue-500 dark:bg-blue-600 text-white' :
                        'bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-600'"
                    class="px-6 py-2 rounded-full font-semibold transition-all duration-300">
                    Aplikasi Website
                </button>
                <button @click="activeTab = 'ui-ux'"
                    :class="activeTab === 'ui-ux' ? 'bg-blue-500 dark:bg-blue-600 text-white' :
                        'bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-600'"
                    class="px-6 py-2 rounded-full font-semibold transition-all duration-300">
                    UI-UX Design
                </button>
            </div>

            {{-- Portfolio Grid dengan x-for --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <template x-for="(project, index) in filteredProjects" :key="index">
                    <div class="group cursor-pointer" @click="openModal(projects.indexOf(project))"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100">
                        <div class="relative overflow-hidden rounded-2xl shadow-lg dark:shadow-gray-900/50">
                            <img :src="project.image" :alt="project.title"
                                class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                                <div class="p-6 text-white">
                                    <span class="text-sm font-semibold"
                                        :class="{
                                            'text-blue-400': project.categorySlug === 'apk-web',
                                            'text-purple-400': project.categorySlug === 'ui-ux',
                                            'text-green-400': project.categorySlug === 'py'
                                        }"
                                        x-text="project.category"></span>
                                    <h3 class="text-xl font-bold mt-2" x-text="project.title"></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

        </div>

        {{-- Modal Popup --}}
        <div x-show="isOpen" x-cloak @click.self="closeModal()"
            class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/80 backdrop-blur-sm"
            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

            <div class="relative bg-white dark:bg-gray-800 rounded-3xl max-w-4xl w-full max-h-[90vh] overflow-y-auto shadow-2xl dark:shadow-gray-900/70"
                @click.stop x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">

                {{-- Close Button --}}
                <button @click="closeModal()"
                    class="absolute top-4 right-4 z-10 w-10 h-10 bg-white dark:bg-gray-700 rounded-full shadow-lg flex items-center justify-center hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors">
                    <svg class="w-6 h-6 text-gray-600 dark:text-gray-300" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                {{-- Modal Content --}}
                <div class="p-8">
                    {{-- Project Image --}}
                    <img :src="currentProject.image" :alt="currentProject.title"
                        class="w-full h-96 object-cover rounded-2xl mb-6">

                    {{-- Project Info --}}
                    <div class="mb-6">
                        <span
                            class="inline-block px-4 py-1 bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400 rounded-full text-sm font-semibold mb-4"
                            x-text="currentProject.category"></span>
                        <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-4" x-text="currentProject.title">
                        </h2>
                        <p class="text-gray-600 dark:text-gray-300 text-lg leading-relaxed"
                            x-text="currentProject.description"></p>
                    </div>

                    {{-- Project Details --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mb-1">Tanggal</p>
                            <p class="font-semibold text-gray-800 dark:text-gray-200" x-text="currentProject.date"></p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mb-1">Teknologi</p>
                            <p class="font-semibold text-gray-800 dark:text-gray-200" x-text="currentProject.tech"></p>
                        </div>
                    </div>

                    {{-- CTA Button --}}
                    <a :href="currentProject.link"
                        class="inline-block bg-blue-500 dark:bg-blue-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-blue-600 dark:hover:bg-blue-700 transition-all duration-300 hover:shadow-lg">
                        View Project
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Alpine.js Component --}}
    <script>
        function portfolioModal() {
            return {
                activeTab: 'all',
                isOpen: false,
                currentIndex: 0,
                projects: [{
                        image: '{{ asset('images/projek/12mipa5.png') }}',
                        category: 'Aplikasi Website',
                        categorySlug: 'apk-web',
                        title: '12 MIPA 5 Area',
                        description: 'Website kenangan 12 Mipa 5 semasa SMA',
                        date: '18 April 2023',
                        tech: 'HTML, CSS, Bootstrap, Javascript',
                        link: '#'
                    },
                    {
                        image: '{{ asset('images/projek/bola-ubi.png') }}',
                        category: 'Aplikasi Website',
                        categorySlug: 'apk-web',
                        title: 'Waroeng Ojan',
                        description: 'Website penjualan Waroeng Ojan',
                        date: '15 Desember 2023',
                        tech: 'HTML, CSS, Bootstrap, JavaScript',
                        link: '#'
                    },
                    {
                        image: '{{ asset('images/projek/pkm-al-layyinah.png') }}',
                        category: 'Aplikasi Website',
                        categorySlug: 'apk-web',
                        title: 'Blog PKM Al-Layyinah',
                        description: 'Pelaksanaan PKM di SMAI Al-Layyinah',
                        date: ' 13 November 2025',
                        tech: 'HTML, CSS, Bootstrap, JavaScript',
                        link: '#'
                    },
                    {
                        image: '{{ asset('images/projek/gloaryBot.png') }}',
                        category: 'Aplikasi Website',
                        categorySlug: 'apk-web',
                        title: 'Botchat',
                        description: 'Gloary bot ini adalah bot chat yang dibuat menggunakan API Gemini.',
                        date: '4 November 2025',
                        tech: 'Laravel, CSS, JavaScript, Mysql, API Gemini',
                        link: '#'
                    },
                    {
                        image: '{{ asset('images/projek/ui-ux-gloaryapp.png') }}',
                        category: 'UI-UX Design',
                        categorySlug: 'ui-ux',
                        title: 'Design Gloary App',
                        description: 'UI-UX design untuk aplikasi Gloary, yang dibuat untuk membantu orang dalam melakukan top up',
                        date: '24 Maret 2025',
                        tech: 'Figma',
                        link: 'https://www.figma.com/community/file/1516284948125872026'
                    },
                    {
                        image: '{{ asset('images/projek/sapaApp.png') }}',
                        category: 'UI-UX Design',
                        categorySlug: 'ui-ux',
                        title: 'Design SAPA App',
                        description: 'SAPA yang artinya saran dan pengaduan. design aplikasi untuk menampung saran dan pengaduan dari masyarakat',
                        date: '15 Mei 2025',
                        tech: 'Figma',
                        link: 'https://www.figma.com/community/file/1598248562654277003'
                    }
                ],
                get filteredProjects() {
                    if (this.activeTab === 'all') {
                        return this.projects;
                    }
                    return this.projects.filter(project => project.categorySlug === this.activeTab);
                },
                get currentProject() {
                    return this.projects[this.currentIndex];
                },
                openModal(index) {
                    this.currentIndex = index;
                    this.isOpen = true;
                    document.body.style.overflow = 'hidden';
                },
                closeModal() {
                    this.isOpen = false;
                    document.body.style.overflow = 'auto';
                }
            }
        }
    </script>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>


@endsection

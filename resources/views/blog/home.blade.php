@extends('blog.layouts.app')

@section('title', 'monXinfo')

@section('content')

<style>
    body { font-family: 'DM Sans', sans-serif; }
    h1,h2,h3,h4 { font-family: 'Sora', sans-serif; }
    .card-hover { transition: transform 0.2s ease, box-shadow 0.2s ease; }
    .card-hover:hover { transform: translateY(-3px); box-shadow: 0 8px 32px rgba(16,185,129,0.10); }
    .tag-pill { font-family: 'Sora', sans-serif; font-size: 0.65rem; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase; }
    .section-title::after { content:''; display:block; width:2rem; height:2px; background:#10b981; margin-top:6px; }
    .scrollbar-hide::-webkit-scrollbar { display:none; }
    .scrollbar-hide { -ms-overflow-style:none; scrollbar-width:none; }
    .featured-overlay { background: linear-gradient(to top, rgba(9,9,11,0.95) 30%, rgba(9,9,11,0.2) 100%); }
</style>

<div class="bg-zinc-50 dark:bg-zinc-950 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">

            {{-- == LEFT SIDE == --}}
            <div class="lg:col-span-3 space-y-10">
                {{-- ---- TERKINI ---- --}}
                <section>
                    <h2 class="section-title text-emerald-500 dark:text-white text-xl font-bold mb-6">Terkini</h2>

                    {{-- Featured Card --}}
                    <a href="#">
                        <div class="card-hover relative rounded-2xl overflow-hidden mb-5 cursor-pointer group">
                            <img src="https://picsum.photos/seed/tech1/800/420" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="featured-overlay absolute inset-0 flex flex-col justify-end p-5">
                                <span class="tag-pill bg-emerald-500 text-zinc-950 px-2.5 py-1 rounded-full w-fit mb-2">Teknologi</span>
                                <h3 class="text-white text-xl font-bold leading-snug">Revolusi AI di Dunia Programming: Apa yang Perlu Kamu Tahu?</h3>
                                <p class="text-zinc-400 text-sm mt-1">3 menit lalu &nbsp;·&nbsp; 5 min read</p>
                            </div>
                        </div>
                    </a>

                    {{-- Sub Cards --}}
                    <div class="grid grid-cols-2 gap-4">
                        @foreach([
                            ['seed'=>'tech2','tag'=>'Laravel','title'=>'Laravel 11 Hadir dengan Fitur Baru yang Menakjubkan'],
                            ['seed'=>'tech3','tag'=>'JavaScript','title'=>'TypeScript 5.5 Rilis: Apa Saja Perubahannya?'],
                        ] as $item)
                        <div class="card-hover bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden cursor-pointer group">
                            <img src="https://picsum.photos/seed/{{ $item['seed'] }}/600/300" class="w-full h-36 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="p-4">
                                <span class="tag-pill bg-zinc-100 dark:bg-zinc-800 text-emerald-600 dark:text-emerald-400 px-2 py-0.5 rounded-full">{{ $item['tag'] }}</span>
                                <h3 class="text-zinc-900 dark:text-white font-semibold text-sm mt-2 leading-snug">{{ $item['title'] }}</h3>
                                <p class="text-zinc-500 text-xs mt-1.5">1 jam lalu</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>

                {{-- ---- HOT TOPIK ---- --}}
                <section>
                    <h2 class="section-title text-emerald-500 dark:text-white text-xl font-bold mb-6">Hot Topik</h2>
                    <div class="grid grid-cols-3 gap-4">
                        @foreach([
                            ['seed'=>'hot1','tag'=>'Framework','title'=>'Next.js vs Nuxt.js 2025','color'=>'emerald'],
                            ['seed'=>'hot2','tag'=>'CSS','title'=>'Tailwind v4 Semua yang Baru','color'=>'zinc'],
                            ['seed'=>'hot3','tag'=>'AI','title'=>'Claude API untuk Developer','color'=>'zinc'],
                        ] as $item)
                        <div class="card-hover bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden cursor-pointer group">
                            <img src="https://picsum.photos/seed/{{ $item['seed'] }}/400/220" class="w-full h-28 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="p-3">
                                <span class="tag-pill {{ $item['color'] === 'emerald' ? 'bg-emerald-500 text-zinc-950' : 'bg-zinc-100 dark:bg-zinc-800 text-zinc-500 dark:text-zinc-400' }} px-2 py-0.5 rounded-full">{{ $item['tag'] }}</span>
                                <h3 class="text-zinc-900 dark:text-white font-semibold text-xs mt-2 leading-snug">{{ $item['title'] }}</h3>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>

                {{-- ---- BANNER ---- --}}
                <section>
                    <div class="rounded-2xl overflow-hidden relative h-32 bg-gradient-to-r from-zinc-100 via-emerald-50 to-zinc-100 dark:from-zinc-900 dark:via-emerald-950 dark:to-zinc-900 border border-emerald-200 dark:border-emerald-900/40 flex items-center justify-center">
                        <p class="text-emerald-400 font-semibold text-sm tracking-widest uppercase">· Iklan / Banner Promosi ·</p>
                    </div>
                </section>

                {{-- ---- BERITA LAINNYA ---- --}}
                <section>
                    <h2 class="section-title text-emerald-500 dark:text-white text-xl font-bold mb-6">Berita Lainnya</h2>
                    <div class="space-y-4">
                        @foreach([
                            ['seed'=>'news1','tag'=>'HTML','title'=>'Semantic HTML yang Sering Diabaikan Developer Pemula','desc'=>'Menulis HTML yang baik bukan sekadar tag, tapi tentang struktur dan aksesibilitas.'],
                            ['seed'=>'news2','tag'=>'Programming','title'=>'Clean Code: Kebiasaan yang Harus Dimiliki Setiap Developer','desc'=>'Kode yang bersih bukan hanya soal estetika, tapi soal maintainability jangka panjang.'],
                            ['seed'=>'news3','tag'=>'Laravel','title'=>'Cara Kerja Eloquent ORM di Balik Layar','desc'=>'Memahami Query Builder dan bagaimana Laravel mengoptimasi query database kamu.'],
                        ] as $item)
                        <div class="card-hover flex gap-4 bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 rounded-xl p-3 cursor-pointer group">
                            <img src="https://picsum.photos/seed/{{ $item['seed'] }}/200/200" class="w-24 h-24 object-cover rounded-lg flex-shrink-0 group-hover:scale-105 transition-transform duration-500">
                            <div class="flex flex-col justify-center">
                                <span class="tag-pill bg-zinc-100 dark:bg-zinc-800 text-emerald-600 dark:text-emerald-400 px-2 py-0.5 rounded-full w-fit mb-1.5">{{ $item['tag'] }}</span>
                                <h3 class="text-zinc-900 dark:text-white font-semibold text-sm leading-snug">{{ $item['title'] }}</h3>
                                <p class="text-zinc-500 dark:text-zinc-500 text-xs mt-1 line-clamp-2">{{ $item['desc'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>

            </div>

            {{-- = RIGHT SIDE == --}}
            <div class="lg:col-span-2 space-y-8">
                {{-- ---- IKUTI KAMI ---- --}}
                <section class="bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 rounded-xl p-5">
                    <h2 class="text-emerald-500 dark:text-white font-bold text-base mb-4">Ikuti Kami</h2>
                    <div class="flex flex-col gap-2">
                        {{-- Instagram --}}
                        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg border border-zinc-200 dark:border-zinc-800 hover:border-pink-400/60 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-all duration-200 group">
                            <svg class="w-5 h-5 text-pink-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <p class="text-zinc-900 dark:text-white text-sm font-semibold leading-none">@monxinfo</p>
                            </div>
                        </a>

                        {{-- Twitter / X --}}
                        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg border border-zinc-200 dark:border-zinc-800 hover:border-sky-400/60 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-all duration-200 group">
                            <svg class="w-5 h-5 text-sky-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z"/>
                            </svg>
                            <div>
                                <p class="text-zinc-900 dark:text-white text-sm font-semibold leading-none">@monxinfo</p>
                            </div>
                        </a>

                        {{-- YouTube --}}
                        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg border border-zinc-200 dark:border-zinc-800 hover:border-red-400/60 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-all duration-200 group">
                            <svg class="w-5 h-5 text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M21.7 8.037a4.26 4.26 0 0 0-2.962-3.012 49.8 49.8 0 0 0-9.476-.542 49.8 49.8 0 0 0-9.477.542A4.26 4.26 0 0 0 .3 8.037 44.58 44.58 0 0 0 0 12c0 1.337.04 2.75.3 3.963a4.26 4.26 0 0 0 2.962 3.013 49.8 49.8 0 0 0 9.476.541 49.8 49.8 0 0 0 9.477-.541 4.26 4.26 0 0 0 2.962-3.013A44.58 44.58 0 0 0 24 12a44.58 44.58 0 0 0-.3-3.963Zm-13.01 7.097V8.866l6.33 3.134-6.33 3.134Z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <p class="text-zinc-900 dark:text-white text-sm font-semibold leading-none">monXinfo Channel</p>
                            </div>
                        </a>
                    </div>
                </section>

                {{-- ---- BERITA LOKAL ---- --}}
                <section>
                    <h2 class="section-title text-emerald-500 dark:text-white font-bold text-base mb-4">Berita Lokal</h2>
                    <div class="space-y-3">
                        @foreach([
                            ['seed'=>'loc1','title'=>'Startup Tech Lokal Raih Pendanaan Seri A','time'=>'2 jam lalu'],
                            ['seed'=>'loc2','title'=>'Komunitas Developer Indonesia Bertumbuh Pesat','time'=>'5 jam lalu'],
                            ['seed'=>'loc3','title'=>'Bootcamp Coding Gratis Dibuka di 10 Kota','time'=>'8 jam lalu'],
                        ] as $item)
                        <div class="card-hover flex gap-3 cursor-pointer group">
                            <img src="https://picsum.photos/seed/{{ $item['seed'] }}/100/100" class="w-16 h-16 object-cover rounded-lg flex-shrink-0">
                            <div>
                                <h3 class="text-zinc-700 dark:text-zinc-200 text-sm font-medium leading-snug group-hover:text-emerald-500 dark:group-hover:text-emerald-400 transition-colors">{{ $item['title'] }}</h3>
                                <p class="text-zinc-400 dark:text-zinc-600 text-xs mt-1">{{ $item['time'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
                
                {{-- ---- INTERNASIONAL ---- --}}
                <section>
                    <h2 class="section-title text-emerald-500 dark:text-white font-bold text-base mb-4">Internasional</h2>
                    <div class="space-y-3">
                        @foreach([
                            ['seed'=>'int1','title'=>'OpenAI Announces GPT-5 with Reasoning Upgrades','time'=>'1 jam lalu'],
                            ['seed'=>'int2','title'=>'Google I/O 2025: All the Announcements','time'=>'3 jam lalu'],
                            ] as $item)
                        <div class="card-hover flex gap-3 cursor-pointer group">
                            <img src="https://picsum.photos/seed/{{ $item['seed'] }}/100/100" class="w-16 h-16 object-cover rounded-lg flex-shrink-0">
                            <div>
                                <h3 class="text-zinc-700 dark:text-zinc-200 text-sm font-medium leading-snug group-hover:text-emerald-500 dark:group-hover:text-emerald-400 transition-colors">{{ $item['title'] }}</h3>
                                <p class="text-zinc-400 dark:text-zinc-600 text-xs mt-1">{{ $item['time'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>

                {{-- ---- BERITA DAERAH ---- --}}
                <section>
                    <h2 class="section-title text-emerald-500 dark:text-white font-bold text-base mb-4">Berita Daerah</h2>
                    <div class="space-y-3">
                        @foreach([
                            ['seed'=>'loc1','title'=>'Startup Tech Lokal Raih Pendanaan Seri A','time'=>'2 jam lalu'],
                            ['seed'=>'loc2','title'=>'Komunitas Developer Indonesia Bertumbuh Pesat','time'=>'5 jam lalu'],
                            ['seed'=>'loc3','title'=>'Bootcamp Coding Gratis Dibuka di 10 Kota','time'=>'8 jam lalu'],
                        ] as $item)
                        <div class="card-hover flex gap-3 cursor-pointer group">
                            <img src="https://picsum.photos/seed/{{ $item['seed'] }}/100/100" class="w-16 h-16 object-cover rounded-lg flex-shrink-0">
                            <div>
                                <h3 class="text-zinc-700 dark:text-zinc-200 text-sm font-medium leading-snug group-hover:text-emerald-500 dark:group-hover:text-emerald-400 transition-colors">{{ $item['title'] }}</h3>
                                <p class="text-zinc-400 dark:text-zinc-600 text-xs mt-1">{{ $item['time'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>

                {{-- ---- TIPS & TRICK ---- --}}
                <section>
                    <h2 class="section-title text-emerald-500 dark:text-white font-bold text-base mb-4">💡 Tips &amp; Trick</h2>
                    <div class="grid grid-cols-2 gap-3">
                        @foreach([
                            [
                                'seed'  => 'tip1',
                                'tag'   => 'Laravel',
                                'title' => 'Optimalkan Query Eloquent dengan Eager Loading',
                                'desc'  => 'Hindari N+1 problem dengan teknik with() yang tepat.',
                            ],
                            [
                                'seed'  => 'tip2',
                                'tag'   => 'CSS',
                                'title' => 'Flexbox vs Grid: Kapan Harus Pakai Keduanya?',
                                'desc'  => 'Panduan praktis memilih layout yang sesuai kebutuhan.',
                            ],
                            [
                                'seed'  => 'tip3',
                                'tag'   => 'JavaScript',
                                'title' => 'Async/Await vs Promise: Mana yang Lebih Baik?',
                                'desc'  => 'Memahami kapan menggunakan masing-masing pendekatan.',
                            ],
                            [
                                'seed'  => 'tip4',
                                'tag'   => 'Git',
                                'title' => '10 Git Command yang Wajib Dikuasai Developer',
                                'desc'  => 'Dari rebase sampai cherry-pick, semua ada di sini.',
                            ],
                        ] as $tip)
                        <div class="card-hover bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden cursor-pointer group">
                            <img src="https://picsum.photos/seed/{{ $tip['seed'] }}/400/200"
                                class="w-full h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="p-3">
                                <span class="tag-pill bg-zinc-100 dark:bg-zinc-800 text-emerald-600 dark:text-emerald-400 px-2 py-0.5 rounded-full">{{ $tip['tag'] }}</span>
                                <h3 class="text-zinc-900 dark:text-white font-semibold text-xs mt-2 leading-snug">{{ $tip['title'] }}</h3>
                                <p class="text-zinc-500 text-xs mt-1 line-clamp-2">{{ $tip['desc'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>

                {{-- ---- VISITOR ---- --}}
                <section class="bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 rounded-xl p-5 text-center">
                    <h2 class="text-emerald-500 dark:text-white font-bold text-base mb-4">Pengunjung Hari Ini</h2>
                    <p class="text-5xl font-black text-emerald-500 dark:text-emerald-400" style="font-family:'Sora',sans-serif;">1,245</p>
                    <p class="text-zinc-400 dark:text-zinc-500 text-xs mt-1 uppercase tracking-widest">Total Visitor</p>
                    <div class="mt-4 h-1.5 bg-zinc-200 dark:bg-zinc-800 rounded-full overflow-hidden">
                        <div class="h-full w-3/4 bg-gradient-to-r from-emerald-600 to-emerald-400 rounded-full"></div>
                    </div>
                    <p class="text-zinc-400 dark:text-zinc-600 text-xs mt-2">75% dari target harian</p>
                </section>

            </div>

        </div>
    </div>
</div>
@endsection
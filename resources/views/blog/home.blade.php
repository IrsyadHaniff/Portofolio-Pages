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
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

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
            <x-right-info/>

        </div>
    </div>
</div>
@endsection
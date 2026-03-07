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

            {{-- lEFT SIDE --}}
            <div class="lg:col-span-3 space-y-10">

                {{-- ---- TERKINI ---- --}}
                <section>
                    <h2 class="section-title text-emerald-500 dark:text-white text-xl font-bold mb-6">🔥 Terkini</h2>

                    {{-- Featured Card --}}
                    @if($featured)
                    <a href="{{ route('post.show', $featured->slug) }}"
                       class="card-hover relative rounded-2xl overflow-hidden mb-5 cursor-pointer group block">
                        <img src="{{ $featured->thumbnail ?? 'https://picsum.photos/seed/default/800/420' }}"
                             alt="{{ $featured->title }}"
                             class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="featured-overlay absolute inset-0 flex flex-col justify-end p-5">
                            <span class="tag-pill bg-emerald-500 text-zinc-950 px-2.5 py-1 rounded-full w-fit mb-2">
                                {{ $featured->tag }}
                            </span>
                            <h3 class="text-white text-xl font-bold leading-snug">{{ $featured->title }}</h3>
                            <p class="text-zinc-400 text-sm mt-1">
                                {{ $featured->created_at->diffForHumans() }}
                                &nbsp;·&nbsp;
                                {{ $featured->read_time }} min read
                            </p>
                        </div>
                    </a>
                    @endif

                    {{-- Sub Cards --}}
                    <div class="grid grid-cols-2 gap-4">
                        @foreach($subCards as $item)
                        <a href="{{ route('post.show', $item->slug) }}"
                           class="card-hover bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden cursor-pointer group block">
                            <img src="{{ $item->thumbnail ?? 'https://picsum.photos/seed/' . $item->id . '/600/300' }}"
                                 alt="{{ $item->title }}"
                                 class="w-full h-36 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="p-4">
                                <span class="tag-pill bg-zinc-100 dark:bg-zinc-800 text-emerald-600 dark:text-emerald-400 px-2 py-0.5 rounded-full">
                                    {{ $item->tag }}
                                </span>
                                <h3 class="text-zinc-900 dark:text-white font-semibold text-sm mt-2 leading-snug">{{ $item->title }}</h3>
                                <p class="text-zinc-500 text-xs mt-1.5">{{ $item->created_at->diffForHumans() }}</p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </section>

                {{-- ---- HOT TOPIK ---- --}}
                @if($hotTopik->count())
                <section>
                    <h2 class="section-title text-emerald-500 dark:text-white text-xl font-bold mb-6">🚀 Hot Topik</h2>
                    <div class="grid grid-cols-3 gap-4">
                        @foreach($hotTopik as $index => $item)
                        <a href="{{ route('post.show', $item->slug) }}"
                           class="card-hover bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden cursor-pointer group block">
                            <img src="{{ $item->thumbnail ?? 'https://picsum.photos/seed/' . $item->id . '/400/220' }}"
                                 alt="{{ $item->title }}"
                                 class="w-full h-28 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="p-3">
                                <span class="tag-pill {{ $index === 0 ? 'bg-emerald-500 text-zinc-950' : 'bg-zinc-100 dark:bg-zinc-800 text-zinc-500 dark:text-zinc-400' }} px-2 py-0.5 rounded-full">
                                    {{ $item->tag }}
                                </span>
                                <h3 class="text-zinc-900 dark:text-white font-semibold text-xs mt-2 leading-snug">{{ $item->title }}</h3>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </section>
                @endif

                {{-- ---- BANNER ---- --}}
                <section>
                    <div class="rounded-2xl overflow-hidden relative h-32 bg-gradient-to-r from-zinc-100 via-emerald-50 to-zinc-100 dark:from-zinc-900 dark:via-emerald-950 dark:to-zinc-900 border border-emerald-200 dark:border-emerald-900/40 flex items-center justify-center">
                        <p class="text-emerald-500 dark:text-emerald-400 font-semibold text-sm tracking-widest uppercase">· Iklan / Banner Promosi ·</p>
                    </div>
                </section>

                {{-- ---- BERITA LAINNYA ---- --}}
                @if($beritaLainnya->count())
                <section>
                    <h2 class="section-title text-emerald-500 dark:text-white text-xl font-bold mb-6">📰 Berita Lainnya</h2>
                    <div class="space-y-4">
                        @foreach($beritaLainnya as $item)
                        <a href="{{ route('post.show', $item->slug) }}"
                           class="card-hover flex gap-4 bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 rounded-xl p-3 cursor-pointer group block">
                            <img src="{{ $item->thumbnail ?? 'https://picsum.photos/seed/' . $item->id . '/200/200' }}"
                                 alt="{{ $item->title }}"
                                 class="w-24 h-24 object-cover rounded-lg flex-shrink-0 group-hover:scale-105 transition-transform duration-500">
                            <div class="flex flex-col justify-center">
                                <span class="tag-pill bg-zinc-100 dark:bg-zinc-800 text-emerald-600 dark:text-emerald-400 px-2 py-0.5 rounded-full w-fit mb-1.5">
                                    {{ $item->tag }}
                                </span>
                                <h3 class="text-zinc-900 dark:text-white font-semibold text-sm leading-snug">{{ $item->title }}</h3>
                                <p class="text-zinc-500 text-xs mt-1 line-clamp-2">{{ $item->excerpt ?? Str::limit(strip_tags($item->content), 100) }}</p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </section>
                @endif

            </div>

            {{-- RIGHT SIDE --}}
            <x-right-info/>

        </div>
    </div>
</div>

@endsection
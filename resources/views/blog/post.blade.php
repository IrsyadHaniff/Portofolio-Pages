@extends('blog.layouts.app')

@section('title', $post->title . ' — monXinfo')

@section('content')

<div class="bg-zinc-50 dark:bg-zinc-950 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

            {{-- == LEFT: ARTIKEL == --}}
            <div class="lg:col-span-3 space-y-6">

                {{-- Tag + Meta --}}
                <div class="flex items-center gap-2 flex-wrap">
                    <span class="tag-pill bg-emerald-500 text-zinc-950 px-2.5 py-1 rounded-full text-xs font-bold uppercase tracking-wide">
                        {{ $post->tag }}
                    </span>
                    <span class="text-zinc-400 dark:text-zinc-500 text-xs">
                        {{ $post->created_at->diffForHumans() }}
                        &nbsp;·&nbsp;
                        {{ $post->read_time }} min read
                        &nbsp;·&nbsp;
                        {{ $post->author }}
                    </span>
                </div>

                {{-- Judul Utama --}}
                <h1 class="text-2xl sm:text-3xl font-black text-zinc-900 dark:text-white leading-tight"
                    style="font-family:'Sora',sans-serif;">
                    {{ $post->title }}
                </h1>

                {{-- Thumbnail --}}
                @if($post->thumbnail)
                <img src="{{ $post->thumbnail }}"
                    alt="{{ $post->title }}"
                    class="w-full h-72 object-cover rounded-2xl shadow-md">
                @endif

                <div class="prose prose-zinc dark:prose-invert max-w-none
                            prose-headings:font-bold prose-headings:text-zinc-900 dark:prose-headings:text-white
                            prose-h2:text-xl prose-h2:mt-8 prose-h2:mb-3
                            prose-h3:text-lg prose-h3:mt-6 prose-h3:mb-2
                            prose-p:text-zinc-600 dark:prose-p:text-zinc-400 prose-p:leading-relaxed
                            prose-li:text-zinc-600 dark:prose-li:text-zinc-400
                            prose-strong:text-zinc-900 dark:prose-strong:text-white
                            prose-blockquote:border-emerald-500 prose-blockquote:bg-zinc-100 dark:prose-blockquote:bg-zinc-800/50
                            prose-blockquote:rounded-r-xl prose-blockquote:px-4 prose-blockquote:py-2
                            prose-blockquote:text-zinc-600 dark:prose-blockquote:text-zinc-400 prose-blockquote:not-italic
                            prose-a:text-emerald-600 dark:prose-a:text-emerald-400 prose-a:no-underline hover:prose-a:underline
                            prose-code:bg-zinc-100 dark:prose-code:bg-zinc-800 prose-code:text-emerald-600 dark:prose-code:text-emerald-400
                            prose-code:px-1.5 prose-code:py-0.5 prose-code:rounded prose-code:text-sm prose-code:before:content-none prose-code:after:content-none">

                    {!! $post->content !!}

                </div>

            </div>

            {{-- == RIGHT: SIDEBAR == --}}
            <x-right-info/>

        </div>
    </div>
</div>

@endsection
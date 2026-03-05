@extends('blog.layouts.app')

@section('title', 'monXinfo')

@section('content')

<div class="bg-zinc-50 dark:bg-zinc-950 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

            {{-- == LEFT SIDE == --}}
            <div class="lg:col-span-3 space-y-10">
                <h3 class="text-white text-xl font-bold leading-snug">Revolusi AI di Dunia Programming: Apa yang Perlu Kamu Tahu?</h3>
            </div>

            {{-- = RIGHT SIDE == --}}
            <x-right-info/>

        </div>
    </div>
</div>

@endsection
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset("images/dark-mode-preview.png") }}" alt="Irsyad Hanif Icon" type="image/x-icon">
    <title>@yield('title', 'Cv Portfolio')</title>

    <style>
        /* * {outline: 1px solid red} debugging */
        html {
            scroll-behavior: smooth;
        }
    </style>
    {{-- Tailwind CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="select-none overflow-x-hidden">
    {{-- Navbar Component --}}
    <x-navbar />

    {{-- Konten dari halaman lain dimasukkan di sini --}}
    @yield('content')

    {{-- Footer (optional) --}}
    {{-- @include('components.footer') --}}

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{--     
    disable klick kanan
    <script>
        document.addEventListener('contextmenu', e => e.preventDefault());
    </script> --}}

</body>

</html>

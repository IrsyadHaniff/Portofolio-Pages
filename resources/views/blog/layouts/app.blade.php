<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>@yield('title', 'monXinfo')</title>
</head>

<body class="select-none overflow-x-hidden">
    {{-- Navbar Component --}}
    <x-navbar-blog />

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

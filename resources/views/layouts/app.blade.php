<!DOCTYPE html>
<html lang="tr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#FFD23F">
    <meta name="description" content="@yield('description', 'ifsasepeti.com - Türkiye\'nin en kapsamlı yetişkin site dizini. Premium, tube, AI, canlı kamera, OnlyFans ve daha fazlasını keşfet.')">
    <title>@yield('title', 'ifsasepeti.com - En İyi Yetişkin Site Dizini')</title>

    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/logo.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="min-h-screen flex flex-col">

    @include('partials.header')

    <main class="flex-1">
        @hasSection('content')
            @yield('content')
        @else
            {{ $slot ?? '' }}
        @endif
    </main>

    @include('partials.footer')

    @livewireScripts
</body>
</html>

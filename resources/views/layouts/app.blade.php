<!DOCTYPE html>
<html lang="tr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#FFD23F">
    <meta name="rating" content="adult">
    <meta name="robots" content="@yield('robots', 'index, follow, max-image-preview:large, max-snippet:-1')">
    <meta name="format-detection" content="telephone=no">
    @php
        // yieldContent returns already-HTML-escaped content; decode once for re-escaping in attribute context
        $pageTitle = trim(html_entity_decode($__env->yieldContent('title'), ENT_QUOTES | ENT_HTML5)) ?: "ifsasepeti.com - En İyi Yetişkin Site Dizini Türkiye";
        $pageDesc  = trim(html_entity_decode($__env->yieldContent('description'), ENT_QUOTES | ENT_HTML5)) ?: "ifsasepeti.com Türkiye'nin en kapsamlı yetişkin site dizini. Premium pornolar, ücretsiz tube'lar, canlı kameralar, AI üreticiler, OnlyFans ve daha fazlası kalite sırasına göre listelendi.";
        $pageCanonical = trim(html_entity_decode($__env->yieldContent('canonical'), ENT_QUOTES | ENT_HTML5)) ?: url()->current();
        $pageOgImage   = trim(html_entity_decode($__env->yieldContent('og_image'), ENT_QUOTES | ENT_HTML5)) ?: asset('img/logo.png');
        $pageOgType    = trim(html_entity_decode($__env->yieldContent('og_type'), ENT_QUOTES | ENT_HTML5)) ?: 'website';
    @endphp
    <title>{{ $pageTitle }}</title>
    <meta name="description" content="{{ $pageDesc }}">
    <link rel="canonical" href="{{ $pageCanonical }}">

    {{-- Open Graph --}}
    <meta property="og:site_name" content="ifsasepeti.com">
    <meta property="og:locale" content="tr_TR">
    <meta property="og:type" content="{{ $pageOgType }}">
    <meta property="og:title" content="{{ $pageTitle }}">
    <meta property="og:description" content="{{ $pageDesc }}">
    <meta property="og:url" content="{{ $pageCanonical }}">
    <meta property="og:image" content="{{ $pageOgImage }}">
    <meta property="og:image:alt" content="ifsasepeti.com">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $pageTitle }}">
    <meta name="twitter:description" content="{{ $pageDesc }}">
    <meta name="twitter:image" content="{{ $pageOgImage }}">

    {{-- Favicon set --}}
    <link rel="icon" type="image/png" href="{{ asset('img/logo-mark.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/logo-mark.png') }}">
    <link rel="mask-icon" href="{{ asset('img/logo-mark.png') }}" color="#F58220">

    {{-- Hreflang (only Turkish for now) --}}
    <link rel="alternate" hreflang="tr" href="{{ $pageCanonical }}">
    <link rel="alternate" hreflang="x-default" href="{{ $pageCanonical }}">

    {{-- Preconnect to third parties for perf --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://image.thum.io">
    <link rel="dns-prefetch" href="https://files.ifsasepeti.com">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    {{-- Page-specific JSON-LD structured data --}}
    @yield('json_ld')

    {{-- Site-wide Organization + WebSite schema --}}
    @php
        $siteLd = [
            '@context' => 'https://schema.org',
            '@graph' => [
                [
                    '@type' => 'Organization',
                    '@id' => url('/').'#organization',
                    'name' => 'ifsasepeti.com',
                    'url' => url('/'),
                    'logo' => asset('img/logo.png'),
                    'description' => 'Türkiye\'nin en kapsamlı yetişkin site dizini ve inceleme platformu.',
                ],
                [
                    '@type' => 'WebSite',
                    '@id' => url('/').'#website',
                    'url' => url('/'),
                    'name' => 'ifsasepeti.com',
                    'description' => 'En iyi yetişkin site dizini',
                    'inLanguage' => 'tr-TR',
                    'publisher' => ['@id' => url('/').'#organization'],
                    'potentialAction' => [
                        '@type' => 'SearchAction',
                        'target' => [
                            '@type' => 'EntryPoint',
                            'urlTemplate' => url('/').'/ara?q={search_term_string}',
                        ],
                        'query-input' => 'required name=search_term_string',
                    ],
                ],
            ],
        ];
    @endphp
    <script type="application/ld+json">{!! json_encode($siteLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
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

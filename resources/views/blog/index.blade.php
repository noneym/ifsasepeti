@extends('layouts.app')

@section('title', 'Blog - Yetişkin İçerik Rehberi, İncelemeler ve Tavsiyeler - ifsasepeti.com')
@section('description', 'ifsasepeti.com blog: yetişkin sitelerine güvenli erişim, premium karşılaştırmaları, AI porno trendleri, OnlyFans rehberleri ve sektör analizleri. Her hafta yeni içerik.')
@section('canonical', route('blog.index'))

@section('json_ld')
    @php
        $blogLd = [
            '@context' => 'https://schema.org',
            '@type' => 'Blog',
            'name' => 'ifsasepeti.com Blog',
            'url' => route('blog.index'),
            'inLanguage' => 'tr-TR',
            'description' => 'Yetişkin internet rehberi, premium site karşılaştırmaları, AI trendleri ve güvenli kullanım önerileri.',
            'blogPost' => $posts->map(fn ($p) => [
                '@type' => 'BlogPosting',
                'headline' => $p->title,
                'url' => $p->url,
                'datePublished' => optional($p->published_at)->toAtomString(),
                'description' => $p->excerpt,
            ])->all(),
        ];
    @endphp
    <script type="application/ld+json">{!! json_encode($blogLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endsection

@section('content')
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-1 sm:py-3 grid-cards-wrap">

        <nav aria-label="breadcrumb" class="text-[11px] text-ifsa-muted dark:text-slate-500 mb-2 flex items-center gap-1.5 max-w-[60%] lg:max-w-full">
            <a href="{{ url('/') }}" class="hover:text-ifsa-orange">Anasayfa</a>
            <span>›</span>
            <span class="text-ifsa-ink dark:text-slate-200">Blog</span>
        </nav>

        <header class="mb-6">
            <h1 class="text-2xl sm:text-3xl font-display font-extrabold text-ifsa-ink dark:text-slate-100">
                Blog: Yetişkin İnternet Rehberi
            </h1>
            <p class="mt-2 text-ifsa-muted dark:text-slate-400">
                Premium karşılaştırmaları, AI trendleri, OnlyFans rehberleri ve güvenli erişim önerileri.
            </p>
        </header>

        @if ($featured)
            <a href="{{ $featured->url }}" class="card mb-8 flex flex-col md:flex-row overflow-hidden hover:border-ifsa-orange transition group">
                <div class="md:w-1/2 bg-ifsa-bg dark:bg-slate-800 aspect-video md:aspect-auto relative overflow-hidden">
                    @if ($featured->cover_url)
                        <img src="{{ $featured->cover_url }}" alt="{{ $featured->title }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform">
                    @else
                        <div class="absolute inset-0 bg-gradient-to-br from-ifsa-yellow via-ifsa-orange to-ifsa-red flex items-center justify-center text-7xl">
                            📝
                        </div>
                    @endif
                </div>
                <div class="md:w-1/2 p-6 sm:p-8 flex flex-col justify-center">
                    <span class="inline-flex items-center px-2 py-0.5 rounded bg-ifsa-orange/10 text-ifsa-orange text-[10px] font-bold uppercase tracking-wider mb-2 w-fit">
                        Öne Çıkan
                    </span>
                    <h2 class="font-display font-extrabold text-xl sm:text-2xl text-ifsa-ink dark:text-slate-100 mb-2">{{ $featured->title }}</h2>
                    @if ($featured->excerpt)
                        <p class="text-sm text-ifsa-muted dark:text-slate-400 line-clamp-3">{{ $featured->excerpt }}</p>
                    @endif
                    <div class="mt-3 text-xs text-ifsa-muted dark:text-slate-500 flex items-center gap-3">
                        <span>{{ optional($featured->published_at)->translatedFormat('d F Y') }}</span>
                        @if ($featured->reading_minutes)
                            <span>· {{ $featured->reading_minutes }} dk okuma</span>
                        @endif
                    </div>
                </div>
            </a>
        @endif

        @if ($posts->isEmpty())
            <div class="card p-10 text-center text-ifsa-muted dark:text-slate-400">
                Henüz yayınlanmış yazı yok. Yakında!
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach ($posts as $post)
                    <a href="{{ $post->url }}" class="card overflow-hidden hover:border-ifsa-orange transition group flex flex-col">
                        <div class="aspect-video bg-ifsa-bg dark:bg-slate-800 relative overflow-hidden">
                            @if ($post->cover_url)
                                <img src="{{ $post->cover_url }}" alt="{{ $post->title }}" loading="lazy" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform">
                            @else
                                <div class="absolute inset-0 bg-gradient-to-br from-ifsa-yellow via-ifsa-orange to-ifsa-red flex items-center justify-center text-5xl">
                                    📝
                                </div>
                            @endif
                        </div>
                        <div class="p-4 flex-1 flex flex-col">
                            @if (! empty($post->tags))
                                <div class="flex flex-wrap gap-1.5 mb-2">
                                    @foreach (array_slice($post->tags, 0, 3) as $tag)
                                        <span class="text-[10px] font-bold uppercase tracking-wider px-1.5 py-0.5 rounded bg-ifsa-bg dark:bg-slate-800 text-ifsa-muted dark:text-slate-400">{{ $tag }}</span>
                                    @endforeach
                                </div>
                            @endif
                            <h3 class="font-bold text-base text-ifsa-ink dark:text-slate-100 leading-snug line-clamp-2">{{ $post->title }}</h3>
                            @if ($post->excerpt)
                                <p class="mt-1 text-xs text-ifsa-muted dark:text-slate-400 line-clamp-2 flex-1">{{ $post->excerpt }}</p>
                            @endif
                            <div class="mt-3 text-[11px] text-ifsa-muted dark:text-slate-500 flex items-center gap-2">
                                <span>{{ optional($post->published_at)->translatedFormat('d F Y') }}</span>
                                @if ($post->reading_minutes)
                                    <span>· {{ $post->reading_minutes }} dk</span>
                                @endif
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            @if ($posts->hasPages())
                <div class="mt-8">{{ $posts->links() }}</div>
            @endif
        @endif
    </div>
@endsection

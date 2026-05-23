@extends('layouts.app')

@section('title', ($post->meta_title ?: $post->title.' - ifsasepeti.com Blog'))
@section('description', $post->meta_description ?: $post->excerpt)
@section('canonical', $post->url)
@section('og_type', 'article')
@section('og_image', $post->cover_url ?: asset('img/logo.png'))

@section('json_ld')
    @php
        $postLd = [
            '@context' => 'https://schema.org',
            '@graph' => [
                [
                    '@type' => 'BreadcrumbList',
                    'itemListElement' => [
                        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Anasayfa', 'item' => url('/')],
                        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => route('blog.index')],
                        ['@type' => 'ListItem', 'position' => 3, 'name' => $post->title, 'item' => $post->url],
                    ],
                ],
                [
                    '@type' => 'BlogPosting',
                    'headline' => $post->title,
                    'description' => $post->excerpt,
                    'url' => $post->url,
                    'inLanguage' => 'tr-TR',
                    'image' => $post->cover_url ?: asset('img/logo.png'),
                    'datePublished' => optional($post->published_at)->toAtomString(),
                    'dateModified' => optional($post->updated_at)->toAtomString(),
                    'wordCount' => str_word_count(strip_tags((string) $post->body)),
                    'articleBody' => mb_substr(strip_tags((string) $post->body), 0, 5000),
                    'author' => [
                        '@type' => 'Organization',
                        'name' => 'ifsasepeti.com',
                        'url' => url('/'),
                    ],
                    'publisher' => [
                        '@type' => 'Organization',
                        'name' => 'ifsasepeti.com',
                        'logo' => [
                            '@type' => 'ImageObject',
                            'url' => asset('img/logo.png'),
                        ],
                    ],
                    'mainEntityOfPage' => [
                        '@type' => 'WebPage',
                        '@id' => $post->url,
                    ],
                    'keywords' => $post->tags ? implode(', ', $post->tags) : null,
                ],
            ],
        ];
    @endphp
    <script type="application/ld+json">{!! json_encode($postLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endsection

@section('content')
    <article class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-1 sm:py-3 grid-cards-wrap">

        <nav aria-label="breadcrumb" class="text-[11px] text-ifsa-muted dark:text-slate-500 mb-2 flex items-center gap-1.5 max-w-[60%] lg:max-w-full">
            <a href="{{ url('/') }}" class="hover:text-ifsa-orange">Anasayfa</a>
            <span>›</span>
            <a href="{{ route('blog.index') }}" class="hover:text-ifsa-orange">Blog</a>
            <span>›</span>
            <span class="text-ifsa-ink dark:text-slate-200 truncate">{{ Str::limit($post->title, 40) }}</span>
        </nav>

        <header class="mb-6">
            @if (! empty($post->tags))
                <div class="flex flex-wrap gap-1.5 mb-3">
                    @foreach ($post->tags as $tag)
                        <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded bg-ifsa-orange/10 text-ifsa-orange">{{ $tag }}</span>
                    @endforeach
                </div>
            @endif
            <h1 class="font-display font-extrabold text-2xl sm:text-3xl md:text-4xl text-ifsa-ink dark:text-slate-100 leading-tight">{{ $post->title }}</h1>
            <div class="mt-3 text-xs text-ifsa-muted dark:text-slate-500 flex items-center gap-3">
                <span>{{ optional($post->published_at)->translatedFormat('d F Y') }}</span>
                @if ($post->reading_minutes)
                    <span>· {{ $post->reading_minutes }} dk okuma</span>
                @endif
                <span>· {{ number_format($post->view_count) }} okunma</span>
            </div>
        </header>

        @if ($post->cover_url)
            <img src="{{ $post->cover_url }}" alt="{{ $post->title }}" class="w-full aspect-video object-cover rounded-2xl mb-6">
        @endif

        @if ($post->excerpt)
            <p class="text-lg text-ifsa-ink/80 dark:text-slate-300 leading-relaxed border-l-4 border-ifsa-orange pl-4 mb-6">
                {{ $post->excerpt }}
            </p>
        @endif

        <div class="prose prose-sm sm:prose max-w-none dark:prose-invert text-ifsa-ink/90 dark:text-slate-200 leading-relaxed">
            {!! $post->body !!}
        </div>

        @if ($related->count())
            <section class="mt-10">
                <h2 class="text-xs font-bold uppercase tracking-wider text-ifsa-muted dark:text-slate-500 mb-3">İlgili Yazılar</h2>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    @foreach ($related as $r)
                        <a href="{{ $r->url }}" class="card p-4 hover:border-ifsa-orange transition">
                            <h3 class="font-bold text-sm text-ifsa-ink dark:text-slate-100 line-clamp-2">{{ $r->title }}</h3>
                            <div class="mt-2 text-[11px] text-ifsa-muted dark:text-slate-500">
                                {{ optional($r->published_at)->translatedFormat('d F Y') }}
                            </div>
                        </a>
                    @endforeach
                </div>
            </section>
        @endif
    </article>
@endsection

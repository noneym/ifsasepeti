@extends('layouts.app')

@section('title', 'En İyi '.$category->name.' '.now()->format('Y').' - ifsasepeti.com')
@section('description', $category->meta_description ?? ($category->subtitle ?? 'En iyi '.$category->name.' listesi, incelemeler, artılar ve eksiler - ifsasepeti.com'))
@section('canonical', route('category.show', $category->slug))

@section('json_ld')
    @php
        $catLd = [
            '@context' => 'https://schema.org',
            '@graph' => [
                [
                    '@type' => 'BreadcrumbList',
                    'itemListElement' => [
                        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Anasayfa', 'item' => url('/')],
                        ['@type' => 'ListItem', 'position' => 2, 'name' => $category->name, 'item' => route('category.show', $category->slug)],
                    ],
                ],
                [
                    '@type' => 'CollectionPage',
                    'name' => $category->name,
                    'description' => $category->subtitle,
                    'url' => route('category.show', $category->slug),
                    'inLanguage' => 'tr-TR',
                    'isFamilyFriendly' => false,
                    'mainEntity' => [
                        '@type' => 'ItemList',
                        'numberOfItems' => $sites->count(),
                        'itemListElement' => $sites->map(fn ($s, $i) => [
                            '@type' => 'ListItem',
                            'position' => $i + 1,
                            'name' => $s->name,
                            'url' => route('site.show', $s->slug),
                        ])->all(),
                    ],
                ],
            ],
        ];
    @endphp
    <script type="application/ld+json">{!! json_encode($catLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endsection

@section('content')
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-6 grid-cards-wrap">
        <nav aria-label="breadcrumb"
             class="text-xs text-ifsa-muted dark:text-slate-500 mb-3 flex items-center gap-1.5 flex-nowrap overflow-hidden whitespace-nowrap pr-24 sm:pr-32 lg:pr-0">
            <a href="{{ url('/') }}" class="shrink-0 hover:text-ifsa-orange">Anasayfa</a>
            <span class="shrink-0">›</span>
            <span class="shrink min-w-0 truncate text-ifsa-ink dark:text-slate-200">{{ $category->name }}</span>
        </nav>

        <header class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                @include('partials.category-icon', ['icon' => $category->icon, 'color' => $category->accent_color])
                <h1 class="text-2xl sm:text-3xl font-display font-bold text-ifsa-ink">
                    En İyi {{ $category->name }} {{ now()->format('Y') }}
                </h1>
            </div>
            @if ($category->subtitle)
                <p class="text-ifsa-muted text-base">{{ $category->subtitle }}</p>
            @endif
            @if ($category->description)
                <div class="prose prose-sm max-w-none mt-4 text-ifsa-ink/80">{!! nl2br(e($category->description)) !!}</div>
            @endif
        </header>

        <h2 class="text-sm font-bold uppercase tracking-wider text-ifsa-muted mb-3">
            {{ $sites->count() }} {{ $category->name }} Listelendi
        </h2>

        <div class="card">
            <ol class="divide-y divide-ifsa-border">
                @foreach ($sites as $index => $site)
                    <li class="site-row !py-3">
                        <span class="num !text-sm">{{ $index + 1 }}.</span>
                        @if ($site->logo_emoji)
                            <span class="text-xl w-8 text-center leading-none">{{ $site->logo_emoji }}</span>
                        @else
                            <span class="w-8 h-8 rounded-full bg-ifsa-bg border border-ifsa-border flex items-center justify-center text-xs font-bold text-ifsa-muted">
                                {{ mb_substr($site->name, 0, 1) }}
                            </span>
                        @endif
                        <a href="{{ route('site.show', $site->slug) }}"
                           class="flex-1 font-semibold text-ifsa-ink hover:text-ifsa-orange truncate"
                           title="{{ $site->name }} İnceleme">
                            {{ $site->name }}
                        </a>
                        <div class="flex items-center gap-1.5">
                            @foreach ($site->badges as $badge)
                                <span class="badge {{ $badge['class'] }}">{{ $badge['label'] }}</span>
                            @endforeach
                        </div>
                        <a href="{{ route('site.go', $site->slug) }}"
                           target="_blank"
                           rel="noopener nofollow sponsored"
                           class="ml-3 hidden sm:inline-flex items-center px-3 py-1.5 rounded-lg bg-ifsa-orange text-white text-xs font-bold hover:bg-ifsa-red transition">
                            Siteye Git →
                        </a>
                    </li>
                @endforeach
            </ol>
        </div>

        {{-- SEO content footer --}}
        <section class="mt-8 prose prose-sm max-w-none text-ifsa-muted">
            <h2 class="text-base font-display font-bold text-ifsa-ink">{{ $category->name }} Hakkında</h2>
            <p>
                {{ $category->name }} kategorisinde {{ $sites->count() }} aktif platform listeliyoruz.
                Her site Türkçe inceleme, artılar/eksiler ve kullanıcı puanı ile değerlendirilmiştir.
                Listemize girmesi için sitelerin yasal ve rıza temelli içerik politikası uyguluyor olması zorunludur.
            </p>
            <p>
                Sıralama; içerik kalitesi, güncel güncellemeler, kullanıcı deneyimi ve şeffaf ödeme politikalarına
                göre belirlenmiştir. Her ay revize edilir.
            </p>
        </section>
    </div>
@endsection

@extends('layouts.app')

@section('title', ($site->meta_title ?: $site->name.' İnceleme - ifsasepeti.com'))
@section('description', $site->meta_description ?: $site->tagline ?: ('İncelemesi, artıları, eksileri ve linki - '.$site->name))

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">

        {{-- Breadcrumb --}}
        <nav class="text-xs text-ifsa-muted mb-4 flex items-center gap-1.5">
            <a href="{{ url('/') }}" class="hover:text-ifsa-orange">ifsasepeti</a>
            <span>›</span>
            <a href="{{ route('category.show', $site->category->slug) }}" class="hover:text-ifsa-orange">{{ $site->category->name }}</a>
            <span>›</span>
            <span class="text-ifsa-ink truncate">{{ $site->name }} İnceleme</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

            {{-- Left: site screenshot card --}}
            <aside class="lg:col-span-4 order-1">
                <div class="card overflow-hidden sticky top-4">
                    <div class="px-4 py-3 border-b border-ifsa-border bg-ifsa-bg/60 flex items-center gap-2">
                        <span class="h-3 w-3 rounded-full bg-rose-400"></span>
                        <span class="h-3 w-3 rounded-full bg-amber-400"></span>
                        <span class="h-3 w-3 rounded-full bg-emerald-400"></span>
                        <span class="ml-2 text-xs text-ifsa-muted truncate flex-1">{{ parse_url($site->url, PHP_URL_HOST) }}</span>
                    </div>
                    @if ($site->screenshot_url)
                        <a href="{{ route('site.go', $site->slug) }}" target="_blank" rel="noopener nofollow" class="block bg-ifsa-bg relative">
                            <img src="{{ $site->screenshot_url }}"
                                 alt="{{ $site->name }} ekran görüntüsü"
                                 class="w-full h-auto aspect-[4/3] object-cover"
                                 loading="lazy"
                                 onerror="this.style.display='none'">
                            <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 to-transparent p-3">
                                <span class="text-white text-xs font-bold uppercase tracking-wider">Siteyi Aç →</span>
                            </div>
                        </a>
                    @else
                        <div class="aspect-[4/3] bg-gradient-to-br from-ifsa-bg to-ifsa-border flex items-center justify-center text-6xl">
                            {{ $site->logo_emoji ?: mb_substr($site->name, 0, 1) }}
                        </div>
                    @endif

                    <a href="{{ route('site.go', $site->slug) }}"
                       target="_blank"
                       rel="noopener nofollow"
                       class="block bg-emerald-500 hover:bg-emerald-600 text-white text-center font-bold py-3.5 text-sm">
                        Siteye Git: {{ $site->name }} →
                    </a>

                    <div class="px-4 py-3 text-center text-xs text-ifsa-muted">
                        <a href="{{ $site->url }}" target="_blank" rel="noopener nofollow" class="hover:text-ifsa-orange break-all">{{ $site->url }}</a>
                    </div>
                </div>

                <a href="{{ route('category.show', $site->category->slug) }}"
                   class="mt-4 block text-center bg-ifsa-card border border-ifsa-border rounded-xl py-3 text-sm font-semibold hover:border-ifsa-orange transition">
                    ↓ {{ $site->category->name }} Tümünü Gör
                </a>
            </aside>

            {{-- Right: review content --}}
            <article class="lg:col-span-8 order-2">
                <div class="card p-6 sm:p-8">

                    <div class="flex items-center gap-3 mb-3">
                        @if ($position)
                            <span class="inline-flex items-center justify-center h-9 px-3 rounded-lg bg-gradient-to-br from-ifsa-yellow via-ifsa-orange to-ifsa-red text-white font-black text-sm shadow-sm">
                                #{{ $position }}
                            </span>
                        @endif
                        <div class="flex items-center gap-1.5">
                            @foreach ($site->badges as $badge)
                                <span class="badge {{ $badge['class'] }}">{{ $badge['label'] }}</span>
                            @endforeach
                        </div>
                    </div>

                    <h1 class="font-display font-extrabold text-2xl sm:text-3xl text-ifsa-ink mb-1 flex items-center gap-2">
                        @if ($site->logo_emoji)
                            <span>{{ $site->logo_emoji }}</span>
                        @endif
                        {{ $site->name }} İnceleme
                    </h1>
                    <a href="{{ $site->url }}" target="_blank" rel="noopener nofollow"
                       class="text-sm text-ifsa-muted hover:text-ifsa-orange break-all">
                        {{ $site->url }}
                    </a>

                    @if ($site->tagline)
                        <p class="mt-4 text-lg text-ifsa-ink/80 leading-relaxed font-medium">
                            {{ $site->tagline }}
                        </p>
                    @endif

                    @if ($site->review_long)
                        <div class="mt-5 prose prose-sm sm:prose max-w-none text-ifsa-ink/90 leading-relaxed">
                            {!! nl2br(e($site->review_long)) !!}
                        </div>
                    @elseif ($site->description)
                        <div class="mt-5 text-ifsa-ink/90 leading-relaxed">
                            {{ $site->description }}
                        </div>
                    @else
                        <p class="mt-5 text-ifsa-muted italic">
                            Bu site için detaylı inceleme henüz hazırlanıyor.
                        </p>
                    @endif

                    {{-- Pros / Cons --}}
                    @if (!empty($site->pros) || !empty($site->cons))
                        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                            @if (!empty($site->pros))
                                <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-4">
                                    <h3 class="text-xs font-bold uppercase tracking-wider text-emerald-700 mb-2">Artıları</h3>
                                    <ul class="space-y-1.5 text-sm">
                                        @foreach ($site->pros as $pro)
                                            <li class="flex items-start gap-2">
                                                <span class="text-emerald-600 font-bold mt-0.5">✓</span>
                                                <span>{{ $pro }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (!empty($site->cons))
                                <div class="bg-rose-50 border border-rose-200 rounded-xl p-4">
                                    <h3 class="text-xs font-bold uppercase tracking-wider text-rose-700 mb-2">Eksileri</h3>
                                    <ul class="space-y-1.5 text-sm">
                                        @foreach ($site->cons as $con)
                                            <li class="flex items-start gap-2">
                                                <span class="text-rose-600 font-bold mt-0.5">✗</span>
                                                <span>{{ $con }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    @endif

                    {{-- Rating --}}
                    @if ($site->rating)
                        <div class="mt-6 flex items-center gap-3">
                            <span class="text-xs font-bold uppercase tracking-wider text-ifsa-muted">Kullanıcı Puanı</span>
                            <div class="flex items-center gap-0.5">
                                @for ($i = 1; $i <= 5; $i++)
                                    <span class="text-xl {{ $i <= $site->rating_filled ? '' : 'opacity-25 grayscale' }}">🤙</span>
                                @endfor
                            </div>
                            <span class="text-sm font-bold text-ifsa-ink">{{ number_format($site->rating, 1) }}/5</span>
                        </div>
                    @endif

                </div>

                {{-- Similar sites --}}
                @if ($similar->count())
                    <section class="mt-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-2xl">🤙</span>
                            <h2 class="font-display font-extrabold text-lg uppercase">
                                {{ $similar->count() }}+ {{ $site->category->name }} Gibi {{ $site->name }}
                            </h2>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                            @foreach ($similar as $idx => $alt)
                                <a href="{{ route('site.show', $alt->slug) }}" class="card overflow-hidden hover:border-ifsa-orange transition group">
                                    <div class="relative aspect-[4/3] bg-ifsa-bg overflow-hidden">
                                        @if ($alt->screenshot_url)
                                            <img src="{{ $alt->screenshot_url }}"
                                                 alt="{{ $alt->name }}"
                                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform"
                                                 loading="lazy"
                                                 onerror="this.parentElement.classList.add('!bg-gradient-to-br','!from-ifsa-bg','!to-ifsa-border'); this.outerHTML='<span class=&quot;absolute inset-0 flex items-center justify-center text-4xl&quot;>{{ $alt->logo_emoji ?: '🌐' }}</span>'">
                                        @else
                                            <span class="absolute inset-0 flex items-center justify-center text-4xl">{{ $alt->logo_emoji ?: '🌐' }}</span>
                                        @endif
                                        <span class="absolute top-2 left-2 inline-flex items-center justify-center h-6 px-2 rounded-md bg-black/60 text-white text-[10px] font-bold">
                                            {{ $idx + 1 }}
                                        </span>
                                    </div>
                                    <div class="px-3 py-2 flex items-center justify-between gap-2">
                                        <span class="text-sm font-semibold truncate">{{ $alt->name }}</span>
                                        <div class="flex items-center gap-1 flex-shrink-0">
                                            @foreach (array_slice($alt->badges, 0, 2) as $b)
                                                <span class="badge {{ $b['class'] }}">{{ $b['label'] }}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </section>
                @endif

            </article>
        </div>
    </div>
@endsection

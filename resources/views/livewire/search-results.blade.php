@section('robots', 'noindex, follow')

<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-6 grid-cards-wrap">

    <header class="mb-6">
        <h1 class="text-2xl sm:text-3xl font-display font-extrabold text-ifsa-ink dark:text-slate-100">
            Arama Sonuçları
        </h1>
        @if ($query)
            <p class="mt-1 text-ifsa-muted dark:text-slate-400">
                <span class="font-semibold text-ifsa-ink dark:text-slate-200">"{{ $query }}"</span> için
                {{ $siteCount }} site, {{ $postCount }} blog yazısı bulundu.
            </p>
        @endif
    </header>

    @if (mb_strlen($query) < 2)
        <div class="card p-10 text-center text-ifsa-muted dark:text-slate-400">
            Aramak için en az 2 karakter girin.
        </div>
    @else
        {{-- Tabs --}}
        <div class="flex items-center gap-2 mb-5 border-b border-ifsa-border dark:border-slate-800">
            <button wire:click="setTab('sites')"
                    class="px-4 py-2.5 text-sm font-bold border-b-2 -mb-px transition
                           {{ $tab === 'sites' ? 'border-ifsa-orange text-ifsa-orange' : 'border-transparent text-ifsa-muted dark:text-slate-400 hover:text-ifsa-ink dark:hover:text-slate-200' }}">
                Siteler ({{ $siteCount }})
            </button>
            <button wire:click="setTab('posts')"
                    class="px-4 py-2.5 text-sm font-bold border-b-2 -mb-px transition
                           {{ $tab === 'posts' ? 'border-ifsa-orange text-ifsa-orange' : 'border-transparent text-ifsa-muted dark:text-slate-400 hover:text-ifsa-ink dark:hover:text-slate-200' }}">
                Blog ({{ $postCount }})
            </button>
        </div>

        @if ($tab === 'sites')
            @if ($sites && $sites->count())
                <div class="card overflow-hidden">
                    <ol class="divide-y divide-ifsa-border dark:divide-slate-800">
                        @foreach ($sites as $site)
                            <li class="flex items-center gap-3 px-4 sm:px-5 py-3 hover:bg-ifsa-bg dark:hover:bg-slate-800/50 transition">
                                <span class="text-2xl w-9 text-center flex-shrink-0">{{ $site->logo_emoji ?: '🌐' }}</span>
                                <div class="flex-1 min-w-0">
                                    <a href="{{ route('site.show', $site->slug) }}" class="font-semibold text-ifsa-ink dark:text-slate-100 hover:text-ifsa-orange">
                                        {{ $site->name }}
                                    </a>
                                    @if ($site->tagline)
                                        <p class="text-xs text-ifsa-muted dark:text-slate-500 truncate">{{ $site->tagline }}</p>
                                    @endif
                                    <div class="mt-0.5 flex items-center gap-2">
                                        @if ($site->category)
                                            <a href="{{ route('category.show', $site->category->slug) }}" class="text-[11px] text-ifsa-muted dark:text-slate-500 hover:text-ifsa-orange">
                                                {{ $site->category->name }}
                                            </a>
                                        @endif
                                        @foreach (array_slice($site->badges, 0, 2) as $b)
                                            <span class="badge {{ $b['class'] }}">{{ $b['label'] }}</span>
                                        @endforeach
                                    </div>
                                </div>
                                @if ($site->rating)
                                    <span class="hidden sm:inline-flex flex-shrink-0 items-center gap-1 text-sm font-bold text-ifsa-orange">
                                        🤙 {{ number_format($site->rating, 1) }}
                                    </span>
                                @endif
                                <a href="{{ route('site.show', $site->slug) }}"
                                   class="flex-shrink-0 inline-flex items-center px-3 py-1.5 rounded-lg bg-ifsa-orange text-white text-xs font-bold hover:bg-ifsa-red transition">
                                    İncele →
                                </a>
                            </li>
                        @endforeach
                    </ol>
                </div>
                <div class="mt-6">{{ $sites->links() }}</div>
            @else
                <div class="card p-10 text-center">
                    <div class="text-4xl mb-3">🤷</div>
                    <p class="text-ifsa-muted dark:text-slate-400">"{{ $query }}" ile eşleşen site bulunamadı.</p>
                </div>
            @endif
        @else
            @if ($posts && $posts->count())
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                    @foreach ($posts as $post)
                        <a href="{{ $post->url }}" class="card overflow-hidden hover:border-ifsa-orange transition group flex flex-col">
                            <div class="aspect-video bg-ifsa-bg dark:bg-slate-800 relative overflow-hidden">
                                @if ($post->cover_url)
                                    <img src="{{ $post->cover_url }}" alt="{{ $post->title }}" loading="lazy" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform">
                                @else
                                    <div class="absolute inset-0 bg-gradient-to-br from-ifsa-yellow via-ifsa-orange to-ifsa-red flex items-center justify-center text-5xl">📝</div>
                                @endif
                            </div>
                            <div class="p-4 flex-1">
                                <h3 class="font-bold text-base text-ifsa-ink dark:text-slate-100 leading-snug line-clamp-2">{{ $post->title }}</h3>
                                @if ($post->excerpt)
                                    <p class="mt-1 text-xs text-ifsa-muted dark:text-slate-400 line-clamp-2">{{ $post->excerpt }}</p>
                                @endif
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="mt-6">{{ $posts->links() }}</div>
            @else
                <div class="card p-10 text-center">
                    <div class="text-4xl mb-3">🤷</div>
                    <p class="text-ifsa-muted dark:text-slate-400">"{{ $query }}" ile eşleşen blog yazısı bulunamadı.</p>
                </div>
            @endif
        @endif
    @endif
</div>

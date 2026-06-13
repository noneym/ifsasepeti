<div class="relative"
     x-data="{ open: false }"
     @click.outside="open = false"
     @keydown.escape.window="open = false">

    <form action="{{ route('search') }}" method="get" class="relative" role="search">
        <input type="text"
               name="q"
               wire:model.live.debounce.250ms="query"
               @focus="open = true"
               @input="open = true"
               autocomplete="off"
               placeholder="Site ara..."
               aria-label="Site ara"
               class="w-full rounded-full border border-ifsa-border bg-white px-5 py-2.5 pr-12 text-sm placeholder:text-ifsa-muted focus:border-ifsa-orange focus:ring-2 focus:ring-ifsa-orange/30 focus:outline-none
                      dark:bg-slate-900 dark:border-slate-700 dark:text-slate-100 dark:placeholder:text-slate-500">
        <button type="submit" class="absolute right-1.5 top-1/2 -translate-y-1/2 h-8 w-8 rounded-full bg-ifsa-orange text-white flex items-center justify-center hover:bg-ifsa-red transition" aria-label="Ara">
            <svg wire:loading.remove wire:target="query" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            <svg wire:loading wire:target="query" class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg>
        </button>
    </form>

    {{-- Live results dropdown --}}
    <div x-show="open"
         x-cloak
         x-transition:enter="transition ease-out duration-150"
         x-transition:enter-start="opacity-0 -translate-y-1"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="absolute z-50 mt-2 w-full sm:min-w-[28rem] rounded-2xl border border-ifsa-border dark:border-slate-700 bg-white dark:bg-slate-900 shadow-xl overflow-hidden"
         @if (! $hasQuery) style="display:none" @endif>

        @if ($hasQuery)
            @if ($sites->isEmpty() && $posts->isEmpty())
                <div class="px-5 py-6 text-center">
                    <div class="text-3xl mb-2">🤷</div>
                    <p class="text-sm text-ifsa-muted dark:text-slate-400">"{{ $query }}" için sonuç bulunamadı.</p>
                </div>
            @else
                @if ($sites->isNotEmpty())
                    <div class="px-4 pt-3 pb-1 text-[10px] font-bold uppercase tracking-widest text-ifsa-muted dark:text-slate-500">Siteler</div>
                    <ul>
                        @foreach ($sites as $site)
                            <li>
                                <a href="{{ route('site.show', $site->slug) }}"
                                   class="flex items-center gap-3 px-4 py-2.5 hover:bg-ifsa-bg dark:hover:bg-slate-800 transition">
                                    <span class="text-xl w-7 text-center flex-shrink-0">{{ $site->logo_emoji ?: '🌐' }}</span>
                                    <span class="flex-1 min-w-0">
                                        <span class="block text-sm font-semibold text-ifsa-ink dark:text-slate-100 truncate">{{ $site->name }}</span>
                                        <span class="block text-[11px] text-ifsa-muted dark:text-slate-500 truncate">
                                            {{ optional($site->category)->name }}
                                            @if ($site->tagline) · {{ Str::limit($site->tagline, 50) }} @endif
                                        </span>
                                    </span>
                                    @if ($site->rating)
                                        <span class="flex-shrink-0 inline-flex items-center gap-1 text-xs font-bold text-ifsa-orange">
                                            🤙 {{ number_format($site->rating, 1) }}
                                        </span>
                                    @endif
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif

                @if ($posts->isNotEmpty())
                    <div class="px-4 pt-3 pb-1 text-[10px] font-bold uppercase tracking-widest text-ifsa-muted dark:text-slate-500 border-t border-ifsa-border dark:border-slate-800">Blog</div>
                    <ul>
                        @foreach ($posts as $post)
                            <li>
                                <a href="{{ $post->url }}"
                                   class="flex items-center gap-3 px-4 py-2.5 hover:bg-ifsa-bg dark:hover:bg-slate-800 transition">
                                    <span class="text-lg w-7 text-center flex-shrink-0">📝</span>
                                    <span class="flex-1 min-w-0">
                                        <span class="block text-sm font-semibold text-ifsa-ink dark:text-slate-100 truncate">{{ $post->title }}</span>
                                        <span class="block text-[11px] text-ifsa-muted dark:text-slate-500 truncate">{{ optional($post->published_at)->translatedFormat('d F Y') }}</span>
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif

                <a href="{{ route('search', ['q' => $query]) }}"
                   class="block px-4 py-3 text-center text-xs font-bold uppercase tracking-wider text-ifsa-orange hover:bg-ifsa-orange/5 border-t border-ifsa-border dark:border-slate-800 transition">
                    Tüm sonuçları gör →
                </a>
            @endif
        @endif
    </div>
</div>

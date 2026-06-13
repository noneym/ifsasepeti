<div class="card flex flex-col">
    <a href="{{ route('category.show', $category->slug) }}"
       class="card-header group/header hover:bg-ifsa-bg/50 dark:hover:bg-slate-800/40 transition-colors"
       style="color: {{ $category->accent_color }};"
       title="{{ $category->name }} kategorisini gör">
        @include('partials.category-icon', ['icon' => $category->icon, 'color' => $category->accent_color])
        <span class="text-ifsa-ink dark:text-slate-100 truncate group-hover/header:text-ifsa-orange transition-colors">{{ $category->name }}</span>
        <svg class="w-3.5 h-3.5 ml-auto flex-shrink-0 text-ifsa-muted dark:text-slate-500 opacity-0 group-hover/header:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
    </a>

    @if ($category->subtitle)
        <a href="{{ route('category.show', $category->slug) }}"
           class="block px-5 pt-3 pb-2 text-xs text-ifsa-muted dark:text-slate-400 leading-relaxed hover:text-ifsa-ink dark:hover:text-slate-300 transition-colors">
            {{ $category->subtitle }}
        </a>
    @endif

    <ol class="cat-scroll flex-1 py-1 max-h-80 overflow-y-auto">
        @foreach ($sites as $index => $site)
            <li class="site-row">
                <span class="num">{{ $index + 1 }}.</span>
                @if ($site->logo_emoji)
                    <span class="text-lg w-6 text-center leading-none">{{ $site->logo_emoji }}</span>
                @else
                    <span class="w-6 h-6 rounded-full bg-ifsa-bg dark:bg-slate-800 border border-ifsa-border dark:border-slate-700 flex items-center justify-center text-[10px] font-bold text-ifsa-muted dark:text-slate-400">
                        {{ mb_substr($site->name, 0, 1) }}
                    </span>
                @endif
                <a href="{{ route('site.show', $site->slug) }}"
                   class="flex-1 text-sm font-medium text-ifsa-ink dark:text-slate-200 hover:text-ifsa-orange dark:hover:text-ifsa-orange truncate">
                    {{ $site->name }}
                </a>
                @foreach ($site->badges as $badge)
                    <span class="badge {{ $badge['class'] }}">{{ $badge['label'] }}</span>
                @endforeach
            </li>
        @endforeach

        {{-- CTA: list your own site --}}
        <li>
            <a href="{{ route('link-exchange') }}"
               class="flex items-center gap-2 px-5 py-2.5 mt-1 border-t border-dashed border-ifsa-border dark:border-slate-700 text-ifsa-muted dark:text-slate-400 hover:text-ifsa-orange dark:hover:text-ifsa-orange hover:bg-ifsa-bg/60 dark:hover:bg-slate-800/60 transition-colors group/add">
                <span class="w-6 h-6 rounded-full border border-dashed border-ifsa-muted/50 dark:border-slate-600 flex items-center justify-center text-base leading-none group-hover/add:border-ifsa-orange group-hover/add:text-ifsa-orange transition-colors">+</span>
                <span class="flex-1 text-sm font-semibold">Siteni buraya ekle</span>
                <svg class="w-3.5 h-3.5 flex-shrink-0 opacity-0 group-hover/add:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
        </li>
    </ol>

    <a href="{{ route('category.show', $category->slug) }}"
       class="btn-more"
       style="background-color: {{ $category->accent_color }};">
        @if ($remaining > 0)
            {{ $remaining }} {{ $category->button_label }} →
        @else
            TÜMÜNÜ GÖR ({{ $total }}) →
        @endif
    </a>
</div>

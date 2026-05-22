<div class="card flex flex-col">
    <div class="card-header" style="color: {{ $category->accent_color }};">
        @include('partials.category-icon', ['icon' => $category->icon, 'color' => $category->accent_color])
        <span class="text-ifsa-ink truncate">{{ $category->name }}</span>
    </div>

    @if ($category->subtitle)
        <div class="px-5 pt-3 pb-2 text-xs text-ifsa-muted leading-relaxed">
            {{ $category->subtitle }}
        </div>
    @endif

    <ol class="flex-1 py-1">
        @foreach ($sites as $index => $site)
            <li class="site-row">
                <span class="num">{{ $index + 1 }}.</span>
                @if ($site->logo_emoji)
                    <span class="text-lg w-6 text-center leading-none">{{ $site->logo_emoji }}</span>
                @else
                    <span class="w-6 h-6 rounded-full bg-ifsa-bg border border-ifsa-border flex items-center justify-center text-[10px] font-bold text-ifsa-muted">
                        {{ mb_substr($site->name, 0, 1) }}
                    </span>
                @endif
                <a href="{{ route('site.show', $site->slug) }}"
                   class="flex-1 text-sm font-medium text-ifsa-ink hover:text-ifsa-orange truncate">
                    {{ $site->name }}
                </a>
                @foreach ($site->badges as $badge)
                    <span class="badge {{ $badge['class'] }}">{{ $badge['label'] }}</span>
                @endforeach
            </li>
        @endforeach
    </ol>

    @if ($remaining > 0)
        <a href="{{ url('/kategori/'.$category->slug) }}"
           class="btn-more"
           style="background-color: {{ $category->accent_color }};">
            {{ $remaining }} {{ $category->button_label }} →
        </a>
    @endif
</div>

<div>
    @section('page_title', 'Siteler')

    {{-- Filters --}}
    <div class="card p-4 mb-4 grid grid-cols-1 sm:grid-cols-[1fr_200px_180px_auto] gap-3">
        <input type="text" wire:model.live.debounce.300ms="search"
               class="rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm"
               placeholder="🔍 Site adı, URL veya slug ara...">
        <select wire:model.live="categoryFilter"
                class="rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm">
            <option value="">Tüm kategoriler</option>
            @foreach ($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
        <select wire:model.live="stateFilter"
                class="rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm">
            <option value="">Tüm durumlar</option>
            <option value="active">Sadece aktif</option>
            <option value="inactive">Sadece pasif</option>
            <option value="premium">Premium</option>
            <option value="ai">AI</option>
        </select>
        <a href="{{ route('admin.site.create') }}"
           class="inline-flex items-center justify-center px-4 py-2 rounded-lg bg-gradient-to-r from-ifsa-yellow via-ifsa-orange to-ifsa-red text-white font-bold text-sm shadow-sm hover:opacity-90">
            + Yeni Site
        </a>
    </div>

    {{-- Table --}}
    <div class="card overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-ifsa-bg/60 text-xs uppercase tracking-wider text-ifsa-muted">
                    <tr>
                        <th class="text-left px-4 py-3 font-bold">#</th>
                        <th class="text-left px-2 py-3 font-bold"></th>
                        <th class="text-left px-2 py-3 font-bold">Site</th>
                        <th class="text-left px-2 py-3 font-bold">Kategori</th>
                        <th class="text-left px-2 py-3 font-bold">URL</th>
                        <th class="text-center px-2 py-3 font-bold">Badge</th>
                        <th class="text-right px-2 py-3 font-bold">Tıklama</th>
                        <th class="text-center px-2 py-3 font-bold">Aktif</th>
                        <th class="text-right px-4 py-3 font-bold">İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($sites as $site)
                        <tr class="border-t border-ifsa-border hover:bg-ifsa-bg/40">
                            <td class="px-4 py-3 text-xs text-ifsa-muted tabular-nums">{{ $site->sort_order }}</td>
                            <td class="px-2 py-3 text-xl">{{ $site->logo_emoji ?: '🌐' }}</td>
                            <td class="px-2 py-3">
                                <a href="{{ route('admin.site.edit', $site) }}" class="font-semibold hover:text-ifsa-orange">
                                    {{ $site->name }}
                                </a>
                                <div class="text-xs text-ifsa-muted">{{ $site->slug }}</div>
                            </td>
                            <td class="px-2 py-3 text-xs">
                                <span class="inline-flex px-2 py-0.5 rounded bg-ifsa-bg border border-ifsa-border">
                                    {{ $site->category->name ?? '-' }}
                                </span>
                            </td>
                            <td class="px-2 py-3 text-xs text-ifsa-muted">
                                <a href="{{ $site->url }}" target="_blank" rel="noopener" class="hover:text-ifsa-orange">
                                    {{ Str::limit(parse_url($site->url, PHP_URL_HOST) ?: $site->url, 30) }} ↗
                                </a>
                            </td>
                            <td class="px-2 py-3 text-center">
                                <div class="inline-flex gap-1">
                                    @foreach ($site->badges as $b)
                                        <span class="badge {{ $b['class'] }}">{{ $b['label'] }}</span>
                                    @endforeach
                                </div>
                            </td>
                            <td class="px-2 py-3 text-right font-bold tabular-nums">{{ number_format($site->click_count) }}</td>
                            <td class="px-2 py-3 text-center">
                                <button wire:click="toggleActive({{ $site->id }})"
                                        class="inline-flex h-6 w-11 items-center rounded-full transition {{ $site->is_active ? 'bg-emerald-500' : 'bg-gray-300' }}">
                                    <span class="inline-block h-5 w-5 transform rounded-full bg-white shadow transition {{ $site->is_active ? 'translate-x-5' : 'translate-x-0.5' }}"></span>
                                </button>
                            </td>
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('admin.site.edit', $site) }}" class="text-ifsa-orange hover:underline text-xs font-semibold mr-2">Düzenle</a>
                                <a href="{{ route('site.show', $site->slug) }}" target="_blank" class="text-ifsa-muted hover:text-ifsa-orange text-xs mr-2">Görüntüle ↗</a>
                                <button wire:click="delete({{ $site->id }})"
                                        wire:confirm="“{{ $site->name }}” silinsin mi?"
                                        class="text-rose-600 hover:underline text-xs font-semibold">Sil</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="px-4 py-8 text-center text-ifsa-muted">Sonuç bulunamadı.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($sites->hasPages())
            <div class="border-t border-ifsa-border px-4 py-3">
                {{ $sites->links() }}
            </div>
        @endif
    </div>
</div>

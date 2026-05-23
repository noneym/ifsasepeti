<div>
    @section('page_title', 'Blog Yazıları')

    <div class="card p-4 mb-4 grid grid-cols-1 sm:grid-cols-[1fr_auto] gap-3">
        <input type="text" wire:model.live.debounce.300ms="search"
               class="rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm"
               placeholder="🔍 Başlık ara...">
        <a href="{{ route('admin.post.create') }}"
           class="inline-flex items-center justify-center px-4 py-2 rounded-lg bg-gradient-to-r from-ifsa-yellow via-ifsa-orange to-ifsa-red text-white font-bold text-sm shadow-sm hover:opacity-90">
            + Yeni Yazı
        </a>
    </div>

    <div class="card overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-ifsa-bg/60 text-xs uppercase tracking-wider text-ifsa-muted">
                <tr>
                    <th class="text-left px-4 py-3 font-bold">Başlık</th>
                    <th class="text-left px-2 py-3 font-bold">Yayın</th>
                    <th class="text-right px-2 py-3 font-bold">Okunma</th>
                    <th class="text-center px-2 py-3 font-bold">Yayında</th>
                    <th class="text-right px-4 py-3 font-bold">İşlemler</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $p)
                    <tr class="border-t border-ifsa-border hover:bg-ifsa-bg/40">
                        <td class="px-4 py-3">
                            <a href="{{ route('admin.post.edit', $p) }}" class="font-semibold hover:text-ifsa-orange">{{ $p->title }}</a>
                            <div class="text-xs text-ifsa-muted">{{ $p->slug }}</div>
                        </td>
                        <td class="px-2 py-3 text-xs text-ifsa-muted">
                            {{ optional($p->published_at)->format('d.m.Y') ?? 'Taslak' }}
                        </td>
                        <td class="px-2 py-3 text-right tabular-nums">{{ number_format($p->view_count) }}</td>
                        <td class="px-2 py-3 text-center">
                            <button wire:click="togglePublished({{ $p->id }})"
                                    class="inline-flex h-6 w-11 items-center rounded-full transition {{ $p->is_published ? 'bg-emerald-500' : 'bg-gray-300' }}">
                                <span class="inline-block h-5 w-5 transform rounded-full bg-white shadow transition {{ $p->is_published ? 'translate-x-5' : 'translate-x-0.5' }}"></span>
                            </button>
                        </td>
                        <td class="px-4 py-3 text-right">
                            <a href="{{ route('admin.post.edit', $p) }}" class="text-ifsa-orange hover:underline text-xs font-semibold mr-2">Düzenle</a>
                            @if ($p->is_published)
                                <a href="{{ $p->url }}" target="_blank" class="text-ifsa-muted hover:text-ifsa-orange text-xs mr-2">Aç ↗</a>
                            @endif
                            <button wire:click="delete({{ $p->id }})"
                                    wire:confirm="“{{ $p->title }}” silinsin mi?"
                                    class="text-rose-600 hover:underline text-xs font-semibold">Sil</button>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="px-4 py-8 text-center text-ifsa-muted">Henüz yazı yok.</td></tr>
                @endforelse
            </tbody>
        </table>
        @if ($posts->hasPages())
            <div class="border-t border-ifsa-border px-4 py-3">{{ $posts->links() }}</div>
        @endif
    </div>
</div>

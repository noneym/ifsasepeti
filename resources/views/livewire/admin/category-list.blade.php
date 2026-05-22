<div>
    @section('page_title', 'Kategoriler')

    <div class="flex items-center justify-between mb-4">
        <p class="text-sm text-ifsa-muted">Toplam {{ $categories->count() }} kategori</p>
        <a href="{{ route('admin.category.create') }}"
           class="inline-flex items-center px-4 py-2 rounded-lg bg-gradient-to-r from-ifsa-yellow via-ifsa-orange to-ifsa-red text-white font-bold text-sm shadow-sm hover:opacity-90">
            + Yeni Kategori
        </a>
    </div>

    <div class="card overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-ifsa-bg/60 text-xs uppercase tracking-wider text-ifsa-muted">
                <tr>
                    <th class="text-left px-4 py-3 font-bold w-12">#</th>
                    <th class="text-left px-2 py-3 font-bold">Ad</th>
                    <th class="text-left px-2 py-3 font-bold">Slug</th>
                    <th class="text-left px-2 py-3 font-bold w-20">Renk</th>
                    <th class="text-right px-2 py-3 font-bold">Site</th>
                    <th class="text-center px-2 py-3 font-bold">Aktif</th>
                    <th class="text-right px-4 py-3 font-bold">İşlemler</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $cat)
                    <tr class="border-t border-ifsa-border hover:bg-ifsa-bg/40">
                        <td class="px-4 py-3 text-xs text-ifsa-muted tabular-nums">{{ $cat->sort_order }}</td>
                        <td class="px-2 py-3">
                            <a href="{{ route('admin.category.edit', $cat) }}" class="font-semibold hover:text-ifsa-orange">
                                {{ $cat->name }}
                            </a>
                            @if ($cat->subtitle)
                                <div class="text-xs text-ifsa-muted">{{ Str::limit($cat->subtitle, 60) }}</div>
                            @endif
                        </td>
                        <td class="px-2 py-3 text-xs font-mono text-ifsa-muted">{{ $cat->slug }}</td>
                        <td class="px-2 py-3">
                            <span class="inline-block h-6 w-6 rounded border border-ifsa-border align-middle" style="background-color: {{ $cat->accent_color }};"></span>
                        </td>
                        <td class="px-2 py-3 text-right tabular-nums font-bold">{{ $cat->sites_count }}</td>
                        <td class="px-2 py-3 text-center">
                            <button wire:click="toggleActive({{ $cat->id }})"
                                    class="inline-flex h-6 w-11 items-center rounded-full transition {{ $cat->is_active ? 'bg-emerald-500' : 'bg-gray-300' }}">
                                <span class="inline-block h-5 w-5 transform rounded-full bg-white shadow transition {{ $cat->is_active ? 'translate-x-5' : 'translate-x-0.5' }}"></span>
                            </button>
                        </td>
                        <td class="px-4 py-3 text-right">
                            <a href="{{ route('admin.category.edit', $cat) }}" class="text-ifsa-orange hover:underline text-xs font-semibold mr-3">Düzenle</a>
                            <button wire:click="delete({{ $cat->id }})"
                                    wire:confirm="“{{ $cat->name }}” silinsin mi?"
                                    class="text-rose-600 hover:underline text-xs font-semibold">Sil</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

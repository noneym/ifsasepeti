<div>
    @section('page_title', 'Link Değişimleri')

    <div class="card p-4 mb-4 flex flex-wrap items-center gap-3">
        <span class="text-xs font-bold uppercase tracking-wider text-ifsa-muted">Filtre:</span>
        @foreach (['' => 'Tümü', 'pending' => 'Bekliyor', 'verified' => 'Onaylı', 'broken' => 'Kırık', 'rejected' => 'Reddedildi'] as $key => $label)
            <button wire:click="$set('statusFilter', '{{ $key }}')"
                    class="px-3 py-1.5 rounded-full text-xs font-bold border {{ $statusFilter === $key ? 'bg-ifsa-orange border-ifsa-orange text-white' : 'border-ifsa-border bg-white text-ifsa-ink hover:border-ifsa-orange' }}">
                {{ $label }}
            </button>
        @endforeach
    </div>

    <div class="card overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-ifsa-bg/60 text-xs uppercase tracking-wider text-ifsa-muted">
                    <tr>
                        <th class="text-left px-4 py-3 font-bold">Site</th>
                        <th class="text-left px-2 py-3 font-bold">URL</th>
                        <th class="text-left px-2 py-3 font-bold">Geri-link URL</th>
                        <th class="text-left px-2 py-3 font-bold">E-posta</th>
                        <th class="text-center px-2 py-3 font-bold">Durum</th>
                        <th class="text-right px-2 py-3 font-bold">Tarih</th>
                        <th class="text-right px-4 py-3 font-bold">İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($rows as $le)
                        <tr class="border-t border-ifsa-border hover:bg-ifsa-bg/40">
                            <td class="px-4 py-3">
                                <div class="font-semibold">{{ $le->partner_name }}</div>
                                @if ($le->notes)
                                    <div class="text-xs text-ifsa-muted mt-1">{{ Str::limit($le->notes, 80) }}</div>
                                @endif
                            </td>
                            <td class="px-2 py-3 text-xs">
                                <a href="{{ $le->partner_url }}" target="_blank" rel="noopener" class="text-ifsa-muted hover:text-ifsa-orange">
                                    {{ Str::limit(parse_url($le->partner_url, PHP_URL_HOST) ?: $le->partner_url, 25) }} ↗
                                </a>
                            </td>
                            <td class="px-2 py-3 text-xs">
                                @if ($le->partner_back_url)
                                    <a href="{{ $le->partner_back_url }}" target="_blank" rel="noopener" class="text-ifsa-muted hover:text-ifsa-orange">
                                        {{ Str::limit(parse_url($le->partner_back_url, PHP_URL_PATH) ?: $le->partner_back_url, 25) }} ↗
                                    </a>
                                @else
                                    <span class="text-ifsa-muted">-</span>
                                @endif
                            </td>
                            <td class="px-2 py-3 text-xs text-ifsa-muted">{{ $le->contact_email ?: '-' }}</td>
                            <td class="px-2 py-3 text-center">
                                @php
                                    $colors = ['pending' => ['amber-100', 'amber-700'], 'verified' => ['emerald-100', 'emerald-700'], 'broken' => ['rose-100', 'rose-700'], 'rejected' => ['gray-100', 'gray-700']];
                                    $bg = $colors[$le->status][0] ?? 'gray-100';
                                    $fg = $colors[$le->status][1] ?? 'gray-700';
                                @endphp
                                <span class="inline-flex px-2 py-0.5 rounded text-[10px] font-bold bg-{{ $bg }} text-{{ $fg }}">
                                    {{ match($le->status) { 'pending' => 'BEKLİYOR', 'verified' => 'ONAYLI', 'broken' => 'KIRIK', 'rejected' => 'RED', default => $le->status } }}
                                </span>
                            </td>
                            <td class="px-2 py-3 text-right text-xs text-ifsa-muted">{{ $le->created_at->diffForHumans() }}</td>
                            <td class="px-4 py-3 text-right whitespace-nowrap">
                                @if ($le->status === 'pending')
                                    <button wire:click="approve({{ $le->id }})" class="text-emerald-600 hover:underline text-xs font-semibold mr-2">Onayla</button>
                                    <button wire:click="reject({{ $le->id }})" class="text-rose-600 hover:underline text-xs font-semibold mr-2">Reddet</button>
                                @endif
                                @if ($le->status === 'verified')
                                    <button wire:click="markBroken({{ $le->id }})" class="text-amber-600 hover:underline text-xs font-semibold mr-2">Kırık işaretle</button>
                                @endif
                                <button wire:click="delete({{ $le->id }})"
                                        wire:confirm="Bu başvuru silinsin mi?"
                                        class="text-rose-600 hover:underline text-xs font-semibold">Sil</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 py-8 text-center text-ifsa-muted">Sonuç bulunamadı.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if ($rows->hasPages())
            <div class="border-t border-ifsa-border px-4 py-3">{{ $rows->links() }}</div>
        @endif
    </div>
</div>

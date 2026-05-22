<div>
    @section('page_title', 'Dashboard')

    {{-- Stat cards --}}
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        @foreach ([
            ['Toplam Site', $siteCount, '🗂️', 'text-blue-600', route('admin.sites')],
            ['Aktif Site', $activeSiteCount, '✅', 'text-emerald-600', route('admin.sites')],
            ['Kategori', $categoryCount, '🏷️', 'text-violet-600', route('admin.categories')],
            ['Bekleyen Link', $pendingExchanges, '🔗', 'text-amber-600', route('admin.link-exchanges')],
        ] as [$label, $value, $icon, $color, $href])
            <a href="{{ $href }}" class="card p-4 hover:border-ifsa-orange transition">
                <div class="flex items-start justify-between mb-2">
                    <span class="text-xs font-bold uppercase tracking-wider text-ifsa-muted">{{ $label }}</span>
                    <span class="text-xl">{{ $icon }}</span>
                </div>
                <div class="font-display font-extrabold text-3xl {{ $color }}">{{ number_format($value) }}</div>
            </a>
        @endforeach
    </div>

    {{-- Clicks summary --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-6">
        <div class="card p-5 lg:col-span-1">
            <h2 class="text-xs font-bold uppercase tracking-wider text-ifsa-muted mb-3">Tıklama Özeti</h2>
            <div class="space-y-3">
                <div class="flex items-center justify-between">
                    <span class="text-sm text-ifsa-muted">Bugün</span>
                    <span class="font-display font-extrabold text-2xl text-ifsa-orange">{{ number_format($clicksToday) }}</span>
                </div>
                <div class="flex items-center justify-between border-t border-ifsa-border pt-3">
                    <span class="text-sm text-ifsa-muted">Toplam (kümülatif)</span>
                    <span class="font-display font-extrabold text-2xl">{{ number_format($totalClicks) }}</span>
                </div>
            </div>
        </div>

        <div class="card p-5 lg:col-span-2">
            <h2 class="text-xs font-bold uppercase tracking-wider text-ifsa-muted mb-3">En Çok Tıklanan Siteler</h2>
            @if ($topSites->count())
                <ol class="space-y-1 text-sm">
                    @foreach ($topSites as $i => $s)
                        <li class="flex items-center gap-3 py-1.5 border-b border-ifsa-border last:border-0">
                            <span class="w-6 text-right text-xs text-ifsa-muted tabular-nums">{{ $i + 1 }}.</span>
                            <span class="text-lg w-7">{{ $s->logo_emoji ?: '🌐' }}</span>
                            <a href="{{ route('admin.site.edit', $s) }}" class="flex-1 font-semibold hover:text-ifsa-orange truncate">{{ $s->name }}</a>
                            <span class="text-xs text-ifsa-muted">{{ $s->category->name ?? '' }}</span>
                            <span class="font-bold text-ifsa-orange tabular-nums">{{ number_format($s->click_count) }}</span>
                        </li>
                    @endforeach
                </ol>
            @else
                <p class="text-sm text-ifsa-muted">Henüz tıklama yok.</p>
            @endif
        </div>
    </div>

    {{-- Recent link exchanges --}}
    <div class="card p-5">
        <div class="flex items-center justify-between mb-3">
            <h2 class="text-xs font-bold uppercase tracking-wider text-ifsa-muted">Son Link Değişimi Başvuruları</h2>
            <a href="{{ route('admin.link-exchanges') }}" class="text-xs font-semibold text-ifsa-orange hover:underline">Tümünü gör →</a>
        </div>
        @if ($recentExchanges->count())
            <table class="w-full text-sm">
                <thead class="text-xs uppercase tracking-wider text-ifsa-muted">
                    <tr class="border-b border-ifsa-border">
                        <th class="text-left pb-2 font-bold">Site</th>
                        <th class="text-left pb-2 font-bold">URL</th>
                        <th class="text-left pb-2 font-bold">Durum</th>
                        <th class="text-right pb-2 font-bold">Tarih</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recentExchanges as $le)
                        <tr class="border-b border-ifsa-border last:border-0">
                            <td class="py-2 font-semibold">{{ $le->partner_name }}</td>
                            <td class="py-2 text-ifsa-muted truncate max-w-xs">{{ $le->partner_url }}</td>
                            <td class="py-2">
                                @php
                                    $statusColors = ['pending' => 'amber', 'verified' => 'emerald', 'broken' => 'rose', 'rejected' => 'gray'];
                                    $c = $statusColors[$le->status] ?? 'gray';
                                @endphp
                                <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-bold bg-{{ $c }}-100 text-{{ $c }}-700">
                                    {{ match($le->status) { 'pending' => 'Bekliyor', 'verified' => 'Onaylı', 'broken' => 'Kırık', 'rejected' => 'Reddedildi', default => $le->status } }}
                                </span>
                            </td>
                            <td class="py-2 text-right text-xs text-ifsa-muted">{{ $le->created_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-sm text-ifsa-muted">Henüz başvuru yok.</p>
        @endif
    </div>
</div>

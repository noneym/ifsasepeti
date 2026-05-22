<div>
    @section('page_title', $site && $site->exists ? 'Site Düzenle: '.$site->name : 'Yeni Site')

    <form wire:submit="save" class="space-y-5 max-w-5xl">

        <div class="flex items-center gap-2 mb-1 text-xs text-ifsa-muted">
            <a href="{{ route('admin.sites') }}" class="hover:text-ifsa-orange">← Sitelere dön</a>
            @if ($site && $site->exists)
                <span>·</span>
                <a href="{{ route('site.show', $site->slug) }}" target="_blank" class="hover:text-ifsa-orange">Site sayfasını aç ↗</a>
            @endif
        </div>

        {{-- Temel bilgiler --}}
        <div class="card p-5">
            <h2 class="text-xs font-bold uppercase tracking-wider text-ifsa-muted mb-4">Temel Bilgiler</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold mb-1.5">Kategori *</label>
                    <select wire:model="category_id" class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm">
                        <option value="">- Seçin -</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id') <p class="text-rose-600 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="block text-xs font-bold mb-1.5">Site adı *</label>
                    <input wire:model="name" class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm">
                    @error('name') <p class="text-rose-600 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="block text-xs font-bold mb-1.5">Slug (boş bırakırsanız otomatik üretilir)</label>
                    <input wire:model="slug" class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm font-mono">
                    @error('slug') <p class="text-rose-600 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="block text-xs font-bold mb-1.5">Site URL *</label>
                    <input wire:model="url" type="url" class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm">
                    @error('url') <p class="text-rose-600 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
                <div class="sm:col-span-2">
                    <label class="block text-xs font-bold mb-1.5">Tag-line (tek satır özet)</label>
                    <input wire:model="tagline" class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm">
                </div>
            </div>
        </div>

        {{-- Görsel --}}
        <div class="card p-5">
            <h2 class="text-xs font-bold uppercase tracking-wider text-ifsa-muted mb-4">Görsel</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div>
                    <label class="block text-xs font-bold mb-1.5">Logo emoji</label>
                    <input wire:model="logo_emoji" maxlength="16" class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-2xl text-center">
                </div>
                <div>
                    <label class="block text-xs font-bold mb-1.5">Logo dosyası</label>
                    @if ($existing_logo_path)
                        <img src="{{ \Storage::disk(config('filesystems.default'))->url($existing_logo_path) }}" class="h-12 w-12 rounded mb-2 object-cover bg-ifsa-bg">
                    @endif
                    <input type="file" wire:model="logo_upload" accept="image/*"
                           class="w-full text-xs file:mr-2 file:py-1.5 file:px-3 file:rounded file:border-0 file:bg-ifsa-bg file:text-xs file:font-semibold">
                    <div wire:loading wire:target="logo_upload" class="text-xs text-ifsa-muted mt-1">Yükleniyor...</div>
                </div>
                <div>
                    <label class="block text-xs font-bold mb-1.5">Ekran görüntüsü (boşsa thum.io üretir)</label>
                    @if ($existing_screenshot_path)
                        <img src="{{ \Storage::disk(config('filesystems.default'))->url($existing_screenshot_path) }}" class="h-12 w-20 rounded mb-2 object-cover bg-ifsa-bg">
                    @endif
                    <input type="file" wire:model="screenshot_upload" accept="image/*"
                           class="w-full text-xs file:mr-2 file:py-1.5 file:px-3 file:rounded file:border-0 file:bg-ifsa-bg file:text-xs file:font-semibold">
                    <div wire:loading wire:target="screenshot_upload" class="text-xs text-ifsa-muted mt-1">Yükleniyor...</div>
                </div>
            </div>
        </div>

        {{-- İnceleme --}}
        <div class="card p-5">
            <h2 class="text-xs font-bold uppercase tracking-wider text-ifsa-muted mb-4">İnceleme</h2>
            <div class="space-y-4">
                <div>
                    <label class="block text-xs font-bold mb-1.5">Kısa açıklama (kart altı)</label>
                    <textarea wire:model="description" rows="2" class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm"></textarea>
                </div>
                <div>
                    <label class="block text-xs font-bold mb-1.5">Uzun inceleme</label>
                    <textarea wire:model="review_long" rows="8" class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm"></textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold mb-1.5 text-emerald-700">✓ Artıları</label>
                        <ul class="space-y-1 mb-2">
                            @foreach ($pros as $i => $pro)
                                <li class="flex items-center gap-2 bg-emerald-50 border border-emerald-200 rounded-lg px-3 py-1.5">
                                    <span class="text-emerald-600">✓</span>
                                    <span class="flex-1 text-sm">{{ $pro }}</span>
                                    <button type="button" wire:click="removePro({{ $i }})" class="text-rose-600 text-xs">×</button>
                                </li>
                            @endforeach
                        </ul>
                        <div class="flex gap-2">
                            <input wire:model="newPro" wire:keydown.enter.prevent="addPro"
                                   placeholder="Yeni artı..."
                                   class="flex-1 rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm">
                            <button type="button" wire:click="addPro" class="px-3 py-1.5 rounded-lg bg-emerald-500 text-white text-xs font-bold hover:bg-emerald-600">Ekle</button>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold mb-1.5 text-rose-700">✗ Eksileri</label>
                        <ul class="space-y-1 mb-2">
                            @foreach ($cons as $i => $con)
                                <li class="flex items-center gap-2 bg-rose-50 border border-rose-200 rounded-lg px-3 py-1.5">
                                    <span class="text-rose-600">✗</span>
                                    <span class="flex-1 text-sm">{{ $con }}</span>
                                    <button type="button" wire:click="removeCon({{ $i }})" class="text-rose-600 text-xs">×</button>
                                </li>
                            @endforeach
                        </ul>
                        <div class="flex gap-2">
                            <input wire:model="newCon" wire:keydown.enter.prevent="addCon"
                                   placeholder="Yeni eksi..."
                                   class="flex-1 rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm">
                            <button type="button" wire:click="addCon" class="px-3 py-1.5 rounded-lg bg-rose-500 text-white text-xs font-bold hover:bg-rose-600">Ekle</button>
                        </div>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold mb-1.5">Puan (0–5)</label>
                    <input wire:model="rating" type="number" step="0.1" min="0" max="5"
                           class="w-32 rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm">
                </div>
            </div>
        </div>

        {{-- Badge & durum --}}
        <div class="card p-5">
            <h2 class="text-xs font-bold uppercase tracking-wider text-ifsa-muted mb-4">Badge'ler & Durum</h2>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                @foreach ([
                    'is_active' => 'Aktif',
                    'is_featured' => 'Öne çıkar',
                    'is_new' => 'New',
                    'is_ai' => 'AI',
                    'is_premium' => 'Premium',
                    'is_sale' => 'Sale',
                ] as $key => $label)
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" wire:model="{{ $key }}" class="rounded border-ifsa-border text-ifsa-orange focus:ring-ifsa-orange/30">
                        <span class="text-sm">{{ $label }}</span>
                    </label>
                @endforeach
                <div class="col-span-2 sm:col-span-4">
                    <label class="block text-xs font-bold mb-1.5">Sıralama</label>
                    <input wire:model="sort_order" type="number"
                           class="w-32 rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm">
                </div>
            </div>
        </div>

        {{-- SEO --}}
        <details class="card p-5">
            <summary class="cursor-pointer text-xs font-bold uppercase tracking-wider text-ifsa-muted">SEO (opsiyonel)</summary>
            <div class="space-y-3 mt-4">
                <div>
                    <label class="block text-xs font-bold mb-1.5">Meta title</label>
                    <input wire:model="meta_title" class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm">
                </div>
                <div>
                    <label class="block text-xs font-bold mb-1.5">Meta description</label>
                    <textarea wire:model="meta_description" rows="2" class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm"></textarea>
                </div>
            </div>
        </details>

        {{-- Actions --}}
        <div class="flex items-center justify-between gap-3 sticky bottom-0 bg-ifsa-bg py-3">
            @if ($site && $site->exists)
                <button type="button" wire:click="delete" wire:confirm="“{{ $site->name }}” silinsin mi?"
                        class="px-4 py-2.5 rounded-lg bg-rose-100 text-rose-700 font-semibold text-sm hover:bg-rose-200">
                    Sil
                </button>
            @else
                <span></span>
            @endif
            <div class="flex items-center gap-2">
                <a href="{{ route('admin.sites') }}" class="px-4 py-2.5 rounded-lg border border-ifsa-border text-sm font-semibold hover:bg-white">İptal</a>
                <button type="submit"
                        class="px-6 py-2.5 rounded-lg bg-gradient-to-r from-ifsa-yellow via-ifsa-orange to-ifsa-red text-white font-bold text-sm shadow hover:opacity-90">
                    <span wire:loading.remove wire:target="save">Kaydet</span>
                    <span wire:loading wire:target="save">Kaydediliyor...</span>
                </button>
            </div>
        </div>
    </form>
</div>

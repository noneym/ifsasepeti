<div>
    @section('page_title', $category && $category->exists ? 'Kategori Düzenle: '.$category->name : 'Yeni Kategori')

    <form wire:submit="save" class="space-y-5 max-w-3xl">
        <div class="text-xs text-ifsa-muted mb-1">
            <a href="{{ route('admin.categories') }}" class="hover:text-ifsa-orange">← Kategorilere dön</a>
        </div>

        <div class="card p-5 space-y-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold mb-1.5">Ad *</label>
                    <input wire:model="name" class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm">
                    @error('name') <p class="text-rose-600 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="block text-xs font-bold mb-1.5">Slug</label>
                    <input wire:model="slug" class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm font-mono">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold mb-1.5">Alt başlık (kartta gösterilir)</label>
                <input wire:model="subtitle" class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm">
            </div>

            <div>
                <label class="block text-xs font-bold mb-1.5">Uzun açıklama (kategori sayfası SEO)</label>
                <textarea wire:model="description" rows="4" class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm"></textarea>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div>
                    <label class="block text-xs font-bold mb-1.5">İkon</label>
                    <select wire:model="icon" class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm">
                        @foreach ($iconOptions as $key => $label)
                            <option value="{{ $key }}">{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-bold mb-1.5">Vurgu rengi</label>
                    <div class="flex gap-2">
                        <input wire:model.live="accent_color" type="color" class="h-10 w-12 rounded border-ifsa-border">
                        <input wire:model="accent_color" type="text" class="flex-1 rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm font-mono">
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-bold mb-1.5">Buton metni</label>
                    <input wire:model="button_label" class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold mb-1.5">Sıralama</label>
                    <input wire:model="sort_order" type="number" class="w-32 rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm">
                </div>
                <label class="flex items-center gap-2 mt-7 cursor-pointer">
                    <input type="checkbox" wire:model="is_active" class="rounded border-ifsa-border text-ifsa-orange focus:ring-ifsa-orange/30">
                    <span class="text-sm font-semibold">Aktif</span>
                </label>
            </div>
        </div>

        <div class="flex items-center justify-end gap-2 sticky bottom-0 bg-ifsa-bg py-3">
            <a href="{{ route('admin.categories') }}" class="px-4 py-2.5 rounded-lg border border-ifsa-border text-sm font-semibold hover:bg-white">İptal</a>
            <button type="submit"
                    class="px-6 py-2.5 rounded-lg bg-gradient-to-r from-ifsa-yellow via-ifsa-orange to-ifsa-red text-white font-bold text-sm shadow hover:opacity-90">
                <span wire:loading.remove wire:target="save">Kaydet</span>
                <span wire:loading wire:target="save">Kaydediliyor...</span>
            </button>
        </div>
    </form>
</div>

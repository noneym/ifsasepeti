<div>
    @section('page_title', $post && $post->exists ? 'Yazı Düzenle: '.$post->title : 'Yeni Yazı')

    <form wire:submit="save" class="space-y-5 max-w-4xl">
        <div class="text-xs text-ifsa-muted mb-1">
            <a href="{{ route('admin.posts') }}" class="hover:text-ifsa-orange">← Yazılara dön</a>
            @if ($post && $post->exists && $post->is_published)
                <span>·</span>
                <a href="{{ $post->url }}" target="_blank" class="hover:text-ifsa-orange">Yayınlanmış sayfayı aç ↗</a>
            @endif
        </div>

        <div class="card p-5 space-y-4">
            <div>
                <label class="block text-xs font-bold mb-1.5">Başlık *</label>
                <input wire:model="title" class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-base font-semibold">
                @error('title') <p class="text-rose-600 text-xs mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-xs font-bold mb-1.5">Slug (boş bırakırsanız otomatik)</label>
                <input wire:model="slug" class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm font-mono">
            </div>
            <div>
                <label class="block text-xs font-bold mb-1.5">Özet (excerpt, listede gösterilir)</label>
                <textarea wire:model="excerpt" rows="3" class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm"></textarea>
            </div>
        </div>

        <div class="card p-5">
            <label class="block text-xs font-bold mb-1.5">Kapak görseli</label>
            @if ($existing_cover_path)
                <img src="{{ \Storage::disk(config('filesystems.default'))->url($existing_cover_path) }}" class="h-32 rounded mb-3 object-cover bg-ifsa-bg">
            @endif
            <input type="file" wire:model="cover_upload" accept="image/*"
                   class="w-full text-xs file:mr-2 file:py-1.5 file:px-3 file:rounded file:border-0 file:bg-ifsa-bg file:text-xs file:font-semibold">
            <div wire:loading wire:target="cover_upload" class="text-xs text-ifsa-muted mt-1">Yükleniyor...</div>
        </div>

        <div class="card p-5">
            <label class="block text-xs font-bold mb-1.5">Gövde (Markdown veya HTML)</label>
            <textarea wire:model="body" rows="18" class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm font-mono"></textarea>
            <p class="text-xs text-ifsa-muted mt-1">
                Markdown: <code>## Başlık</code>, <code>**kalın**</code>, <code>- madde</code>,
                <code>[link](https://...)</code>, <code>---</code> (ayraç). HTML de kullanabilirsiniz.
            </p>
        </div>

        <div class="card p-5">
            <label class="block text-xs font-bold mb-1.5">Etiketler</label>
            <ul class="flex flex-wrap gap-2 mb-2">
                @foreach ($tags as $i => $tag)
                    <li class="inline-flex items-center gap-1.5 bg-ifsa-orange/10 text-ifsa-orange rounded-full px-3 py-1 text-xs font-bold">
                        {{ $tag }}
                        <button type="button" wire:click="removeTag({{ $i }})">×</button>
                    </li>
                @endforeach
            </ul>
            <div class="flex gap-2">
                <input wire:model="newTag" wire:keydown.enter.prevent="addTag"
                       placeholder="Yeni etiket..."
                       class="flex-1 rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm">
                <button type="button" wire:click="addTag" class="px-3 py-1.5 rounded-lg bg-ifsa-orange text-white text-xs font-bold">Ekle</button>
            </div>
        </div>

        <details class="card p-5">
            <summary class="cursor-pointer text-xs font-bold uppercase tracking-wider text-ifsa-muted">SEO</summary>
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

        <div class="card p-5 flex flex-wrap gap-4">
            <label class="flex items-center gap-2 cursor-pointer">
                <input type="checkbox" wire:model="is_published" class="rounded border-ifsa-border text-ifsa-orange focus:ring-ifsa-orange/30">
                <span class="text-sm font-semibold">Yayında</span>
            </label>
            <label class="flex items-center gap-2 cursor-pointer">
                <input type="checkbox" wire:model="is_featured" class="rounded border-ifsa-border text-ifsa-orange focus:ring-ifsa-orange/30">
                <span class="text-sm font-semibold">Öne çıkar</span>
            </label>
        </div>

        <div class="flex items-center justify-between gap-3 sticky bottom-0 bg-ifsa-bg py-3">
            @if ($post && $post->exists)
                <button type="button" wire:click="delete" wire:confirm="“{{ $post->title }}” silinsin mi?"
                        class="px-4 py-2.5 rounded-lg bg-rose-100 text-rose-700 font-semibold text-sm hover:bg-rose-200">
                    Sil
                </button>
            @else
                <span></span>
            @endif
            <div class="flex items-center gap-2">
                <a href="{{ route('admin.posts') }}" class="px-4 py-2.5 rounded-lg border border-ifsa-border text-sm font-semibold hover:bg-white">İptal</a>
                <button type="submit" class="px-6 py-2.5 rounded-lg bg-gradient-to-r from-ifsa-yellow via-ifsa-orange to-ifsa-red text-white font-bold text-sm shadow hover:opacity-90">
                    <span wire:loading.remove wire:target="save">Kaydet</span>
                    <span wire:loading wire:target="save">Kaydediliyor...</span>
                </button>
            </div>
        </div>
    </form>
</div>

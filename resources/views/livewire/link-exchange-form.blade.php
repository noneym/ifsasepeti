<div class="card p-5 sm:p-7">
    @if ($submitted)
        <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-5 text-emerald-800">
            <h3 class="font-bold text-lg mb-1">✓ Başvurunuz alındı</h3>
            <p class="text-sm">
                Link değişimi başvurunuz değerlendirme kuyruğuna eklendi. 3-7 iş günü içinde
                <strong>{{ old('contact_email') ?: 'partner@ifsasepeti.com' }}</strong> üzerinden size dönüş yapacağız.
            </p>
            <button wire:click="$set('submitted', false)" class="mt-3 text-sm font-semibold text-emerald-700 underline">
                Yeni başvuru gönder
            </button>
        </div>
    @else
        <form wire:submit="submit" class="space-y-4">
            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-ifsa-muted mb-1.5">Site adı *</label>
                <input type="text" wire:model="partner_name"
                       class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm"
                       placeholder="Örn. Türk Erotik Tube" required>
                @error('partner_name') <p class="text-rose-600 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-ifsa-muted mb-1.5">Site URL'si *</label>
                <input type="url" wire:model="partner_url"
                       class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm"
                       placeholder="https://siteniz.com" required>
                @error('partner_url') <p class="text-rose-600 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-ifsa-muted mb-1.5">Bizim linkimizin yerleştirildiği URL</label>
                <input type="url" wire:model="partner_back_url"
                       class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm"
                       placeholder="https://siteniz.com/partnerler">
                <p class="text-xs text-ifsa-muted mt-1">Sitenizdeki "ifsasepeti.com" linkini içeren sayfanın tam URL'si</p>
                @error('partner_back_url') <p class="text-rose-600 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-ifsa-muted mb-1.5">İletişim e-postası</label>
                <input type="email" wire:model="contact_email"
                       class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm"
                       placeholder="iletisim@siteniz.com">
                @error('contact_email') <p class="text-rose-600 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-ifsa-muted mb-1.5">Kısa açıklama</label>
                <textarea wire:model="notes" rows="4"
                          class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm"
                          placeholder="Sitenizin türü, hedef kitlesi, hangi kategoride listelenmesini istediğiniz..."></textarea>
                @error('notes') <p class="text-rose-600 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <button type="submit"
                    class="w-full py-3 rounded-xl bg-gradient-to-r from-ifsa-yellow via-ifsa-orange to-ifsa-red text-white font-bold text-sm uppercase tracking-wider shadow-md hover:opacity-90 transition">
                <span wire:loading.remove wire:target="submit">Başvuruyu Gönder</span>
                <span wire:loading wire:target="submit">Gönderiliyor...</span>
            </button>
        </form>
    @endif
</div>

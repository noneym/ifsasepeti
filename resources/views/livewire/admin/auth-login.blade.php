<div class="min-h-screen flex items-center justify-center px-4 py-10">
    <div class="w-full max-w-md">
        <div class="flex items-center justify-center gap-3 mb-8">
            <span class="relative inline-flex items-center justify-center h-14 w-14">
                <span class="absolute inset-0 rounded-2xl bg-gradient-to-br from-ifsa-yellow via-ifsa-orange to-ifsa-red rotate-[-6deg]"></span>
                <img src="{{ asset('img/logo-mark.png') }}" class="relative h-12 w-12 object-contain">
            </span>
            <span class="font-display font-extrabold text-2xl leading-none">
                ifsa<span class="text-ifsa-orange">sepeti</span>
            </span>
        </div>

        <div class="card p-6 sm:p-8">
            <h1 class="font-display font-extrabold text-xl mb-1">Yönetim Girişi</h1>
            <p class="text-sm text-ifsa-muted mb-6">Yetkili kullanıcılar için.</p>

            <form wire:submit="login" class="space-y-4">
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-ifsa-muted mb-1.5">E-posta</label>
                    <input type="email" wire:model="email" autofocus
                           class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm"
                           placeholder="admin@ifsasepeti.com">
                    @error('email') <p class="text-rose-600 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-ifsa-muted mb-1.5">Şifre</label>
                    <input type="password" wire:model="password"
                           class="w-full rounded-lg border-ifsa-border focus:border-ifsa-orange focus:ring-ifsa-orange/30 text-sm">
                    @error('password') <p class="text-rose-600 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <label class="inline-flex items-center gap-2 text-sm">
                    <input type="checkbox" wire:model="remember" class="rounded border-ifsa-border text-ifsa-orange focus:ring-ifsa-orange/30">
                    <span>Beni hatırla</span>
                </label>

                <button type="submit"
                        class="w-full py-3 rounded-xl bg-gradient-to-r from-ifsa-yellow via-ifsa-orange to-ifsa-red text-white font-bold text-sm uppercase tracking-wider shadow-md hover:opacity-90 transition">
                    <span wire:loading.remove wire:target="login">Giriş Yap</span>
                    <span wire:loading wire:target="login">Doğrulanıyor...</span>
                </button>
            </form>
        </div>

        <p class="text-center text-xs text-ifsa-muted mt-4">
            <a href="{{ url('/') }}" class="hover:text-ifsa-orange">← Siteye dön</a>
        </p>
    </div>
</div>

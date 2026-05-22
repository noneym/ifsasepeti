<header class="relative">
    {{-- Top notice bar --}}
    <div class="bg-ifsa-bg/60 border-b border-ifsa-border/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2 text-center text-[12px] text-ifsa-muted">
            <span class="font-medium text-ifsa-ink">ifsasepeti.com</span> en iyi (Türk) yetişkin sitelerini inceliyor. Tüm ücretsiz ve premium siteler kalitelerine göre sıralanmıştır.
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-2">
        {{-- Row 1: logo (left) + meta (center) + mascot (right) --}}
        <div class="flex items-start justify-between gap-4">
            {{-- Logo left (porndude-style text logo) --}}
            <a href="{{ url('/') }}" class="flex-shrink-0 group inline-flex items-center select-none">
                <span class="font-display font-extrabold leading-none">
                    <span class="text-3xl sm:text-4xl md:text-5xl bg-clip-text text-transparent bg-gradient-to-br from-ifsa-yellow via-ifsa-orange to-ifsa-red drop-shadow-sm tracking-tight">
                        ifsa
                    </span><span class="text-3xl sm:text-4xl md:text-5xl text-ifsa-ink tracking-tight">SEPETİ</span><span class="text-sm sm:text-base md:text-lg text-ifsa-muted font-bold align-top ml-0.5">.com</span>
                </span>
            </a>

            {{-- Center meta --}}
            <div class="hidden md:flex flex-col items-center gap-2 pt-3 text-xs text-ifsa-muted">
                <span>Güncellenme tarihi {{ now()->translatedFormat('d M Y') }}</span>
                <div class="flex items-center gap-2">
                    <a href="#" class="h-9 w-9 rounded-full bg-ifsa-card border border-ifsa-border flex items-center justify-center hover:border-ifsa-orange transition" title="Profil">
                        <span class="text-base">👤</span>
                    </a>
                    <a href="mailto:info@ifsasepeti.com" class="h-9 w-9 rounded-full bg-ifsa-card border border-ifsa-border flex items-center justify-center hover:border-ifsa-orange transition" title="İletişim">
                        <span class="text-sm">✉</span>
                    </a>
                    <a href="{{ url('/link-degisimi') }}" class="h-9 w-9 rounded-full bg-ifsa-card border border-ifsa-border flex items-center justify-center hover:border-ifsa-orange transition" title="Link Değişimi">
                        <span class="text-base">🔗</span>
                    </a>
                    <a href="#" class="h-9 px-3 rounded-full bg-ifsa-card border border-ifsa-border flex items-center justify-center text-[10px] font-bold hover:border-ifsa-orange transition" title="Blog">
                        BLOG
                    </a>
                    <a href="#" class="h-9 w-9 rounded-full bg-ifsa-card border border-ifsa-border flex items-center justify-center hover:border-ifsa-orange transition" title="Mağaza">
                        🛍️
                    </a>
                    <button class="h-9 w-9 rounded-full bg-ifsa-card border border-ifsa-border flex items-center justify-center hover:border-ifsa-orange transition" title="Karanlık mod">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/></svg>
                    </button>
                </div>
            </div>

            {{-- Hero mascot right --}}
            <img src="{{ asset('img/hero-pezo.png') }}"
                 alt="Pezo - ifsasepeti maskotu"
                 class="hidden sm:block h-28 md:h-36 lg:h-44 w-auto -mb-2 -mr-2 select-none pointer-events-none drop-shadow-md">
        </div>

        {{-- Row 2: search bar --}}
        <div class="mt-3 max-w-xl">
            <form action="{{ url('/ara') }}" method="get" class="relative">
                <input type="text"
                       name="q"
                       placeholder="En iyi 1000+ porno sitesini ara..."
                       class="w-full rounded-full border border-ifsa-border bg-white px-5 py-2.5 pr-12 text-sm placeholder:text-ifsa-muted focus:border-ifsa-orange focus:ring-2 focus:ring-ifsa-orange/30 focus:outline-none">
                <button type="submit" class="absolute right-1.5 top-1/2 -translate-y-1/2 h-8 w-8 rounded-full bg-ifsa-orange text-white flex items-center justify-center hover:bg-ifsa-red transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </button>
            </form>
        </div>
    </div>
</header>

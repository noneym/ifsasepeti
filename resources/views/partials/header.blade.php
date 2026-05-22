<header class="relative">
    {{-- Top notice bar --}}
    <div class="bg-ifsa-bg/60 border-b border-ifsa-border/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2 text-center text-[12px] text-ifsa-muted">
            <span class="font-medium text-ifsa-ink">ifsasepeti.com</span> en iyi (Türk) yetişkin sitelerini inceliyor. Tüm ücretsiz ve premium siteler kalitelerine göre sıralanmıştır.
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-5 pb-2 relative">
        {{-- Row 1: logo (left) + meta (center) --}}
        <div class="flex items-start justify-between gap-4">
            {{-- Logo left --}}
            <a href="{{ url('/') }}" class="flex-shrink-0 group inline-flex items-center gap-3 select-none">
                {{-- Basket icon (sepet) --}}
                <span class="relative inline-flex items-center justify-center h-12 w-12 sm:h-14 sm:w-14 rounded-2xl bg-gradient-to-br from-ifsa-yellow via-ifsa-orange to-ifsa-red shadow-md rotate-[-6deg] group-hover:rotate-0 transition-transform">
                    <svg class="w-7 h-7 sm:w-8 sm:h-8 text-white drop-shadow" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M5.522 7H4a1 1 0 0 0 0 2h.39l1.214 10.114A2 2 0 0 0 7.59 21h8.82a2 2 0 0 0 1.987-1.886L19.61 9H20a1 1 0 1 0 0-2h-1.522L15.83 2.553a1 1 0 1 0-1.789.894L16.293 7H7.707l2.252-4.553a1 1 0 0 0-1.789-.894L5.522 7Zm3.978 5a1 1 0 1 1 2 0v4a1 1 0 1 1-2 0v-4Zm4 0a1 1 0 1 1 2 0v4a1 1 0 1 1-2 0v-4Z"/>
                    </svg>
                    {{-- Sparkle dot --}}
                    <span class="absolute -top-1 -right-1 h-3 w-3 rounded-full bg-white border-2 border-ifsa-red"></span>
                </span>
                <span class="font-display leading-[0.95]">
                    <span class="block text-[28px] sm:text-[34px] md:text-[40px] font-black tracking-tight">
                        <span class="bg-clip-text text-transparent bg-gradient-to-br from-ifsa-yellow via-ifsa-orange to-ifsa-red">ifsa</span><span class="text-ifsa-ink">sepeti</span><span class="text-ifsa-orange">.</span>
                    </span>
                    <span class="block text-[10px] sm:text-[11px] font-bold uppercase tracking-[0.22em] text-ifsa-muted mt-0.5">
                        en iyi yetişkin site dizini
                    </span>
                </span>
            </a>

            {{-- Center meta --}}
            <div class="hidden md:flex flex-col items-center gap-2 pt-2 text-xs text-ifsa-muted">
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
                    <button class="h-9 w-9 rounded-full bg-ifsa-card border border-ifsa-border flex items-center justify-center hover:border-ifsa-orange transition" title="Karanlık mod">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/></svg>
                    </button>
                </div>
            </div>

            {{-- Spacer to reserve room for the absolutely-positioned mascot --}}
            <div class="hidden lg:block w-44 flex-shrink-0" aria-hidden="true"></div>
        </div>

        {{-- Row 2: search bar --}}
        <div class="mt-4 max-w-xl">
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

        {{-- Hero mascot: positioned absolutely so it peeks down into the top-right card of the grid --}}
        <img src="{{ asset('img/hero-pezo.png') }}"
             alt="Pezo - ifsasepeti maskotu"
             class="hero-mascot hidden lg:block select-none pointer-events-none drop-shadow-2xl">
    </div>
</header>

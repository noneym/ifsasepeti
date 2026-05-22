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
                {{-- Mascot face badge --}}
                <span class="relative inline-flex items-center justify-center h-14 w-14 sm:h-16 sm:w-16 group-hover:rotate-0 rotate-[-6deg] transition-transform">
                    <span class="absolute inset-0 rounded-2xl bg-gradient-to-br from-ifsa-yellow via-ifsa-orange to-ifsa-red shadow-md"></span>
                    <img src="{{ asset('img/logo-mark.png') }}"
                         alt=""
                         class="relative h-12 w-12 sm:h-14 sm:w-14 object-contain drop-shadow"
                         loading="eager">
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

        {{-- Row 2: search bar (leaves ~7rem for mascot on mobile, fills available width up to xl on sm+) --}}
        <div class="mt-4 w-[calc(100%-7rem)] sm:w-auto sm:max-w-xl">
            <form action="{{ url('/ara') }}" method="get" class="relative">
                <input type="text"
                       name="q"
                       placeholder="Site ara..."
                       class="w-full rounded-full border border-ifsa-border bg-white px-5 py-2.5 pr-12 text-sm placeholder:text-ifsa-muted focus:border-ifsa-orange focus:ring-2 focus:ring-ifsa-orange/30 focus:outline-none">
                <button type="submit" class="absolute right-1.5 top-1/2 -translate-y-1/2 h-8 w-8 rounded-full bg-ifsa-orange text-white flex items-center justify-center hover:bg-ifsa-red transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </button>
            </form>
        </div>

        {{-- Hero mascot: top-right of header on mobile, peeks behind grid on lg+ --}}
        <img src="{{ asset('img/hero-pezo.png') }}"
             alt="Pezo - ifsasepeti maskotu"
             class="hero-mascot drop-shadow-2xl">
    </div>
</header>

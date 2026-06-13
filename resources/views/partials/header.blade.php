<header class="relative">
    {{-- Top notice bar --}}
    <div class="bg-ifsa-bg/60 border-b border-ifsa-border/60 dark:bg-slate-900/60 dark:border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2 text-center text-[12px] text-ifsa-muted dark:text-slate-400">
            <span class="font-medium text-ifsa-ink dark:text-slate-200">ifsasepeti.com</span> en iyi (Türk) yetişkin sitelerini inceliyor. Tüm ücretsiz ve premium siteler kalitelerine göre sıralanmıştır.
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
                        <span class="bg-clip-text text-transparent bg-gradient-to-br from-ifsa-yellow via-ifsa-orange to-ifsa-red">ifsa</span><span class="text-ifsa-ink dark:text-slate-100">sepeti</span><span class="text-ifsa-orange">.</span>
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
                    <a href="#" class="h-9 w-9 rounded-full bg-ifsa-card dark:bg-slate-800 border border-ifsa-border dark:border-slate-700 flex items-center justify-center hover:border-ifsa-orange transition" title="Profil">
                        <span class="text-base">👤</span>
                    </a>
                    <a href="{{ url('/iletisim') }}" class="h-9 w-9 rounded-full bg-ifsa-card dark:bg-slate-800 border border-ifsa-border dark:border-slate-700 flex items-center justify-center hover:border-ifsa-orange transition" title="İletişim">
                        <span class="text-sm">✉</span>
                    </a>
                    <a href="{{ url('/link-degisimi') }}" class="h-9 w-9 rounded-full bg-ifsa-card dark:bg-slate-800 border border-ifsa-border dark:border-slate-700 flex items-center justify-center hover:border-ifsa-orange transition" title="Link Değişimi">
                        <span class="text-base">🔗</span>
                    </a>
                    <a href="{{ url('/blog') }}" class="h-9 px-3 rounded-full bg-ifsa-card dark:bg-slate-800 border border-ifsa-border dark:border-slate-700 flex items-center justify-center text-[10px] font-bold hover:border-ifsa-orange transition" title="Blog">
                        BLOG
                    </a>
                    <button type="button"
                            onclick="(function(){var d=document.documentElement;var n=d.classList.toggle('dark');try{localStorage.setItem('theme',n?'dark':'light');}catch(e){}})()"
                            class="h-9 w-9 rounded-full bg-ifsa-card dark:bg-slate-800 border border-ifsa-border dark:border-slate-700 flex items-center justify-center hover:border-ifsa-orange transition"
                            title="Tema değiştir"
                            aria-label="Tema değiştir">
                        <svg class="w-4 h-4 dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/></svg>
                        <svg class="w-4 h-4 hidden dark:block text-amber-300" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"/></svg>
                    </button>
                </div>
            </div>

            {{-- Spacer to reserve room for the absolutely-positioned mascot --}}
            <div class="hidden md:block w-28 lg:w-44 flex-shrink-0" aria-hidden="true"></div>
        </div>

        {{-- Row 2: search bar (extends nearly full width; mascot peeks over the right edge) --}}
        <div class="mt-4 w-[calc(100%-3.5rem)] sm:w-[calc(100%-8rem)] md:w-[calc(100%-10rem)] lg:w-[calc(100%-12rem)]">
            <form action="{{ url('/ara') }}" method="get" class="relative">
                <input type="text"
                       name="q"
                       placeholder="Site ara..."
                       class="w-full rounded-full border border-ifsa-border bg-white px-5 py-2.5 pr-12 text-sm placeholder:text-ifsa-muted focus:border-ifsa-orange focus:ring-2 focus:ring-ifsa-orange/30 focus:outline-none
                              dark:bg-slate-900 dark:border-slate-700 dark:text-slate-100 dark:placeholder:text-slate-500">
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

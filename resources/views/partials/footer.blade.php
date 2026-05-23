<footer class="border-t border-ifsa-border bg-white mt-12 dark:bg-slate-900 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 grid grid-cols-1 md:grid-cols-4 gap-6 text-sm">
        <div class="md:col-span-2">
            <img src="{{ asset('img/logo.png') }}" alt="ifsasepeti.com" class="h-10 w-auto mb-3">
            <p class="text-ifsa-muted leading-relaxed dark:text-slate-400">
                ifsasepeti.com, dünyanın en iyi yetişkin sitelerini inceleyen ve sıralayan bir dizin platformudur.
                Yalnızca rıza temelli, yasal yetişkin içerik sunan platformları listeleriz. 18 yaşından küçüklerin
                erişimi yasaktır.
            </p>
        </div>
        <div>
            <h4 class="font-semibold mb-3 uppercase text-xs tracking-wider text-ifsa-ink dark:text-slate-200">Keşfet</h4>
            <ul class="space-y-2 text-ifsa-muted dark:text-slate-400">
                <li><a href="{{ url('/kategori/premium-porno') }}" class="hover:text-ifsa-orange">Premium Siteler</a></li>
                <li><a href="{{ url('/kategori/canli-kamera-siteleri') }}" class="hover:text-ifsa-orange">Canlı Kameralar</a></li>
                <li><a href="{{ url('/kategori/ai-porno-ureticileri') }}" class="hover:text-ifsa-orange">AI Üreticileri</a></li>
                <li><a href="{{ url('/kategori/turkce-porno') }}" class="hover:text-ifsa-orange">Türkçe Siteler</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-semibold mb-3 uppercase text-xs tracking-wider text-ifsa-ink dark:text-slate-200">Site</h4>
            <ul class="space-y-2 text-ifsa-muted dark:text-slate-400">
                <li><a href="{{ url('/iletisim') }}" class="hover:text-ifsa-orange">İletişim</a></li>
                <li><a href="{{ url('/link-degisimi') }}" class="hover:text-ifsa-orange">Link Değişimi</a></li>
                <li><a href="{{ url('/gizlilik') }}" class="hover:text-ifsa-orange">Gizlilik</a></li>
                <li><a href="{{ url('/sartlar') }}" class="hover:text-ifsa-orange">Şartlar</a></li>
                <li><a href="{{ url('/sikayet') }}" class="hover:text-rose-600">Şikayet & İhbar</a></li>
            </ul>
        </div>
    </div>
    <div class="border-t border-ifsa-border dark:border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 text-xs text-ifsa-muted flex flex-wrap items-center justify-between gap-2 dark:text-slate-500">
            <span>© {{ date('Y') }} ifsasepeti.com - Tüm hakları saklıdır.</span>
            <span>Bu site sadece 18+ kullanıcılar içindir.</span>
        </div>
    </div>
</footer>

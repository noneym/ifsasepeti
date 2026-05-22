@extends('layouts.app')
@section('title', 'İletişim - ifsasepeti.com')
@section('description', 'ifsasepeti.com iletişim bilgileri - link değişimi, reklam, telif ve genel sorular.')

@section('content')
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <nav class="text-xs text-ifsa-muted mb-4">
            <a href="{{ url('/') }}" class="hover:text-ifsa-orange">ifsasepeti</a>
            <span class="mx-1">›</span>
            <span class="text-ifsa-ink">İletişim</span>
        </nav>

        <h1 class="font-display font-extrabold text-3xl mb-2">İletişim</h1>
        <p class="text-ifsa-muted mb-8">Aşağıdaki uzman e-posta adreslerinden bize ulaşabilirsiniz. 24-72 saat içinde dönüş yapıyoruz.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <a href="mailto:info@ifsasepeti.com" class="card p-5 hover:border-ifsa-orange transition">
                <div class="text-2xl mb-2">📬</div>
                <h3 class="font-bold mb-1">Genel</h3>
                <p class="text-sm text-ifsa-muted mb-2">Soru, öneri ve geri bildirim</p>
                <span class="text-sm text-ifsa-orange font-semibold">info@ifsasepeti.com</span>
            </a>

            <a href="mailto:partner@ifsasepeti.com" class="card p-5 hover:border-ifsa-orange transition">
                <div class="text-2xl mb-2">🔗</div>
                <h3 class="font-bold mb-1">Link Değişimi</h3>
                <p class="text-sm text-ifsa-muted mb-2">Sitenizi dizinimize ekleyin</p>
                <span class="text-sm text-ifsa-orange font-semibold">partner@ifsasepeti.com</span>
            </a>

            <a href="mailto:reklam@ifsasepeti.com" class="card p-5 hover:border-ifsa-orange transition">
                <div class="text-2xl mb-2">📢</div>
                <h3 class="font-bold mb-1">Reklam & Sponsorluk</h3>
                <p class="text-sm text-ifsa-muted mb-2">Banner, öne çıkan liste, sponsor inceleme</p>
                <span class="text-sm text-ifsa-orange font-semibold">reklam@ifsasepeti.com</span>
            </a>

            <a href="mailto:dmca@ifsasepeti.com" class="card p-5 hover:border-ifsa-orange transition">
                <div class="text-2xl mb-2">⚖️</div>
                <h3 class="font-bold mb-1">DMCA / Telif</h3>
                <p class="text-sm text-ifsa-muted mb-2">Hak ihlali bildirimi ve kaldırma talebi</p>
                <span class="text-sm text-ifsa-orange font-semibold">dmca@ifsasepeti.com</span>
            </a>

            <a href="mailto:kvkk@ifsasepeti.com" class="card p-5 hover:border-ifsa-orange transition">
                <div class="text-2xl mb-2">🛡️</div>
                <h3 class="font-bold mb-1">KVKK / Gizlilik</h3>
                <p class="text-sm text-ifsa-muted mb-2">Veri silme ve haklar talebi</p>
                <span class="text-sm text-ifsa-orange font-semibold">kvkk@ifsasepeti.com</span>
            </a>

            <a href="mailto:sikayet@ifsasepeti.com" class="card p-5 hover:border-ifsa-orange transition border-rose-200">
                <div class="text-2xl mb-2">🚨</div>
                <h3 class="font-bold mb-1">Şikayet / Acil</h3>
                <p class="text-sm text-ifsa-muted mb-2">Uygunsuz/yasadışı içerik bildirimi</p>
                <span class="text-sm text-rose-600 font-semibold">sikayet@ifsasepeti.com</span>
            </a>
        </div>

        <div class="mt-8 p-5 bg-amber-50 border border-amber-200 rounded-xl text-sm">
            <strong class="text-amber-800">Hatırlatma:</strong> Listelediğimiz dış sitelerin içeriği ve hizmet
            kalitesiyle ilgili şikayetler için lütfen ilgili sitenin kendi iletişim kanalını kullanın. Biz sadece
            dizin platformuyuz, dış sitelerin operasyonel sorumluluğunu üstlenmiyoruz.
        </div>
    </div>
@endsection

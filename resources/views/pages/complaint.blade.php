@extends('layouts.app')
@section('title', 'Şikayet & İhbar - ifsasepeti.com')
@section('description', 'Uygunsuz veya yasadışı içerik bildirimi - ifsasepeti.com şikayet kanalı.')

@section('content')
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <nav class="text-xs text-ifsa-muted mb-4">
            <a href="{{ url('/') }}" class="hover:text-ifsa-orange">ifsasepeti</a>
            <span class="mx-1">›</span>
            <span class="text-ifsa-ink">Şikayet & İhbar</span>
        </nav>

        <h1 class="font-display font-extrabold text-3xl mb-3">Şikayet & İhbar</h1>

        <div class="bg-rose-50 border border-rose-200 rounded-xl p-5 mb-6">
            <h2 class="font-bold text-rose-800 mb-2">Acil durumlar için</h2>
            <p class="text-sm text-rose-900 leading-relaxed">
                Eğer rıza dışı paylaşılmış görsel (NCII / "ifşa"), 18 yaş altı kişilere ait içerik veya
                ciddi bir yasa ihlali tespit ettiyseniz lütfen
                <a href="mailto:sikayet@ifsasepeti.com" class="font-bold underline">sikayet@ifsasepeti.com</a>
                adresine derhal yazın. Bu tür içerikler en geç 24 saat içinde değerlendirilip kaldırılır.
            </p>
            <p class="text-sm text-rose-900 mt-2">
                Doğrudan yetkili makamlara ihbar için Türkiye'de <a href="https://www.ihbarweb.org.tr" target="_blank" rel="noopener" class="underline">İhbar Web (BTK)</a> ve
                <a href="https://www.guvenliweb.org.tr" target="_blank" rel="noopener" class="underline">Güvenli Web</a> hattını kullanabilirsiniz.
            </p>
        </div>

        <div class="prose prose-sm sm:prose max-w-none">
            <h2>Hangi durumlar şikayet konusudur?</h2>
            <ul>
                <li>Rıza dışı paylaşılan mahrem görseller (NCII)</li>
                <li>Reşit olmayan kişileri içeren her tür içerik</li>
                <li>Açık şiddet, istismar veya zorlama içeren materyal</li>
                <li>Telif hakkı ihlali (bu durumlar için
                    <a href="mailto:dmca@ifsasepeti.com">dmca@ifsasepeti.com</a>)</li>
                <li>Çalışmayan, sahte veya kötü amaçlı yazılım içeren listelenmiş bir site</li>
                <li>Sitemizdeki bir hata veya yanlış bilgi</li>
            </ul>

            <h2>Şikayetinizde lütfen şunları belirtin</h2>
            <ol>
                <li>İhlal eden içeriğin sitemizdeki tam URL'si</li>
                <li>İhlal türü (NCII, telif, sahte, vb.)</li>
                <li>İlgiliyseniz yetki belgeniz veya hak sahipliği beyanınız</li>
                <li>Sizinle iletişim kurabileceğimiz bir e-posta</li>
            </ol>

            <h2>Süreç ve gizlilik</h2>
            <p>
                Tüm şikayetler gizli tutulur ve yalnızca konuyu çözmek için gerekli kişilerle paylaşılır.
                NCII ve çocuk istismarı içerikleri tespit edildiği anda kaldırılır ve gerektiğinde
                yetkili makamlarla paylaşılır.
            </p>
        </div>
    </div>
@endsection

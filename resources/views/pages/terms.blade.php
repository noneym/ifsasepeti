@extends('layouts.app')
@section('title', 'Kullanım Şartları - ifsasepeti.com')
@section('description', 'ifsasepeti.com kullanım şartları, sorumluluk reddi ve 18+ uyarısı.')

@section('content')
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <nav class="text-xs text-ifsa-muted mb-4">
            <a href="{{ url('/') }}" class="hover:text-ifsa-orange">ifsasepeti</a>
            <span class="mx-1">›</span>
            <span class="text-ifsa-ink">Kullanım Şartları</span>
        </nav>

        <h1 class="font-display font-extrabold text-3xl mb-2">Kullanım Şartları</h1>
        <p class="text-xs text-ifsa-muted mb-6">Son güncelleme: {{ now()->translatedFormat('d F Y') }}</p>

        <div class="bg-rose-50 border border-rose-200 rounded-xl p-4 mb-6 text-sm">
            <strong class="text-rose-700">18+ Uyarı:</strong> Bu site yetişkinlere yönelik içerikler hakkında
            inceleme ve dizin hizmeti sunar. Yalnızca 18 yaşından büyük kullanıcılar tarafından kullanılabilir.
            18 yaşından küçükseniz lütfen siteyi terk edin.
        </div>

        <div class="prose prose-sm sm:prose max-w-none">
            <h2>1. Kabul</h2>
            <p>
                ifsasepeti.com'u kullanarak bu şartları kabul etmiş olursunuz. Şartları kabul etmiyorsanız
                siteyi kullanmayınız.
            </p>

            <h2>2. Hizmetin Tanımı</h2>
            <p>
                ifsasepeti.com, yasal ve rıza temelli yetişkin içerik sağlayıcı sitelerini listeleyen, inceleyen
                ve sıralayan bir dizin platformudur. Site, listelenen sitelere ait içerikleri barındırmaz;
                yalnızca dış bağlantılar sunar.
            </p>

            <h2>3. Yaş Sınırı</h2>
            <p>
                Bu siteyi kullanmak için 18 yaşından büyük olduğunuzu ve bulunduğunuz hukuk dairesinde
                yetişkin içeriğine erişmenin yasal olduğunu beyan edersiniz.
            </p>

            <h2>4. Listelenen Siteler Hakkında Sorumluluk</h2>
            <ul>
                <li>Listelediğimiz dış sitelerin içeriklerinden, hizmet kalitesinden, ödeme uygulamalarından
                    veya gizlilik politikalarından sorumlu değiliz.</li>
                <li>Bir siteye yönlendirildiğinizde o sitenin kuralları geçerlidir.</li>
                <li>Listelenen siteler periyodik olarak değerlendirilir; uygunsuz, yasadışı veya rıza dışı
                    içerik tespit edildiğinde derhal kaldırılır. Bu tür içerik tespit ederseniz lütfen
                    <a href="{{ url('/sikayet') }}">şikayet kanalımızı</a> kullanın.</li>
            </ul>

            <h2>5. Yasak Davranışlar</h2>
            <p>Sitemizde aşağıdakiler kesinlikle yasaktır:</p>
            <ul>
                <li>Rıza dışı (NCII / "ifşa") içerik talep etmek veya yönlendirme istemek</li>
                <li>18 yaş altı kişileri içeren içerik talep etmek</li>
                <li>Bot, scraper veya otomatik istek araçlarıyla siteyi aşırı yüklemek</li>
                <li>Site verilerini izinsiz kopyalamak, çoğaltmak veya yeniden yayınlamak</li>
                <li>Spam link önerileri göndermek</li>
            </ul>

            <h2>6. Fikri Mülkiyet</h2>
            <p>
                Site tasarımı, logo, mascot ve özgün içerikler ifsasepeti.com'a aittir. Listelenen sitelere
                ait marka ve logolar ilgili site sahiplerine aittir; yalnızca inceleme ve referans amacıyla
                gösterilir.
            </p>

            <h2>7. DMCA / Telif Hakkı Talepleri</h2>
            <p>
                Telif hakkı ihlali bildirimleri için <a href="mailto:dmca@ifsasepeti.com">dmca@ifsasepeti.com</a>
                adresine yazın. Bildiriminizde şunları belirtin: ihlal edilen eserin tanımı, ihlalin sitemizdeki
                URL'si, sizin iletişim bilgileriniz ve yetkili olduğunuza dair beyan.
            </p>

            <h2>8. Sorumluluk Reddi</h2>
            <p>
                Site "olduğu gibi" sunulur. ifsasepeti.com, bilgilerin doğruluğu, sitelerin erişilebilirliği,
                kesintisizlik veya hatasızlık garantisi vermez. Site kullanımından kaynaklanan dolaylı veya
                doğrudan zararlardan sorumlu tutulamayız.
            </p>

            <h2>9. Şartların Değişmesi</h2>
            <p>
                Bu şartları önceden bildirimde bulunmaksızın güncelleyebiliriz. Güncel sürüm her zaman
                bu sayfada bulunur. Siteyi kullanmaya devam etmeniz güncellenmiş şartları kabul ettiğiniz
                anlamına gelir.
            </p>

            <h2>10. Uygulanacak Hukuk</h2>
            <p>
                Bu şartlar Türkiye Cumhuriyeti yasalarına tabidir. İhtilaflarda İstanbul mahkemeleri yetkilidir.
            </p>
        </div>
    </div>
@endsection

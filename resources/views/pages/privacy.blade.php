@extends('layouts.app')
@section('title', 'Gizlilik Politikası - ifsasepeti.com')
@section('description', 'ifsasepeti.com gizlilik politikası — kişisel veri işleme, çerez kullanımı ve KVKK aydınlatması.')

@section('content')
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <nav class="text-xs text-ifsa-muted mb-4">
            <a href="{{ url('/') }}" class="hover:text-ifsa-orange">ifsasepeti</a>
            <span class="mx-1">›</span>
            <span class="text-ifsa-ink">Gizlilik Politikası</span>
        </nav>

        <h1 class="font-display font-extrabold text-3xl mb-2">Gizlilik Politikası</h1>
        <p class="text-xs text-ifsa-muted mb-6">Son güncelleme: {{ now()->translatedFormat('d F Y') }}</p>

        <div class="prose prose-sm sm:prose max-w-none">
            <p>
                ifsasepeti.com olarak ziyaretçilerimizin gizliliğine önem veriyoruz. Bu politika, sitemizi
                ziyaret ettiğinizde hangi verilerin toplandığını, nasıl kullanıldığını ve haklarınızı
                açıklar. Site, 6698 sayılı Kişisel Verilerin Korunması Kanunu (KVKK) ve ilgili AB GDPR
                prensiplerine uygun şekilde işletilir.
            </p>

            <h2>Veri Sorumlusu</h2>
            <p>
                ifsasepeti.com (bundan sonra "Site") veri sorumlusudur. İletişim:
                <a href="mailto:info@ifsasepeti.com">info@ifsasepeti.com</a>
            </p>

            <h2>Topladığımız Veriler</h2>
            <ul>
                <li><strong>Otomatik olarak toplanan veriler:</strong> IP adresi (hash'lenmiş halde saklanır),
                    tarayıcı bilgisi (user-agent), referans URL, ziyaret zamanı, ziyaret edilen sayfalar.</li>
                <li><strong>Çerezler:</strong> Oturum çerezleri, tercih çerezleri ve analitik amaçlı üçüncü
                    parti çerezler (örn. Google Analytics). Detaylar için <a href="#cerezler">çerez politikamızı</a>
                    okuyun.</li>
                <li><strong>Sizden alınan veriler:</strong> Link değişimi veya iletişim formu doldurduğunuzda
                    paylaştığınız e-posta, isim ve site bilgileri.</li>
            </ul>

            <h2>Verileri Nasıl Kullanırız?</h2>
            <ul>
                <li>Sitenin doğru çalışmasını sağlamak (oturum yönetimi, güvenlik)</li>
                <li>Hangi sitelerin daha çok tıklandığını anlayıp sıralamayı iyileştirmek</li>
                <li>Kötüye kullanım ve botları tespit etmek</li>
                <li>Hukuki yükümlülüklere uymak</li>
            </ul>
            <p>
                <strong>Verilerinizi üçüncü taraflara satmayız.</strong> İçerik ortakları ile yalnızca
                anonimleştirilmiş ve toplulaştırılmış istatistik paylaşırız.
            </p>

            <h2 id="cerezler">Çerez Politikası</h2>
            <p>
                Site, deneyiminizi iyileştirmek için tarayıcınızda çerez saklar. Çerezleri istediğiniz zaman
                tarayıcı ayarlarınızdan silebilir veya engelleyebilirsiniz. Bazı çerezleri engellemek sitenin
                bazı bölümlerinin doğru çalışmamasına yol açabilir.
            </p>

            <h2>Üçüncü Parti Hizmetler</h2>
            <ul>
                <li><strong>thum.io</strong> — listelediğimiz sitelerin ekran görüntülerini almak için</li>
                <li><strong>Google Fonts</strong> — yazı tipleri (CDN üzerinden)</li>
                <li>Listelediğimiz dış siteler kendi gizlilik politikalarına tabidir; bu sitelere
                    yönlendirildiğinizde onların kuralları geçerlidir.</li>
            </ul>

            <h2>KVKK Kapsamındaki Haklarınız</h2>
            <p>KVKK Madde 11 kapsamında aşağıdaki haklara sahipsiniz:</p>
            <ul>
                <li>Kişisel verilerinizin işlenip işlenmediğini öğrenme</li>
                <li>İşlenmişse buna ilişkin bilgi talep etme</li>
                <li>İşlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını öğrenme</li>
                <li>Eksik veya yanlış işlenmişse düzeltilmesini isteme</li>
                <li>Verilerinizin silinmesini veya yok edilmesini isteme</li>
                <li>İşleme faaliyetine itiraz etme</li>
            </ul>
            <p>
                Bu hakları kullanmak için <a href="mailto:kvkk@ifsasepeti.com">kvkk@ifsasepeti.com</a>
                adresine kimliğinizi tespit edici bilgilerle birlikte talebinizi iletebilirsiniz.
            </p>

            <h2>Yaş Sınırı</h2>
            <p>
                Bu site yalnızca 18 yaşından büyük kullanıcılar içindir. 18 yaşından küçüklerin verilerini
                bilerek toplamayız. Eğer bir çocuğun verilerini topladığımızı düşünüyorsanız lütfen iletişime geçin.
            </p>

            <h2>Değişiklikler</h2>
            <p>
                Bu politikayı güncelleyebiliriz. Önemli değişiklikleri ana sayfada duyururuz. Politikanın
                son güncelleme tarihi yukarıda belirtilmiştir.
            </p>
        </div>
    </div>
@endsection

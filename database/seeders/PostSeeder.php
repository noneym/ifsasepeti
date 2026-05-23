<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $author = User::first();

        $posts = [
            [
                'title' => '2026 Yılında En İyi Yetişkin Siteleri Nasıl Seçilir? Kapsamlı Rehber',
                'slug' => '2026-en-iyi-yetiskin-siteleri-rehberi',
                'excerpt' => 'Premium abonelik mi, ücretsiz tube mu, AI üretici mi? 2026 yılında bütçenize ve zevkinize uygun yetişkin platformu seçerken dikkat etmeniz gereken 7 kriter.',
                'tags' => ['rehber', 'premium', 'karşılaştırma', '2026'],
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now()->subDays(2),
                'meta_title' => 'En İyi Yetişkin Siteleri 2026 - Premium, Tube, AI Karşılaştırma',
                'meta_description' => '2026 için en iyi yetişkin platformu nasıl seçilir? Premium abonelikler, ücretsiz tube siteleri, AI üreticileri ve canlı kameraların artıları/eksileri.',
                'body' => "<p>Yetişkin internet ekosistemi her geçen yıl daha karmaşık hale geliyor. 2026 yılında karşımızda 5 farklı tür platform var: <strong>premium abonelik siteleri</strong>, <strong>ücretsiz tube siteleri</strong>, <strong>canlı kamera platformları</strong>, <strong>AI porno üreticileri</strong> ve <strong>OnlyFans benzeri creator ağları</strong>. Hangisinin size uygun olduğunu seçmek artık biraz araştırma gerektiriyor.</p>\n\n<p>Bu rehberde her platform türünün güçlü ve zayıf yönlerini, uygun fiyat aralıklarını ve hangi kullanıcıya hitap ettiğini özetliyoruz.</p>\n\n<h2>1. Premium Abonelik Siteleri</h2>\n<p>Brazzers, BangBros, AdultTime gibi büyük markalar bu kategoride. Aylık 15-30 dolar arası abonelik karşılığında 4K reklamsız içerik, mobil uygulama ve offline indirme sunuyorlar.</p>\n<ul>\n<li><strong>Kime uygun:</strong> Düzenli içerik tüketen, kaliteden ödün vermek istemeyen kullanıcılar</li>\n<li><strong>Önerimiz:</strong> AdultTime ya da Brazzers ile başlayın</li>\n</ul>\n\n<h2>2. Ücretsiz Tube Siteleri</h2>\n<p>PornHub, XVideos, xHamster gibi devler. Reklam destekli, kullanıcı yüklemesi ağırlıklı. 2026 itibariyle HD/4K içerik bolca mevcut.</p>\n<ul>\n<li><strong>Artılar:</strong> Ücretsiz, sınırsız çeşitlilik, hızlı erişim</li>\n<li><strong>Eksiler:</strong> Reklam yoğunluğu, Türkiye'den VPN gerekli</li>\n</ul>\n\n<h2>3. AI Porno Üreticileri</h2>\n<p>Candy AI, PlayBox, OurDream gibi platformlar son 2 yılda patladı. Sanal karakterlerle sohbet, görsel ve video üretimi sunuyorlar. Tamamen rıza temelli AI karakterler kullandıkları için yasal açıdan güvenli.</p>\n\n<h2>4. Canlı Kamera Siteleri</h2>\n<p>StripChat, CamSoda, LiveJasmin. Gerçek zamanlı etkileşim, token sistemi ile bahşiş veya özel oda.</p>\n\n<h2>5. OnlyFans Tarzı Creator Ağları</h2>\n<p>Tek bir performer'a abone olup direkt mesajlaşma. Daha kişisel deneyim.</p>\n\n<h2>Hangisini Seçmeli?</h2>\n<p>Cevap basit: <strong>tek bir platforma bağlı kalmayın</strong>. Çoğu kullanıcı 2-3 farklı tür platformu paralel kullanıyor. Örneğin: Bir premium abonelik (HD içerik için) + ücretsiz bir tube (çeşitlilik için) + bir AI sohbet platformu (etkileşim için).</p>\n\n<p>Listemizdeki <strong>76 site</strong> arasından kategori sayfalarına göz atıp kendiniz için en uygun karışımı oluşturabilirsiniz.</p>",
            ],
            [
                'title' => 'AI Porno Üreticileri 2026: Candy AI, PlayBox ve Diğerleri Karşılaştırması',
                'slug' => 'ai-porno-ureticileri-2026-karsilastirma',
                'excerpt' => 'AI porno üretim platformlarını test ettik. Karakter tutarlılığı, görsel kalitesi, ücretsiz limit ve premium fiyatlandırma açısından detaylı karşılaştırma.',
                'tags' => ['AI', 'karşılaştırma', 'candy-ai', 'playbox'],
                'is_published' => true,
                'published_at' => now()->subDays(7),
                'meta_title' => 'En İyi AI Porno Üreticileri 2026 Karşılaştırma - ifsasepeti',
                'meta_description' => 'Candy AI, PlayBox, OurDream, SpicyChat ve daha fazlasının karşılaştırması. Hangi AI platformu size uygun?',
                'body' => "<p>2024'te başlayan AI porno üretim furyası, 2026 itibariyle olgunlaştı. Artık onlarca platform var ve her birinin kendi güçlü yanı. Bu yazıda en popüler 5'ini karşılaştırdık.</p>\n\n<h2>Candy AI - Tutarlılık Şampiyonu</h2>\n<p>Karakter özelleştirme oldukça detaylı ve aynı karakter farklı pozlarda istendiğinde yüz hatları tutarlı kalıyor. Sesli mesajlaşma desteği var.</p>\n<p><strong>Puan:</strong> 4.3/5</p>\n\n<h2>PlayBox - Görsel + Video</h2>\n<p>Sadece görsel değil, kısa AI video üretimi de destekliyor. Karakter, görsel ve animasyon tek arayüzde.</p>\n\n<h2>OurDream - Hikaye Odaklı</h2>\n<p>Uzun süreli sohbet hafızası ve hikaye geliştirme bu platformun ana güçlü yanı.</p>\n\n<h2>SpicyChat - Ücretsiz Cömert</h2>\n<p>Ücretsiz versiyonu rakiplerden çok daha cömert. NSFW içerik baştan açık.</p>\n\n<h2>GirlfriendGPT - Topluluk Karakterleri</h2>\n<p>Binlerce kullanıcı yapımı karakter arasından seçim yapabilirsiniz.</p>\n\n<h2>Sonuç</h2>\n<p>Eğer maksimum tutarlılık ve görsel kalite istiyorsanız <strong>Candy AI</strong>. Daha fazla deneyim için <strong>PlayBox</strong>. Bedava başlamak isteyenlere <strong>SpicyChat</strong>.</p>",
            ],
            [
                'title' => 'Türkiye\'den Yetişkin Sitelere Güvenli Erişim: VPN Rehberi',
                'slug' => 'turkiyeden-yetiskin-sitelere-vpn-rehberi',
                'excerpt' => 'Türkiye\'de engelli yetişkin sitelere güvenli erişim için hangi VPN\'i seçmelisiniz? Hız, gizlilik, ödeme yöntemleri ve yasal durumla ilgili kapsamlı rehber.',
                'tags' => ['vpn', 'güvenlik', 'türkiye', 'rehber'],
                'is_published' => true,
                'published_at' => now()->subDays(14),
                'meta_title' => 'Türkiye VPN Rehberi 2026 - Yetişkin Sitelere Güvenli Erişim',
                'meta_description' => 'BTK engelli yetişkin sitelere Türkiye\'den güvenli erişim için VPN seçim rehberi. Hangi VPN hızlı, gizli ve uygun fiyatlı?',
                'body' => "<p>Türkiye'de BTK (Bilgi Teknolojileri ve İletişim Kurumu) tarafından engellenen yetişkin sitelerine erişmek için VPN kullanmak yaygın bir yöntem. Ancak her VPN aynı kalitede değil.</p>\n\n<p><strong>Yasal not:</strong> VPN kullanmak Türkiye'de yasal değildir ancak 5651 sayılı kanun gri alan oluşturuyor. Bu yazı bilgilendirme amaçlıdır; kararı kendiniz vermelisiniz.</p>\n\n<h2>VPN Seçerken Dikkat Edilecekler</h2>\n<ol>\n<li><strong>No-log politikası:</strong> Aktivite kaydı tutmayan VPN şart.</li>\n<li><strong>Türkiye sunucusu:</strong> Hız için yakın sunucu önemli.</li>\n<li><strong>Ödeme:</strong> Kripto veya anonim ödeme seçeneği bulunmalı.</li>\n<li><strong>Kill switch:</strong> Bağlantı koparsa internet kesilmeli.</li>\n<li><strong>Hız:</strong> 4K video için en az 25 Mbps gerekli.</li>\n</ol>\n\n<h2>Sadece VPN Yeterli mi?</h2>\n<p>Gerçek güvenlik için VPN + temiz tarayıcı + reklam engelleyici + DNS over HTTPS önerilir. Mobil cihazlarda VPN ayrıca kurulmalı.</p>\n\n<h2>VPN Olmadan Erişilebilen Platformlar</h2>\n<p>Bazı yetişkin platformlar (özellikle Avrupa merkezli premium servisler) Türkiye'den de erişilebiliyor. Listemizdeki sitelerin hangilerinin VPN gerektirmediğini her incelemenin altında belirtiyoruz.</p>",
            ],
            [
                'title' => 'OnlyFans Hesabı Açmadan İçeriklere Erişmenin Yasal Yolları',
                'slug' => 'onlyfans-yasal-icerik-erisimi',
                'excerpt' => 'OnlyFans abonelik ücretlerinden tasarruf ederken yasal kalmanın yolları. Sızdırılmış içerik değil, ücretsiz hesaplar ve PPV yapısının nasıl çalıştığı.',
                'tags' => ['onlyfans', 'rehber', 'ücretsiz'],
                'is_published' => true,
                'published_at' => now()->subDays(20),
                'meta_title' => 'OnlyFans Ücretsiz İçerik Yasal Yolları - ifsasepeti',
                'meta_description' => 'OnlyFans\'taki içeriklere yasal yollarla nasıl ücretsiz erişilir? PPV sistemi, ücretsiz aboneler ve creator promosyonları.',
                'body' => "<p>OnlyFans, content creator'ların aylık 5-50 dolar arası abonelikle özel içerik sunduğu büyük bir platform. Ancak herkesin bilmediği bir gerçek: <strong>OnlyFans hesaplarının önemli bir kısmı tamamen ücretsiz</strong>.</p>\n\n<h2>Ücretsiz OnlyFans Hesapları Nasıl Çalışır?</h2>\n<p>Creator iki tür hesap açabilir:</p>\n<ul>\n<li><strong>Ücretli abonelik:</strong> Aylık ücret karşılığında tüm içerik açılır.</li>\n<li><strong>Ücretsiz abonelik + PPV:</strong> Hesap takip etmek bedava, ama özel video/foto için tek seferlik ödeme yapılır.</li>\n</ul>\n\n<p>İkinci model son 2 yıldır yaygınlaştı çünkü creator daha çok takipçi topluyor ve PPV daha çok kazandırıyor.</p>\n\n<h2>Ücretsiz İçerik İçin Stratejiler</h2>\n<ol>\n<li><strong>Ücretsiz hesapları takip edin:</strong> Listemizdeki ücretsiz OnlyFans hesapları başlangıç için iyi.</li>\n<li><strong>Promosyon dönemleri:</strong> Birçok creator ay sonu/başı yüzde 50-80 indirim yapar.</li>\n<li><strong>Mesajlaşma:</strong> Aktif takipçi olarak mesaj atın, bazı creatorlar ücretsiz içerik gönderir.</li>\n<li><strong>Trial linkleri:</strong> 7-30 günlük ücretsiz deneme linkleri creator profilinde yayınlanır.</li>\n</ol>\n\n<h2>Sızdırılmış İçerik Neden Tehlikeli?</h2>\n<p>İnternette \"OnlyFans leak\" arayan kullanıcılar dikkat: bu içerikler genelde yasal olarak <strong>kabul edilemez</strong>, virüs/malware içerir ve hesabınızı tehlikeye atabilir.</p>\n<p>Sızdırma içerik kullanan platformları <strong>kesinlikle listelemiyoruz</strong>. Listemizdeki tüm OnlyFans referansları creator'ın orijinal hesabına yönlendirir.</p>\n\n<h2>Sonuç</h2>\n<p>Yasal yoldan, ücretsiz ya da çok düşük maliyetle kaliteli OnlyFans içeriğine erişmek tamamen mümkün. Sızdırılmış içerik tuzağına düşmeyin.</p>",
            ],
        ];

        foreach ($posts as $data) {
            if ($author) {
                $data['user_id'] = $author->id;
            }
            Post::updateOrCreate(['slug' => $data['slug']], $data);
        }
    }
}

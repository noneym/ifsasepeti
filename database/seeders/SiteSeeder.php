<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Site;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            'ucretsiz-porno-tube' => [
                ['PornHub', 'https://www.pornhub.com', '🟧', false],
                ['XVideos', 'https://www.xvideos.com', '⬛', false],
                ['xHamster', 'https://xhamster.com', '🟨', false],
                ['XNXX', 'https://www.xnxx.com', '🅡', false],
                ['Eporner', 'https://www.eporner.com', '🟦', false],
                ['HQporner', 'https://hqporner.com', '🅗', false],
                ['Beeg', 'https://beeg.com', '🟧', false],
                ['YouPorn', 'https://www.youporn.com', '🟥', false],
                ['SpankBang', 'https://spankbang.com', '🟨', false],
                ['RedTube', 'https://www.redtube.com', '🟥', false],
            ],
            'yz-porno-siteleri' => [
                ['Candy AI', 'https://candy.ai', '🍬', true],
                ['OurDream', 'https://ourdream.ai', '🌙', true],
                ['GirlfriendGPT', 'https://girlfriend.gpt', '💬', true],
                ['SpicyChat', 'https://spicychat.ai', '🌶️', true],
                ['PlayBox', 'https://playbox.ai', '▶️', true],
                ['JuicyChat AI', 'https://juicychat.ai', '🍑', true, ['is_new' => true]],
                ['Joi AI', 'https://joi.ai', '💜', true],
                ['CamSoda AI', 'https://camsoda.ai', '🥤', true],
                ['Undress AI', 'https://undress.ai', '👗', true],
                ['ClothOff', 'https://clothoff.ai', '👚', true],
            ],
            'canli-kamera-siteleri' => [
                ['CamSoda', 'https://www.camsoda.com', '🥤', false],
                ['StripChat', 'https://stripchat.com', '🔥', false],
                ['SinParty', 'https://www.sinparty.com', '🎉', false],
                ['Jasmin', 'https://www.livejasmin.com', '🌸', false],
                ['Streamate', 'https://www.streamate.com', '📺', false],
                ['BongaCams', 'https://bongacams.com', '🥁', false],
                ['JerkMate', 'https://www.jerkmate.com', '🐵', false],
                ['Cam4', 'https://www.cam4.com', '4️⃣', false],
                ['MyFreeCams', 'https://www.myfreecams.com', '🆓', false],
                ['Flirtify', 'https://flirtify.com', '😘', false],
            ],
            'premium-porno' => [
                ['Brazzers', 'https://www.brazzers.com', '🅑', true, ['is_premium' => true]],
                ['BangBros', 'https://www.bangbros.com', '🅑', true, ['is_premium' => true]],
                ['SpiceVids', 'https://www.spicevids.com', '🌶️', true, ['is_premium' => true]],
                ['I Know That Girl', 'https://www.iknowthatgirl.com', '👀', true, ['is_premium' => true]],
                ['LetsDoeIt', 'https://www.letsdoeit.com', '✅', true, ['is_premium' => true]],
                ['AdultTime', 'https://www.adulttime.com', '⏰', true, ['is_premium' => true]],
                ['FapHouse', 'https://faphouse.com', '🏠', true, ['is_premium' => true]],
                ['Candy AI', 'https://candy.ai', '🍬', true],
                ['HentaiedPRO', 'https://hentaied.com', '🎌', true, ['is_premium' => true, 'is_new' => true]],
                ['TeamSkeet', 'https://www.teamskeet.com', '🏀', true, ['is_premium' => true]],
            ],
            'nsfw-ai-siteleri' => [
                ['PlayBox', 'https://playbox.ai', '▶️', true],
                ['Fapify', 'https://fapify.ai', '🆕', true, ['is_new' => true]],
                ['ClothOff', 'https://clothoff.ai', '👚', true],
                ['NudeAI', 'https://nude.ai', '😍', true],
                ['XUndress', 'https://xundress.ai', '❌', true],
                ['CreateHottie', 'https://createhottie.ai', '🔥', true],
                ['Nudiva', 'https://nudiva.ai', '💎', true],
                ['Nudify AI', 'https://nudify.ai', '👁️', true],
                ['Undress XXX', 'https://undress.xxx', '🅧', true],
                ['NudeFab', 'https://nudefab.ai', '🏭', true],
            ],
            'ai-porno-ureticileri' => [
                ['Playboy', 'https://playboy.ai', '🐇', true],
                ['CreateHottie', 'https://createhottie.ai', '🔥', true],
                ['Fapify', 'https://fapify.ai', '✨', true],
                ['SugarGenBox', 'https://sugargenbox.ai', '🍰', true],
                ['LusyChat AI', 'https://lusychat.ai', '💋', true],
                ['KissyVid', 'https://kissyvid.ai', '💋', true],
                ['Seduced AI', 'https://seduced.ai', '😏', true, ['is_new' => true]],
                ['DPNode AI', 'https://dpnode.ai', '🎬', true],
                ['CreatePorn', 'https://createporn.ai', '🎥', true],
                ['LeakifyHub', 'https://leakifyhub.ai', '💧', true],
            ],
            'ucretsiz-onlyfans' => [
                ['Skylar Mae', 'https://onlyfans.com/skylarmae', '👱‍♀️', false],
                ['Luna Star', 'https://onlyfans.com/lunastar', '⭐', false],
                ['Olivia Austinx', 'https://onlyfans.com/oliviaaustinx', '🌹', false],
                ['Sam', 'https://onlyfans.com/sam', '💃', false],
                ['Eva Elfie', 'https://onlyfans.com/evaelfie', '🧝‍♀️', false],
            ],
            'seks-iliski-siteleri' => [
                ['AdultFriendFinder', 'https://adultfriendfinder.com', '🔍', false],
                ['BeNaughty', 'https://www.benaughty.com', '😈', false],
                ['AshleyMadison', 'https://www.ashleymadison.com', '💋', false],
                ['Fling', 'https://fling.com', '💞', false],
                ['FuckBook', 'https://fuckbook.com', '📕', false],
            ],
            'turkce-porno' => [
                ['Türk Erotik', 'https://example.com/turk-erotik', '🇹🇷', false],
                ['İstanbul Cam', 'https://example.com/istanbul-cam', '🌉', false],
                ['Türkçe Tube', 'https://example.com/turkce-tube', '📺', false],
            ],
        ];

        foreach ($data as $slug => $sites) {
            $cat = Category::where('slug', $slug)->first();
            if (! $cat) {
                continue;
            }
            foreach ($sites as $i => $row) {
                [$name, $url, $emoji, $isAi] = $row;
                $extra = $row[4] ?? [];
                Site::updateOrCreate(
                    ['category_id' => $cat->id, 'name' => $name],
                    array_merge([
                        'url' => $url,
                        'logo_emoji' => $emoji,
                        'is_ai' => $isAi,
                        'sort_order' => ($i + 1) * 10,
                        'is_active' => true,
                    ], $extra)
                );
            }
        }

        $this->seedReviews();
    }

    protected function seedReviews(): void
    {
        $reviews = [
            'PornHub' => [
                'tagline' => 'Dünyanın en çok ziyaret edilen ücretsiz tube sitesi',
                'rating' => 4.50,
                'review_long' => "PornHub, ücretsiz porno tube siteleri kategorisinin tartışmasız lideri. Milyonlarca video, binlerce stüdyo ortaklığı ve düzgün bir arama deneyimi sunan platform, yetişkin internetinin en bilinen markası haline geldi.\n\nSitenin en güçlü yanı içerik çeşitliliği - amatör çekimlerden büyük prodüksiyonlara, kategori bazlı koleksiyonlardan canlı yayınlara kadar her şey burada. Premium aboneliği almasanız bile ücretsiz olarak HD kalitede izleyebileceğiniz binlerce video var.\n\nReklam yoğunluğu son dönemde arttı ama bir VPN veya reklam engelleyici ile bu sorun büyük ölçüde çözülüyor. Türkiye'den erişim için VPN gerekli.",
                'pros' => [
                    'Devasa video kütüphanesi (10M+ video)',
                    'HD ve 4K kalite seçenekleri',
                    'Profesyonel stüdyo ortaklıkları',
                    'Detaylı kategori ve etiket sistemi',
                    'Ücretsiz hesap ile geçmiş ve favori takibi',
                ],
                'cons' => [
                    'Türkiye\'den VPN olmadan erişilemiyor',
                    'Reklam yoğunluğu zaman zaman fazla',
                ],
            ],
            'Brazzers' => [
                'tagline' => 'Premium HD prodüksiyonun standardı',
                'rating' => 4.70,
                'review_long' => "Brazzers, premium yetişkin içerik denildiğinde akla ilk gelen markadır. Yüksek prodüksiyon değerleri, tanınmış oyuncular ve haftalık güncellenen video kütüphanesi ile yıllardır sektörün öncüsü.\n\nAylık abonelik tek bir site değil; MILF Hunter, Big Tits at School, Real Wife Stories gibi 30+ tematik kanalın hepsine erişim sağlıyor. Tüm içerik 4K destekli, mobile uyumlu ve uygulamasıyla offline indirilebilir.\n\nÜcretli olması bir engel olarak görülebilir ama deneme paketi ve uzun dönemli indirimlerle giriş maliyeti makul seviyede.",
                'pros' => [
                    '30+ tematik kanal tek abonelikle',
                    'Tüm içerik 4K Ultra HD',
                    'Mobil uygulama ve offline indirme',
                    'Reklam yok - temiz arayüz',
                    'Düzenli haftalık güncellemeler',
                ],
                'cons' => [
                    'Aylık ücret diğer premium sitelere göre orta-üst seviye',
                    'Ücretsiz deneme süresi kısıtlı',
                ],
            ],
            'Candy AI' => [
                'tagline' => 'AI ile özelleştirilebilir sanal partner ve sohbet',
                'rating' => 4.30,
                'review_long' => "Candy AI, son birkaç yılda hızla yükselen AI tabanlı yetişkin sohbet ve içerik üretici platformlarının önde gelenlerinden. Kullanıcı kendi sanal karakterini tasarlıyor - saç rengi, vücut tipi, kişilik özellikleri seçilebiliyor - ve bu karakterle metin, sesli ve görüntülü etkileşime giriyor.\n\nUygulama tamamen rıza temelli yapay zeka karakterleriyle çalışıyor; gerçek bir kişiyi simüle etmiyor. Görsel kalite hızla iyileşiyor, sohbet doğal ve uzun süreli hafıza özelliği sayesinde karakter sizi hatırlıyor.\n\nÜcretsiz versiyonda günlük mesaj limiti var; premium aboneler sınırsız mesaj, sınırsız görsel üretimi ve ses mesajı gönderme özelliklerine erişiyor.",
                'pros' => [
                    'Tamamen özelleştirilebilir AI karakterler',
                    'Uzun süreli sohbet hafızası',
                    'Görsel ve sesli mesajlaşma',
                    'NSFW içerik açık (premium)',
                    'Mobil uyumlu arayüz',
                ],
                'cons' => [
                    'Ücretsiz versiyonda günlük limit var',
                    'Görsel üretimi bazen yavaşlayabiliyor',
                ],
            ],
            'CamSoda' => [
                'tagline' => 'Yenilikçi etkileşim özellikleriyle canlı kamera platformu',
                'rating' => 4.10,
                'review_long' => "CamSoda, canlı yayın yapan modellerle gerçek zamanlı etkileşim sunan bir webcam platformu. Sektörün diğer büyük oyuncularına göre daha agresif bir bonus sistemi ve düşük token fiyatlarıyla dikkat çekiyor.\n\nPlatformun en sevilen özelliği ücretsiz olarak izlenebilen geniş bir genel yayın havuzu - kayıt olmadan bile birçok modeli izleyebiliyorsunuz. Token aldığınızda bahşiş bırakabiliyor, özel oda açabiliyor veya kontrollü oyuncak özelliklerine erişebiliyorsunuz.\n\nMobil deneyim oldukça akıcı, çok kameralı görünüm desteği var ve sık sık ünlü porno yıldızlarının özel yayınlarına ev sahipliği yapıyor.",
                'pros' => [
                    'Ücretsiz genel yayın izleme',
                    'Token fiyatları rakiplere göre uygun',
                    'Mobil uyumlu, çok kameralı görünüm',
                    'Ünlü porno yıldızlarının özel yayınları',
                ],
                'cons' => [
                    'Bazı modellerin oda fiyatı pahalı',
                    'Türkiye\'den ödeme zaman zaman sorunlu',
                ],
            ],

            // ===== Ücretsiz Porno Tubeları =====
            'XVideos' => [
                'tagline' => 'Hız ve sade arayüzle öne çıkan ücretsiz tube',
                'rating' => 4.30,
                'review_long' => "XVideos, internet trafiğinde dünyada üst sıralarda yer alan ücretsiz porno tube sitesi. Reklam yoğunluğu PornHub'a göre belirgin şekilde daha düşük ve arayüz sade tutulmuş.\n\nİçerik kütüphanesi devasa: hem profesyonel stüdyo videoları hem amatör yüklemeler kategori, etiket ve oyuncu bazında filtrelenebiliyor. Mobil tarayıcı performansı oldukça hızlı, yüklenme süreleri kısa.\n\nKayıt zorunlu değil; ama hesap açarsanız geçmiş, favoriler ve özel oynatma listeleri kullanılabiliyor. Premium üyelik reklamları tamamen kaldırıyor.",
                'pros' => [
                    'Çok az reklam, sade arayüz',
                    'Hızlı sayfa yüklemesi',
                    'Devasa kategori sistemi',
                    'Ücretsiz HD oynatma',
                    'Kayıt olmadan kullanılabilir',
                ],
                'cons' => [
                    'Türkiye\'den VPN gerekiyor',
                    'Bazı eski videolar düşük çözünürlüklü',
                ],
            ],
            'xHamster' => [
                'tagline' => 'Topluluk odaklı amatör ağırlıklı tube',
                'rating' => 4.20,
                'review_long' => "xHamster, topluluk katkısına dayalı, amatör içeriğin baskın olduğu büyük ölçekli tube sitesi. Yorum sistemi aktif, kullanıcılar arası mesajlaşma ve içerik paylaşımı çok canlı.\n\nVideoların büyük kısmı kullanıcı yüklemesi; bu da daha gerçekçi ve niş içerikler bulmanın kolay olduğu anlamına geliyor. LGBTQ, fetiş ve özel ilgi alanları için ayrı bölümler mevcut.\n\nReklam politikası agresif sayılabilir; pop-up'lar zaman zaman rahatsız ediyor. Bir adblocker veya premium üyelik bu sorunu çözüyor.",
                'pros' => [
                    'Güçlü topluluk ve yorum sistemi',
                    'Amatör içerik bolluğu',
                    'Niş ve LGBTQ kategorileri detaylı',
                    'Canlı kamera entegrasyonu',
                    'Türkçe arayüz desteği',
                ],
                'cons' => [
                    'Pop-up reklamlar agresif',
                    'Türkiye\'den erişim için VPN şart',
                ],
            ],
            'XNXX' => [
                'tagline' => 'Klasik tasarım, oyuncu odaklı arşiv',
                'rating' => 4.10,
                'review_long' => "XNXX, eski okul bir tube arayüzü ve geniş arşiviyle hala milyonlarca kullanıcının uğradığı bir platform. Tasarım modern rakiplerine göre eskimiş görünebilir ama bu da hızlı bir deneyim sağlıyor.\n\nPorno yıldızı bazlı katalog özellikle güçlü; oyuncu profillerinde tüm sahnelerine, fotoğraflarına ve istatistiklerine erişebiliyorsunuz. Forum ve hikaye bölümleri toplulukla etkileşim için ek alanlar.\n\nBant genişliği düşük internet bağlantılarında bile akıcı oynatma sunması platformun güçlü yönlerinden.",
                'pros' => [
                    'Detaylı porno yıldızı veritabanı',
                    'Düşük bant genişliğinde bile sorunsuz oynatma',
                    'Forum ve hikaye bölümleri',
                    'Hızlı arama ve filtreleme',
                ],
                'cons' => [
                    'Arayüz tasarımı eski',
                    'Türkiye\'den VPN gerekiyor',
                ],
            ],
            'Eporner' => [
                'tagline' => 'HD ve 4K kaliteye odaklanmış tube',
                'rating' => 4.40,
                'review_long' => "Eporner, ücretsiz tube siteleri arasında video kalitesine en çok önem verenlerden. 4K ve 60fps videolar bolca bulunuyor, oynatıcı kalite seçimi ve hız kontrolü konusunda esnek.\n\nFavoriler, oynatma listeleri ve önerilen videolar algoritması oldukça isabetli çalışıyor. Kategori sayfaları temiz, etiket bulutu detaylı.\n\nReklamlar sınırlı ve genelde sayfa kenarlarında; oynatıcı içi reklam yok denecek kadar az.",
                'pros' => [
                    '4K ve 60fps video desteği',
                    'Sınırlı, rahatsız etmeyen reklamlar',
                    'Hızlı oynatıcı ve kalite seçimi',
                    'İyi çalışan öneri algoritması',
                ],
                'cons' => [
                    'Topluluk özellikleri zayıf',
                    'Türkiye\'den VPN gerekli',
                ],
            ],
            'HQporner' => [
                'tagline' => 'Sadece HD, reklamsız izleme deneyimi',
                'rating' => 4.50,
                'review_long' => "HQporner adından da anlaşıldığı üzere yalnızca yüksek çözünürlüklü videolar barındırıyor. Düşük kaliteli video yok, her şey en az 720p.\n\nReklam politikası benzersiz: sitede neredeyse hiç reklam göremiyorsunuz. Bunun yerine harici link tabanlı bir oynatıcı kullanılıyor; içerik üçüncü taraf CDN'lerden çekiliyor.\n\nKayıt yok, hesap yok, sadece video kütüphanesi. Niş arayanlar için ideal değil ama mainstream içerik için yeterli.",
                'pros' => [
                    'Sadece HD ve üzeri içerik',
                    'Neredeyse hiç reklam yok',
                    'Hesap gerektirmiyor',
                    'Hızlı arama',
                ],
                'cons' => [
                    'Kategori filtreleme sınırlı',
                    'Niş içerik yok denecek kadar az',
                ],
            ],
            'Beeg' => [
                'tagline' => 'Minimal arayüz, hızlı oynatma',
                'rating' => 3.90,
                'review_long' => "Beeg, sade ve dağıtıcı olmayan arayüzüyle dikkat çeken bir tube sitesi. Ana sayfa basit; sadece etiketler ve videolar.\n\nReklam yoğunluğu rakiplerine göre düşük. Mobile responsive tasarım iyi çalışıyor.\n\nVideo kütüphanesi büyük rakiplerine göre daha küçük ama tüm popüler kategoriler kapsanmış. 4K içerik az.",
                'pros' => [
                    'Sade, dağıtıcı olmayan tasarım',
                    'Reklam yoğunluğu düşük',
                    'Mobil performans iyi',
                ],
                'cons' => [
                    'Kütüphane büyük rakiplere göre küçük',
                    '4K içerik sınırlı',
                ],
            ],
            'YouPorn' => [
                'tagline' => 'PornHub ailesinden modern bir alternatif',
                'rating' => 4.20,
                'review_long' => "YouPorn, MindGeek (PornHub'ın ana şirketi) bünyesinde olan ve benzer altyapıyı kullanan büyük bir tube sitesi. Arayüz PornHub'a çok benziyor ama daha sade ve dağınık değil.\n\nVR videolar, kategori sayfaları ve oyuncu profilleri detaylı. Premium üyelikle reklamsız ve özel içerikler açılıyor.\n\nGüvenlik ve gizlilik konusunda büyük markanın getirdiği güven var; ödeme entegrasyonları sorunsuz.",
                'pros' => [
                    'PornHub kalitesinde altyapı',
                    'VR ve premium içerik mevcut',
                    'Güvenli ödeme entegrasyonu',
                    'Mobil ve TV uygulamaları',
                ],
                'cons' => [
                    'Türkiye\'den VPN şart',
                    'Çok özgün bir kimliği yok',
                ],
            ],
            'SpankBang' => [
                'tagline' => 'Akıcı oynatma ve büyük amatör arşiv',
                'rating' => 4.30,
                'review_long' => "SpankBang, oynatıcı performansı ve indirme kolaylığıyla tanınan büyük bir tube. Videolar genelde tek tıkla indirilebiliyor ve kalite seçimi geniş.\n\nAmatör ve gerçekçi içerikler ön planda; profesyonel stüdyo videoları da var ama site kullanıcı yüklemelerine ağırlık veriyor.\n\nArayüz nispeten temiz, reklam yoğunluğu orta seviyede.",
                'pros' => [
                    'Hızlı oynatıcı ve indirme',
                    'Amatör içerik bolluğu',
                    'Detaylı kalite seçimi',
                    'Mobile responsive',
                ],
                'cons' => [
                    'Bazı reklamlar yanıltıcı',
                    'Türkiye\'den VPN gerekli',
                ],
            ],
            'RedTube' => [
                'tagline' => 'Klasik tube deneyimi, sade ve güvenilir',
                'rating' => 4.00,
                'review_long' => "RedTube, PornHub ailesinden olan ve uzun yıllardır faaliyet gösteren klasik tube sitelerinden. Sade kırmızı-beyaz tasarımı markalaşmış durumda.\n\nKütüphane geniş, kategoriler net. Oyuncu sayfaları detaylı, yorum sistemi aktif.\n\nÇok özel bir özelliği yok ama tutarlı, güvenilir ve hızlı bir deneyim sunuyor.",
                'pros' => [
                    'Tanınmış marka, güvenilir',
                    'Sade ve hızlı arayüz',
                    'PornHub altyapısı',
                    'Detaylı oyuncu profilleri',
                ],
                'cons' => [
                    'Diğer büyük tube\'lara göre özgün özelliği az',
                    'Türkiye\'den VPN şart',
                ],
            ],

            // ===== YZ Porno Siteleri =====
            'OurDream' => [
                'tagline' => 'AI karakterlerle uzun süreli hikaye odaklı sohbet',
                'rating' => 4.20,
                'review_long' => "OurDream, hikaye anlatımına ve uzun süreli karakter ilişkilerine odaklanan bir AI yetişkin sohbet platformu. Karakteriniz zaman içinde gelişiyor, anılar biriktiriyor.\n\nGörsel üretimi diğer rakiplere göre daha tutarlı; aynı karakterin farklı pozlarda görüntüleri benzer yüz hatlarıyla geliyor.\n\nÜcretsiz versiyonda günlük sınır var; premium aboneler sınırsız mesaj ve gelişmiş görsel üretimine erişiyor.",
                'pros' => [
                    'Tutarlı karakter görselleri',
                    'Uzun süreli sohbet hafızası',
                    'Hikaye odaklı senaryolar',
                    'Düzenli özellik güncellemeleri',
                ],
                'cons' => [
                    'Ücretsiz limit oldukça sınırlı',
                    'Premium fiyatı orta-üst seviye',
                ],
            ],
            'GirlfriendGPT' => [
                'tagline' => 'Topluluk tarafından oluşturulan AI karakterler',
                'rating' => 4.10,
                'review_long' => "GirlfriendGPT, kullanıcıların kendi AI karakterlerini oluşturup paylaşabildiği bir platform. Binlerce hazır karakter arasından seçim yapabilir veya kendinizinkini sıfırdan tasarlayabilirsiniz.\n\nKarakter özelleştirme oldukça detaylı: kişilik, geçmiş hikaye, ilişki dinamiği, fetişler tanımlanabiliyor.\n\nGörsel üretimi opsiyonel; ana odak sohbet ve karakter etkileşimi. NSFW içerik premium aboneler için açılıyor.",
                'pros' => [
                    'Binlerce kullanıcı yapımı karakter',
                    'Detaylı karakter özelleştirme',
                    'Topluluk paylaşımı aktif',
                    'Mobile uyumlu',
                ],
                'cons' => [
                    'Görsel üretimi rakiplere göre zayıf',
                    'NSFW için premium gerekli',
                ],
            ],
            'SpicyChat' => [
                'tagline' => 'Ücretsiz olarak deneyenebilen geniş karakter havuzu',
                'rating' => 4.20,
                'review_long' => "SpicyChat, ücretsiz versiyonu en cömert AI sohbet platformlarından biri. Günlük mesaj limiti diğer rakiplerden yüksek, NSFW içerik baştan açık.\n\nTopluluk tabanlı karakter sistemi: binlerce hazır karakter, kullanıcı puanları ve etiketlerle filtreleniyor.\n\nGörsel üretimi entegre değil; sadece metin tabanlı sohbet. Ancak sohbet kalitesi ve karakter çeşitliliği önde.",
                'pros' => [
                    'Cömert ücretsiz kullanım limiti',
                    'NSFW içerik baştan açık',
                    'Binlerce topluluk karakteri',
                    'Hızlı sohbet yanıtları',
                ],
                'cons' => [
                    'Görsel üretimi yok',
                    'Karakter tutarlılığı zaman zaman kırılıyor',
                ],
            ],
            'PlayBox' => [
                'tagline' => 'AI porno video üretimine yönelik all-in-one platform',
                'rating' => 4.30,
                'review_long' => "PlayBox, AI ile yetişkin görsel ve video üretiminde uzmanlaşmış bir platform. Karakter oluşturma, görsel üretimi ve kısa video animasyonu tek arayüzde toplanmış.\n\nÖzelleştirme adımları detaylı: yüz, vücut, kıyafet, ortam ayrı ayrı kontrol edilebiliyor. Sonuçlar tutarlı ve yüksek çözünürlüklü.\n\nÜcretsiz krediyle başlanıyor; sonra premium üyelik veya kredi paketi alınıyor. Üretim hızı paya bağlı olarak değişiyor.",
                'pros' => [
                    'Hem görsel hem video üretimi',
                    'Detaylı karakter özelleştirme',
                    'Yüksek çözünürlük çıktısı',
                    'Tek arayüzde her şey',
                ],
                'cons' => [
                    'Kredi sistemi pahalı olabiliyor',
                    'Ücretsiz limit hızlı tükeniyor',
                ],
            ],
            'JuicyChat AI' => [
                'tagline' => 'Yeni nesil AI sohbet, hızlı geri bildirim',
                'rating' => 4.00,
                'review_long' => "JuicyChat AI, son dönemde popülerleşen bir AI sohbet platformu. Arayüz modern, mobil odaklı tasarlanmış.\n\nKarakter seçimi sınırlı ama hızla genişliyor. Sohbet doğal akıyor; karakter rol kırılmaları minimal.\n\nGörsel üretimi premium özelliği; ücretsiz versiyonda sadece metin sohbeti var.",
                'pros' => [
                    'Modern, mobil odaklı arayüz',
                    'Doğal sohbet akışı',
                    'Hızlı yanıt süresi',
                ],
                'cons' => [
                    'Karakter havuzu henüz küçük',
                    'Görsel için premium gerekli',
                ],
            ],
            'Joi AI' => [
                'tagline' => 'Sesli ve görüntülü etkileşime odaklı AI',
                'rating' => 4.10,
                'review_long' => "Joi AI, özellikle sesli mesajlaşma ve kısa video etkileşimine odaklanan bir AI partner platformu. Karakterler kullanıcıya kişisel ses mesajları gönderiyor.\n\nSes kalitesi oldukça doğal; farklı aksanlar ve ses tipleri seçilebiliyor.\n\nMetin sohbeti de var ama platformun ana çekiciliği ses ve kısa video iletişimi.",
                'pros' => [
                    'Doğal sesli mesajlaşma',
                    'Çoklu ses tipi seçeneği',
                    'Kısa video desteği',
                    'Mobile uyumlu',
                ],
                'cons' => [
                    'Premium olmadan ses sınırı düşük',
                    'Karakter çeşitliliği rakiplere göre az',
                ],
            ],
            'CamSoda AI' => [
                'tagline' => 'CamSoda altyapısıyla AI sanal modeller',
                'rating' => 4.00,
                'review_long' => "CamSoda AI, popüler webcam platformu CamSoda'nın AI versiyonu. Gerçek modellere benzeyen AI karakterler ile sohbet edebiliyorsunuz.\n\nArayüz CamSoda'nın klasik tasarımıyla aynı; geçiş kolay. Token sistemi de benzer şekilde işliyor.\n\nGerçek webcam deneyimini AI ile simüle etmeye çalışan bir hibrit yaklaşım.",
                'pros' => [
                    'CamSoda hesabıyla geçişli',
                    'Tanıdık arayüz',
                    'Token sistemi entegre',
                ],
                'cons' => [
                    'Diğer AI platformlara göre yenilik az',
                    'Token fiyatları yüksek',
                ],
            ],
            'Undress AI' => [
                'tagline' => 'AI ile fotoğraf düzenleme tool\'u',
                'rating' => 3.80,
                'review_long' => "Undress AI, kullanıcıların kendi yükledikleri görsellere AI ile alternatif kıyafet veya çıplaklık efekti uygulayan bir araç.\n\nKullanım sırasında rıza önemli: yalnızca kendi fotoğraflarınız veya rıza alınmış görseller kullanılmalı. Platform bunu açıkça belirtiyor.\n\nÜcretsiz versiyonda günde sınırlı kullanım var; premium üyelikte yüksek çözünürlük ve hızlı işleme açılıyor.",
                'pros' => [
                    'Yüksek çözünürlüklü çıktı',
                    'Hızlı işleme süresi',
                    'Çoklu stil seçeneği',
                ],
                'cons' => [
                    'Rıza dışı kullanım yasak ve etik dışıdır',
                    'Ücretsiz limit oldukça düşük',
                ],
            ],
            'ClothOff' => [
                'tagline' => 'AI tabanlı fotoğraf modifikasyon aracı',
                'rating' => 3.70,
                'review_long' => "ClothOff, kullanıcıların kendi görsellerinde AI destekli düzenlemeler yapmasına imkan sunan bir platform.\n\nDikkat: Yalnızca rıza alınmış görsellerle kullanılmalı. Başka birinin görsel kimliğini izinsiz işlemek hem yasadışı hem etik dışıdır. Site bunu kullanım şartlarında belirtiyor.\n\nGörsel kalitesi rakiplerine benzer; ödeme tabanlı kredi sistemi var.",
                'pros' => [
                    'Hızlı işleme',
                    'Anonim kullanım seçeneği',
                    'Çoklu format desteği',
                ],
                'cons' => [
                    'Kötüye kullanım riski yüksek; kullanıcı sorumluluğu önemli',
                    'Kredi maliyeti yüksek',
                ],
            ],

            // ===== Canlı Kamera Siteleri =====
            'StripChat' => [
                'tagline' => 'En büyük canlı kamera platformlarından biri',
                'rating' => 4.40,
                'review_long' => "StripChat, dünya çapında binlerce modelin canlı yayın yaptığı büyük bir webcam sitesi. Arayüz modern, mobile son derece uyumlu.\n\nVR yayınları, çok kameralı görünüm ve interaktif oyuncak entegrasyonu öne çıkan özellikleri. Ücretsiz olarak kayıt olmadan birçok yayını izleyebilirsiniz.\n\nToken sistemi standart; bahşiş, özel oda ve premium gösteri olarak kullanılıyor.",
                'pros' => [
                    'VR yayın desteği',
                    'Mobile çok iyi optimize',
                    'Geniş model havuzu',
                    'Ücretsiz izleme cömert',
                    'İnteraktif oyuncak entegrasyonu',
                ],
                'cons' => [
                    'Bazı popüler modeller pahalı',
                    'Türkiye\'den ödeme zaman zaman engelli',
                ],
            ],
            'SinParty' => [
                'tagline' => 'Niche ve kink temalı canlı yayın sahnesi',
                'rating' => 3.90,
                'review_long' => "SinParty, mainstream webcam platformlarından farklılaşmaya çalışan, niş ve kink odaklı bir canlı yayın sitesi.\n\nModel havuzu daha küçük ama daha özelleşmiş. Topluluk forumları ve özel etkinlikler aktif.\n\nMobile uyumu var ama ana rakiplerine göre tasarım biraz geride.",
                'pros' => [
                    'Niş ve kink temalı içerik',
                    'Aktif topluluk',
                    'Özel etkinlikler ve gösteriler',
                ],
                'cons' => [
                    'Model havuzu küçük',
                    'Tasarım eskimiş hissi veriyor',
                ],
            ],
            'Jasmin' => [
                'tagline' => 'Premium görünümlü, kaliteli canlı kamera deneyimi',
                'rating' => 4.50,
                'review_long' => "LiveJasmin (Jasmin), webcam sektörünün en eski ve en prestijli platformlarından. Yüksek kaliteli yayın, profesyonel modeller ve şık arayüzüyle premium algı yaratıyor.\n\nFiyatlar diğer platformlara göre yüksek ama model kalitesi ve teknik altyapı bunu karşılıyor. 4K yayın desteği var.\n\nMüşteri desteği güçlü, ödeme entegrasyonu güvenilir.",
                'pros' => [
                    '4K yayın kalitesi',
                    'Profesyonel ve özenli modeller',
                    'Şık premium arayüz',
                    'Güvenilir ödeme altyapısı',
                ],
                'cons' => [
                    'Token fiyatları yüksek',
                    'Ücretsiz içerik sınırlı',
                ],
            ],
            'Streamate' => [
                'tagline' => 'Şeffaf fiyatlandırma ve klasik webcam deneyimi',
                'rating' => 4.10,
                'review_long' => "Streamate, dakika başı şeffaf fiyatlandırma sunan, eski okul bir webcam platformu. Token yerine doğrudan dakika ücreti ile çalışıyor.\n\nModel havuzu geniş; özellikle ABD ve Latin Amerika ağırlıklı yayıncılar var. Arayüz sade.\n\nGiriş yapmadan da çoğu yayını izleyebiliyorsunuz; özel oda için kredi kartı şart.",
                'pros' => [
                    'Şeffaf dakika başı fiyatlandırma',
                    'Token sistemi olmadan basit ödeme',
                    'Geniş model havuzu',
                    'Sade ve hızlı arayüz',
                ],
                'cons' => [
                    'Tasarım modern değil',
                    'VR ve oyuncak entegrasyonu sınırlı',
                ],
            ],
            'BongaCams' => [
                'tagline' => 'Yüksek trafik, Doğu Avrupa ağırlıklı yayıncılar',
                'rating' => 4.20,
                'review_long' => "BongaCams, özellikle Doğu Avrupa modellerinin yoğun olduğu büyük bir webcam platformu. Ücretsiz izleme seçenekleri cömert.\n\nToken sistemi standart; bahşiş, özel oda ve gösteri için kullanılıyor. Mobile arayüz hızlı.\n\nÇoklu dil desteği iyi; Türkçe arayüz mevcut.",
                'pros' => [
                    'Türkçe arayüz desteği',
                    'Cömert ücretsiz izleme',
                    'Geniş Doğu Avrupa model havuzu',
                    'Mobile uyumlu',
                ],
                'cons' => [
                    'Reklam ve pop-up yoğunluğu var',
                    'Token paketleri kısıtlı',
                ],
            ],
            'JerkMate' => [
                'tagline' => 'Eşleştirme sistemiyle canlı kamera',
                'rating' => 4.00,
                'review_long' => "JerkMate, kullanıcıyı tercihlerine göre bir modelle eşleştirmeye odaklanan yenilikçi bir webcam platformu. Anketle başlıyor, sonra size uygun modelleri öneriyor.\n\nMain stream webcam sitelerinin altyapısını kullanıyor; arka planda Streamate ağı var.\n\nReklam yoğunluğu yüksek; ana sayfa neredeyse tamamen onboarding sürecinden oluşuyor.",
                'pros' => [
                    'Kişiselleştirilmiş model önerisi',
                    'Streamate ağı altyapısı',
                    'Detaylı tercih ayarları',
                ],
                'cons' => [
                    'Onboarding süreci uzun',
                    'Yoğun reklam ve pazarlama',
                ],
            ],
            'Cam4' => [
                'tagline' => 'Topluluk odaklı, çok çeşitli yayıncı',
                'rating' => 4.10,
                'review_long' => "Cam4, çok çeşitli yayıncı tipiyle dikkat çeken bir webcam platformu. Hetero, gay, trans ve çift yayınları ayrı sekmelerde organize edilmiş.\n\nÜcretsiz izleme cömert; bahşiş için token alınıyor. Topluluk forumları aktif.\n\nMobile arayüzü kullanışlı, video kalitesi iyi.",
                'pros' => [
                    'LGBTQ ve çift yayınlarında güçlü',
                    'Aktif topluluk forumları',
                    'Ücretsiz izleme cömert',
                    'İyi mobil deneyim',
                ],
                'cons' => [
                    'Bazı modeller için kalite düşük',
                    'Premium fiyatlandırma karmaşık',
                ],
            ],
            'MyFreeCams' => [
                'tagline' => 'Klasik kadın yayıncı odaklı webcam sitesi',
                'rating' => 3.90,
                'review_long' => "MyFreeCams, uzun yıllardır faaliyet gösteren, yalnızca kadın yayıncıların olduğu klasik bir webcam platformu. Topluluk sadakati yüksek.\n\nArayüz eski okul; tasarım modernize edilmemiş. Bu eski kullanıcılar için artı, yeni kullanıcılar için eksi.\n\nToken yerine kendi para birimi var; öğrenme eğrisi var.",
                'pros' => [
                    'Sadık ve aktif topluluk',
                    'Sadece kadın yayıncılar',
                    'Uzun yıllık güven',
                ],
                'cons' => [
                    'Arayüz çok eski',
                    'Para birimi sistemi kafa karıştırıcı',
                    'Mobil deneyim zayıf',
                ],
            ],
            'Flirtify' => [
                'tagline' => 'Sohbete dayalı flört odaklı canlı yayın',
                'rating' => 3.80,
                'review_long' => "Flirtify, klasik webcam mantığından biraz farklılaşıp sohbet ve flört temasına odaklanan yeni nesil bir platform. Modeller daha sosyal, konuşma ağırlıklı yayın yapıyor.\n\nKullanıcı arayüzü modern; mobile çok uyumlu. Token sistemi standart.\n\nModel havuzu henüz küçük; platform yeni.",
                'pros' => [
                    'Modern, dating odaklı tasarım',
                    'Sohbet ağırlıklı yayınlar',
                    'Mobil odaklı arayüz',
                ],
                'cons' => [
                    'Model havuzu küçük',
                    'Yeni platform, içerik az',
                ],
            ],

            // ===== En İyi Premium Pornolar =====
            'BangBros' => [
                'tagline' => 'Geniş kanal portföyüyle Brazzers alternatifi',
                'rating' => 4.50,
                'review_long' => "BangBros, premium yetişkin sektörünün en eski ve en üretken markalarından biri. 40+ tematik kanal tek abonelikle erişilebilir durumda.\n\nİçerikler 4K destekli; haftalık güncellemeler düzenli. Mobile app ve offline indirme mevcut.\n\nDeneme paketi ve uzun süreli üyelik indirimleri ile giriş maliyeti makul.",
                'pros' => [
                    '40+ tematik kanal',
                    '4K Ultra HD içerik',
                    'Düzenli haftalık güncellemeler',
                    'Mobil uygulama mevcut',
                    'Reklamsız izleme',
                ],
                'cons' => [
                    'Bazı eski içerikler düşük çözünürlüklü',
                    'Otomatik yenileme dikkat gerektiriyor',
                ],
            ],
            'SpiceVids' => [
                'tagline' => 'Çoklu stüdyo paketleri sunan premium platform',
                'rating' => 4.30,
                'review_long' => "SpiceVids, birden çok premium stüdyoya tek abonelikle erişim sunan bir agregator platform. Brazzers, Reality Kings, Mofos gibi büyük stüdyolar entegre.\n\nİçerik kalitesi yüksek, oyuncu yelpazesi geniş. Arayüz temiz, kategori navigasyonu iyi.\n\nFiyatlandırma esnek; aylık veya yıllık paketler arasında seçim yapılıyor.",
                'pros' => [
                    'Birden çok büyük stüdyo tek abonelikte',
                    'Detaylı oyuncu profilleri',
                    'Esnek fiyatlandırma',
                    'Mobil uyumlu',
                ],
                'cons' => [
                    'Bazı stüdyolar zaman zaman pakete dahil değil',
                    'İptal süreci biraz karmaşık',
                ],
            ],
            'I Know That Girl' => [
                'tagline' => 'Gerçek partner çekimleri tarzında premium içerik',
                'rating' => 4.20,
                'review_long' => "I Know That Girl, gerçekçi ve POV ağırlıklı premium içerikleriyle bilinen bir stüdyo. Çekimler genellikle ev ortamında, gerçek çift hissi verecek şekilde tasarlanmış.\n\nMindGeek altyapısında; aboneliğiniz aynı zamanda diğer ortak stüdyolara da erişim sağlıyor.\n\nVideo kalitesi 4K, indirme desteği var.",
                'pros' => [
                    'Gerçekçi POV çekimler',
                    '4K kalite',
                    'MindGeek ortak ağı erişimi',
                ],
                'cons' => [
                    'Tek tema, çeşitlilik sınırlı',
                    'Yeni içerik üretim hızı orta',
                ],
            ],
            'LetsDoeIt' => [
                'tagline' => 'Avrupa odaklı premium prodüksiyonlar',
                'rating' => 4.30,
                'review_long' => "LetsDoeIt, özellikle Avrupalı oyuncularla yapılan yüksek kaliteli prodüksiyonlarıyla öne çıkıyor. Estetik kamera kullanımı ve sinematik çekimleriyle dikkat çekiyor.\n\nKanal sayısı orta; ama her kanalda içerik kalitesi yüksek tutulmuş. 4K standart.\n\nMobile app yok ama tarayıcı deneyimi optimize.",
                'pros' => [
                    'Sinematik kalite prodüksiyon',
                    'Avrupalı oyuncu yelpazesi',
                    '4K standart',
                    'Düzenli güncelleme',
                ],
                'cons' => [
                    'Mobil uygulaması yok',
                    'Kanal çeşitliliği rakiplere göre dar',
                ],
            ],
            'AdultTime' => [
                'tagline' => 'Netflix tarzı yetişkin streaming servisi',
                'rating' => 4.60,
                'review_long' => "AdultTime, premium yetişkin streaming sektörünün en yenilikçi platformu. Netflix benzeri bir arayüz, dizi formatında orijinal yapımlar, geniş içerik kütüphanesi sunuyor.\n\n50.000+ video, 280+ tematik kanal, orijinal dizi ve film prodüksiyonları mevcut. 4K destekli, Chromecast/AirPlay var.\n\nMobil ve TV uygulamaları full özellikli; offline indirme mevcut.",
                'pros' => [
                    'Netflix benzeri modern arayüz',
                    'Orijinal dizi ve film prodüksiyonları',
                    '50.000+ video kütüphanesi',
                    'Smart TV ve mobil uygulamalar',
                    'Cast ve offline indirme',
                ],
                'cons' => [
                    'İçerik bolluğu seçim yorgunluğu yaratabiliyor',
                    'Aylık ücret üst-orta seviye',
                ],
            ],
            'FapHouse' => [
                'tagline' => 'İçerik üreticisi destekli premium platform',
                'rating' => 4.20,
                'review_long' => "FapHouse, hem büyük stüdyo içerikleri hem bağımsız üretici videolarını barındıran hibrit bir premium platform. Üreticilere doğrudan ödeme modeli güçlü.\n\nArayüz modern, kategori sistemi detaylı. Mobil app yok ama responsive site çok iyi.\n\nFiyatlandırma esnek; tek tek video da satın alınabiliyor, abonelik şart değil.",
                'pros' => [
                    'Esnek fiyatlandırma (video başı + abonelik)',
                    'Bağımsız üreticileri destekleyen model',
                    'Modern arayüz',
                    'Hem mainstream hem niche içerik',
                ],
                'cons' => [
                    'Mobil uygulaması yok',
                    'Bazı üretici videoları pahalı',
                ],
            ],
            'HentaiedPRO' => [
                'tagline' => 'Hentai temalı live-action premium prodüksiyon',
                'rating' => 4.10,
                'review_long' => "HentaiedPRO, hentai estetiğini gerçek oyuncu çekimleriyle birleştiren bir niş premium platform. Kostüm, makyaj ve dekor anime tarzında.\n\nÜretim sayısı sınırlı ama her video özenle prodüksiyonlu. Kanal yapısı ve hikaye dizisi formatı kullanılıyor.\n\nNiş bir izleyici kitlesine hitap ediyor; ana stüdyo formatları arıyorsanız bu site sizin için olmayabilir.",
                'pros' => [
                    'Benzersiz hentai-cosplay konsepti',
                    'Yüksek prodüksiyon değeri',
                    'Hikaye dizileri',
                ],
                'cons' => [
                    'Niş içerik, herkese hitap etmez',
                    'Üretim hızı yavaş',
                ],
            ],
            'TeamSkeet' => [
                'tagline' => 'Genç oyuncu ağırlıklı premium ağ',
                'rating' => 4.40,
                'review_long' => "TeamSkeet, 30+ kanalı içinde barındıran büyük premium ağ. Genç ve yeni keşfedilen oyuncularıyla tanınıyor.\n\nİçerik kalitesi yüksek, 4K standart. Haftalık güncellemeler düzenli.\n\nMobile responsive site iyi; ayrı app yok ama tarayıcıdan sorunsuz kullanılıyor.",
                'pros' => [
                    '30+ tematik kanal',
                    'Yeni oyuncu keşfi konseptinde güçlü',
                    '4K standart',
                    'Düzenli haftalık güncelleme',
                ],
                'cons' => [
                    'Mobil uygulama yok',
                    'Kanal organizasyonu karışık',
                ],
            ],

            // ===== NSFW AI Siteleri =====
            'Fapify' => [
                'tagline' => 'Yeni nesil AI porno üretim platformu',
                'rating' => 4.10,
                'review_long' => "Fapify, hızla büyüyen AI porno üretim platformlarından biri. Karakter oluşturma, görsel üretimi ve kısa video çıktısı destekliyor.\n\nArayüz oldukça temiz, başlangıç hızlı. Ücretsiz krediyle başlanıyor.\n\nYeni platform olduğu için bazı özellikler henüz olgunlaşmamış ama hızlı geliştirme döngüsü var.",
                'pros' => [
                    'Modern ve temiz arayüz',
                    'Hızlı geliştirme döngüsü',
                    'Ücretsiz deneme kredisi',
                ],
                'cons' => [
                    'Bazı özellikler henüz beta',
                    'Premium fiyatlandırma sürekli değişiyor',
                ],
            ],
            'NudeAI' => [
                'tagline' => 'AI ile sıfırdan görsel üretimi odaklı araç',
                'rating' => 3.90,
                'review_long' => "NudeAI, AI tabanlı yetişkin görsel üretim aracı. Prompt yazıyorsunuz, AI görsel oluşturuyor.\n\nKarakter tutarlılığı orta seviyede; aynı karakterin farklı görselleri çekilmek istendiğinde sapma olabiliyor.\n\nKredi sistemi var, ücretsiz kullanım sınırlı.",
                'pros' => [
                    'Hızlı görsel üretimi',
                    'Çoklu stil seçeneği',
                    'Anonim kullanım',
                ],
                'cons' => [
                    'Karakter tutarlılığı sorunlu',
                    'Kredi sistemi pahalı',
                ],
            ],
            'XUndress' => [
                'tagline' => 'Fotoğraf düzenleme odaklı AI tool',
                'rating' => 3.70,
                'review_long' => "XUndress, yüklenen görseller üzerinde AI tabanlı düzenleme yapan bir araç.\n\nÖnemli uyarı: yalnızca rıza alınmış görseller ile kullanılmalı. İzinsiz görsel düzenleme yasalara aykırı ve etik dışıdır.\n\nÇıktı kalitesi orta seviyede; rakipler kadar gelişmiş değil.",
                'pros' => [
                    'Hızlı işleme',
                    'Anonim erişim',
                ],
                'cons' => [
                    'Rıza dışı kullanım yasak',
                    'Çıktı kalitesi rakiplere göre düşük',
                ],
            ],
            'CreateHottie' => [
                'tagline' => 'Karakter oluşturma odaklı AI platform',
                'rating' => 4.00,
                'review_long' => "CreateHottie, AI ile sıfırdan yetişkin karakter ve görsel oluşturma platformu. Detaylı tercih ayarları sunuyor.\n\nKarakter kütüphanesi kaydedilebiliyor; aynı karakterin farklı pozları için tutarlılık iyi.\n\nÜcretsiz kullanım sınırlı; premium ile sınırsız üretim ve yüksek çözünürlük açılıyor.",
                'pros' => [
                    'Detaylı karakter özelleştirme',
                    'Karakter tutarlılığı iyi',
                    'Karakter kütüphanesi kaydetme',
                ],
                'cons' => [
                    'Ücretsiz limit oldukça düşük',
                    'Üretim süresi zaman zaman uzun',
                ],
            ],
            'Nudiva' => [
                'tagline' => 'Sade arayüzlü AI görsel üretici',
                'rating' => 3.90,
                'review_long' => "Nudiva, AI tabanlı yetişkin görsel üretimi sunan, sade tasarımlı bir platform.\n\nArayüz minimal; başlangıç hızlı. Prompt yazıp görsel alıyorsunuz.\n\nÖzelleştirme rakiplere göre daha sınırlı; ana özellik hız ve basitlik.",
                'pros' => [
                    'Hızlı ve sade kullanım',
                    'Minimal öğrenme eğrisi',
                ],
                'cons' => [
                    'Özelleştirme sınırlı',
                    'İleri kullanıcılar için yetersiz',
                ],
            ],
            'Nudify AI' => [
                'tagline' => 'Çoklu stil destekli AI fotoğraf düzenleme',
                'rating' => 3.80,
                'review_long' => "Nudify AI, fotoğraf düzenleme tarzında çalışan bir AI platformu. Çeşitli stil seçenekleriyle çıktı verebiliyor.\n\nYine uyarı: rıza alınmış görseller dışında kullanım yasal ve etik açıdan sakıncalıdır.\n\nÇıktı kalitesi orta-iyi seviye; özelleştirme seçenekleri rakiplere göre fazla.",
                'pros' => [
                    'Çoklu stil seçeneği',
                    'Anonim kullanım',
                    'Orta-iyi çıktı kalitesi',
                ],
                'cons' => [
                    'Rıza dışı kullanım yasak',
                    'Kredi sistemi pahalı',
                ],
            ],
            'Undress XXX' => [
                'tagline' => 'Hızlı işleme odaklı AI fotoğraf aracı',
                'rating' => 3.60,
                'review_long' => "Undress XXX, hızlı işleme öne çıkan bir AI fotoğraf düzenleme aracı.\n\nKullanıcı sorumluluğu kritik: yalnızca kendi görseliniz veya rızalı görsellerle kullanılmalı.\n\nÖzellik seti sınırlı; ana avantaj hız.",
                'pros' => [
                    'Çok hızlı işleme',
                    'Basit arayüz',
                ],
                'cons' => [
                    'Yasal ve etik kullanım sorumluluğu kullanıcıda',
                    'Özellik seti dar',
                ],
            ],
            'NudeFab' => [
                'tagline' => 'Çoklu stil ve karakter destekli AI tool',
                'rating' => 3.90,
                'review_long' => "NudeFab, hem yeni karakter oluşturma hem mevcut görsel düzenleme sunan hibrit bir AI platformu.\n\nKarakter kütüphanesi var; favori karakterlerinizi saklayabilirsiniz. Çıktı tutarlılığı orta seviye.\n\nKredi sistemi standart; ücretsiz başlangıç kredisi var.",
                'pros' => [
                    'Hem karakter üretimi hem görsel düzenleme',
                    'Karakter kütüphanesi',
                    'Çoklu stil',
                ],
                'cons' => [
                    'Çıktı tutarlılığı zaman zaman düşük',
                    'Premium fiyatı yüksek',
                ],
            ],

            // ===== AI Porno Üreticileri =====
            'Playboy' => [
                'tagline' => 'Klasik markanın AI alanındaki adımı',
                'rating' => 4.20,
                'review_long' => "Playboy markası AI alanında özelleşmiş bir platform. Klasik estetiğini koruyarak modern AI üretim teknolojileriyle birleştiriyor.\n\nÇıktı kalitesi yüksek; karakter tutarlılığı diğer rakiplere göre iyi. Marka değeri sayesinde profesyonel hissi.\n\nFiyatlandırma orta-üst seviyede; premium üyelik gerekli.",
                'pros' => [
                    'Tanınmış marka ve estetik',
                    'Yüksek çıktı kalitesi',
                    'İyi karakter tutarlılığı',
                ],
                'cons' => [
                    'Ücretsiz erişim çok kısıtlı',
                    'Premium fiyatı yüksek',
                ],
            ],
            'SugarGenBox' => [
                'tagline' => 'Stil seçenekleri zengin AI görsel üretici',
                'rating' => 4.00,
                'review_long' => "SugarGenBox, geniş stil yelpazesiyle (anime, gerçekçi, fantezi, vb.) AI görsel üretimi sunan bir platform.\n\nKarakter özelleştirme detaylı; saç, vücut, kıyafet, ortam ayrı kontrol ediliyor.\n\nÜcretsiz başlangıç kredisi var; premium ile günlük sınırsız üretim.",
                'pros' => [
                    'Geniş stil yelpazesi',
                    'Detaylı özelleştirme',
                    'Toplulukla paylaşım',
                ],
                'cons' => [
                    'Üretim süresi orta-uzun',
                    'Mobil arayüz biraz zayıf',
                ],
            ],
            'LusyChat AI' => [
                'tagline' => 'Sohbet artı görsel üretim hibrit platform',
                'rating' => 4.00,
                'review_long' => "LusyChat AI, sohbet üzerine kurulu ama görsel üretimi de destekleyen bir AI platformu.\n\nKarakterler hem mesajlaşıyor hem talep üzerine kendi görsellerini üretebiliyor. Akıcı entegrasyon.\n\nÜcretsiz kullanım var ama sınırlı; premium ile sınırsız mesaj + görsel.",
                'pros' => [
                    'Sohbet ve görsel birlikte',
                    'Akıcı karakter entegrasyonu',
                    'Hızlı yanıt süresi',
                ],
                'cons' => [
                    'Görsel kalitesi rakiplere göre orta',
                    'Premium ile ciddi farklılık var',
                ],
            ],
            'KissyVid' => [
                'tagline' => 'Kısa AI video üretimine odaklı',
                'rating' => 3.90,
                'review_long' => "KissyVid, sadece görsel değil kısa AI video üretimine odaklanan yenilikçi bir platform.\n\nVideo süresi 3-10 saniye arası; animasyon kalitesi henüz erken aşamada ama hızla iyileşiyor.\n\nKredi sistemi var; video üretimi görsele göre daha pahalı kredi tüketiyor.",
                'pros' => [
                    'AI video üretimi',
                    'Yenilikçi yaklaşım',
                    'Çoklu sahne desteği',
                ],
                'cons' => [
                    'Video kalitesi henüz erken aşamada',
                    'Video başına kredi maliyeti yüksek',
                ],
            ],
            'Seduced AI' => [
                'tagline' => 'Hızlı görsel üretimi odaklı AI',
                'rating' => 4.10,
                'review_long' => "Seduced AI, hız ve volüm odaklı bir AI görsel üretim platformu. Tek tıkla seri görseller üretebiliyorsunuz.\n\nKarakter çeşitliliği iyi; stil seçenekleri zengin. Topluluk paylaşım sayfası aktif.\n\nÜcretsiz limit cömert; premium ile sınırsız ve yüksek çözünürlük.",
                'pros' => [
                    'Hızlı toplu üretim',
                    'Zengin stil seçenekleri',
                    'Cömert ücretsiz limit',
                    'Aktif topluluk',
                ],
                'cons' => [
                    'Detay özelleştirme rakiplere göre dar',
                    'Yüksek çözünürlük için premium gerek',
                ],
            ],
            'DPNode AI' => [
                'tagline' => 'Modüler tasarımlı AI üretim aracı',
                'rating' => 3.80,
                'review_long' => "DPNode AI, görsel üretim sürecini modüler adımlara bölen teknik bir platform. İleri kullanıcılar için detaylı parametre kontrolü sunuyor.\n\nNew başlangıçlar için öğrenme eğrisi var; ama bir kez öğrenildiğinde son derece güçlü.\n\nKendi modellerinizi yükleme ve ince ayar yapma özelliği var.",
                'pros' => [
                    'Modüler ve esnek üretim akışı',
                    'Detaylı parametre kontrolü',
                    'Kendi model ince ayarı',
                ],
                'cons' => [
                    'Öğrenme eğrisi dik',
                    'Yeni kullanıcılar için karmaşık',
                ],
            ],
            'CreatePorn' => [
                'tagline' => 'Kendi içeriğinizi üretmek için AI tool',
                'rating' => 3.90,
                'review_long' => "CreatePorn, AI ile yetişkin içerik üretmeyi vaad eden direkt bir platform. Arayüz sade; prompt yazıp görsel alıyorsunuz.\n\nKarakter tutarlılığı orta; geliştirilmeye açık.\n\nKredi sistemi standart; düzenli kullanıcılar için abonelik avantajlı.",
                'pros' => [
                    'Sade ve direkt arayüz',
                    'Hızlı başlangıç',
                ],
                'cons' => [
                    'Karakter tutarlılığı orta',
                    'Özelleştirme seçenekleri sınırlı',
                ],
            ],
            'LeakifyHub' => [
                'tagline' => 'AI tabanlı görsel paylaşım platformu',
                'rating' => 3.70,
                'review_long' => "LeakifyHub, AI üretimi yetişkin görsellerin paylaşıldığı ve üretildiği bir hibrit platform. Topluluk önemli rol oynuyor.\n\nÖnemli not: platform üzerinde paylaşılan tüm görseller AI üretimi olmalı, gerçek kişilerin görselleri rıza dışı paylaşımı yasak.\n\nÜretim aracı yerleşik; veya başka araçlarda ürettiğiniz görselleri yükleyebiliyorsunuz.",
                'pros' => [
                    'Topluluk paylaşım kütüphanesi',
                    'AI üretim aracı entegre',
                    'Kategori ve etiketleme detaylı',
                ],
                'cons' => [
                    'Topluluk moderasyonu zayıf olabiliyor',
                    'Üretim aracı rakiplere göre basit',
                ],
            ],

            // ===== Ücretsiz OnlyFans Hesapları =====
            'Skylar Mae' => [
                'tagline' => 'Düzenli içerik üretimiyle popüler OF üreticisi',
                'rating' => 4.40,
                'review_long' => "Skylar Mae, OnlyFans platformunda düzenli içerik üretimi ve aboneleriyle etkileşimiyle dikkat çeken popüler bir içerik üreticisi.\n\nHesap ücretsiz takip edilebiliyor; özel içerikler için bahşiş veya PPV (pay-per-view) sistemi kullanılıyor.\n\nKaliteli prodüksiyon, profesyonel çekimler ön planda.",
                'pros' => [
                    'Düzenli içerik üretimi',
                    'Aboneleriyle aktif etkileşim',
                    'Yüksek prodüksiyon kalitesi',
                ],
                'cons' => [
                    'En kaliteli içerik PPV gerektiriyor',
                    'Mesajlara dönüş bekleme süresi olabilir',
                ],
            ],
            'Luna Star' => [
                'tagline' => 'Mainstream ve OF içerik üreticisi',
                'rating' => 4.30,
                'review_long' => "Luna Star, hem mainstream yetişkin stüdyolarda hem OnlyFans hesabında aktif bir performer.\n\nOnlyFans hesabı özel içerikler ve abonelerle direkt etkileşim için kullanılıyor. Ücretsiz takip mevcut.\n\nİçerik kalitesi profesyonel seviyede; düzenli güncellemeler.",
                'pros' => [
                    'Profesyonel arka plan',
                    'Düzenli özel içerik',
                    'Aktif abone etkileşimi',
                ],
                'cons' => [
                    'Premium içerik ek ödeme gerektiriyor',
                ],
            ],
            'Olivia Austinx' => [
                'tagline' => 'Etkileşim odaklı OF üreticisi',
                'rating' => 4.20,
                'review_long' => "Olivia Austinx, abonelerle yüksek etkileşim sergileyen aktif bir OnlyFans üreticisi. Mesaj dönüşleri hızlı.\n\nÜcretsiz takip seçeneği var; özel içerikler için PPV.\n\nİçerik üretim sıklığı düzenli.",
                'pros' => [
                    'Hızlı mesaj yanıtları',
                    'Düzenli içerik akışı',
                    'Etkileşim ağırlıklı',
                ],
                'cons' => [
                    'Özel video PPV ücretli',
                ],
            ],
            'Sam' => [
                'tagline' => 'Yeni nesil OF içerik üreticisi',
                'rating' => 4.10,
                'review_long' => "Sam, son dönemde popülerleşen, içerik üretimi ve marka oluşturma konusunda profesyonel yaklaşımıyla dikkat çeken bir OnlyFans creator'ı.\n\nÜcretsiz takip mevcut; özel içerikler abone seviyesine göre değişiyor.\n\nMarka iletişimi ve sosyal medya entegrasyonu güçlü.",
                'pros' => [
                    'Modern ve profesyonel iletişim',
                    'Düzenli içerik',
                    'Çoklu sosyal medya entegrasyonu',
                ],
                'cons' => [
                    'En özel içerik ek ödeme gerektiriyor',
                ],
            ],
            'Eva Elfie' => [
                'tagline' => 'En çok takip edilen OF üreticilerinden',
                'rating' => 4.60,
                'review_long' => "Eva Elfie, hem mainstream sektörde hem OnlyFans'ta dünya çapında milyonlarca takipçisi olan bir performer. Sektörün en üst düzey isimlerinden.\n\nİçerik kalitesi sinematik; düzenli güncelleme akışı var. Abonelerle etkileşim profesyonel ve hızlı.\n\nÜcretsiz takip mevcut; özel ve premium içerikler için abonelik seviyeleri var.",
                'pros' => [
                    'Sektörün üst düzey ismi',
                    'Sinematik kalite içerik',
                    'Düzenli ve sık güncelleme',
                    'Profesyonel abone yönetimi',
                ],
                'cons' => [
                    'Üst seviye abonelik aylık ücret istiyor',
                ],
            ],

            // ===== Seks İlişki Siteleri =====
            'AdultFriendFinder' => [
                'tagline' => 'En eski ve geniş yetişkin tanışma platformu',
                'rating' => 4.10,
                'review_long' => "AdultFriendFinder, 1990'lardan bu yana faaliyet gösteren, dünyanın en büyük yetişkin tanışma sitelerinden. Kullanıcı tabanı çok geniş.\n\nProfil sistemi detaylı; tercih ve fantezi belirtme alanları zengin. Mesajlaşma ve canlı yayın özellikleri entegre.\n\nÜyelik premium odaklı; ücretsiz kullanım sınırlı.",
                'pros' => [
                    'Çok geniş kullanıcı tabanı',
                    'Detaylı profil ve eşleştirme',
                    'Canlı yayın ve sohbet entegre',
                    'Uzun yıllık güven',
                ],
                'cons' => [
                    'Ücretsiz kullanım çok sınırlı',
                    'Arayüz eski hissi veriyor',
                ],
            ],
            'BeNaughty' => [
                'tagline' => 'Hızlı flört ve kısa vadeli buluşma odaklı',
                'rating' => 3.90,
                'review_long' => "BeNaughty, kısa vadeli ilişkiler ve flört arayan kullanıcılara odaklanan bir tanışma platformu. Hızlı kayıt ve hızlı eşleştirme öne çıkıyor.\n\nProfil oluşturma sade; uzun anketler yok. Mesajlaşma premium üyelik gerektiriyor.\n\nMobile uyumu iyi; uygulama mevcut.",
                'pros' => [
                    'Hızlı kayıt süreci',
                    'Sade kullanıcı arayüzü',
                    'Mobil uygulama',
                ],
                'cons' => [
                    'Mesajlaşma için premium şart',
                    'Sahte profil oranı dikkat gerektiriyor',
                ],
            ],
            'AshleyMadison' => [
                'tagline' => 'Evli kullanıcılar için kontrollü tanışma',
                'rating' => 4.20,
                'review_long' => "AshleyMadison, evli veya ilişkide olan kullanıcıların gizli flörtleri için tasarlanmış uzun yıllık bir platform. Gizlilik odağı çok güçlü.\n\nFotoğraf maskeleme, gizli mesajlaşma ve panik butonu gibi özelliklerle kullanıcı gizliliğine yatırım yapılmış.\n\nKredi sistemi ile çalışıyor; aylık abonelik yerine işlem başına ödeme.",
                'pros' => [
                    'Yüksek gizlilik odağı',
                    'Fotoğraf maskeleme özelliği',
                    'Panik buton ve veri silme',
                    'Yıllık güven',
                ],
                'cons' => [
                    'Etik açıdan tartışmalı kullanım modeli',
                    'Kredi paketleri zaman zaman pahalı',
                ],
            ],
            'Fling' => [
                'tagline' => 'Genç odaklı hızlı buluşma platformu',
                'rating' => 3.80,
                'review_long' => "Fling, daha genç kullanıcı tabanına hitap eden hızlı tanışma sitesi. Profil sistemi sade ve görsel ağırlıklı.\n\nÜcretsiz versiyonda izleme yapılabiliyor; iletişim için premium gerekli.\n\nMobile odaklı tasarım; klasik tinder-vari kaydırma mantığı yok ama modern.",
                'pros' => [
                    'Genç kullanıcı tabanı',
                    'Sade ve görsel ağırlıklı profil',
                    'Mobile odaklı',
                ],
                'cons' => [
                    'İletişim için premium şart',
                    'Bazı bölgelerde kullanıcı yoğunluğu düşük',
                ],
            ],
            'FuckBook' => [
                'tagline' => 'Facebook benzeri arayüzle yetişkin tanışma',
                'rating' => 3.70,
                'review_long' => "FuckBook, sosyal ağ tarzı arayüzüyle dikkat çeken bir yetişkin tanışma platformu. Profil ve feed mantığı tanıdık.\n\nKullanıcı tabanı orta seviye; popüler bölgelerde aktif, niş bölgelerde sınırlı.\n\nMesajlaşma ücretsiz hesaplarda da bir kontenjana kadar mümkün.",
                'pros' => [
                    'Sosyal ağ tarzı tanıdık arayüz',
                    'Ücretsiz hesapta sınırlı mesajlaşma',
                    'Profil bazlı feed sistemi',
                ],
                'cons' => [
                    'Bölgesel kullanıcı yoğunluğu değişken',
                    'Sahte profil filtreleme zayıf',
                ],
            ],

            // ===== Türkçe Porno Siteleri (placeholder örnek veri) =====
            'Türk Erotik' => [
                'tagline' => 'Türkçe dil desteğiyle yasal yetişkin içerik dizini',
                'rating' => 3.80,
                'review_long' => "Türk Erotik, Türkçe arayüz ve dil desteğiyle yayın yapan örnek bir platform. Türk kullanıcılarının ana dilinde yasal yetişkin içerik tarayabilmesini hedefliyor.\n\nİçerik tamamen rıza temelli üreticilerden alınıyor; ifşa, çocuk istismarı veya rıza dışı paylaşım kabul edilmiyor.\n\nNot: Bu kart örnek/placeholder veridir; gerçek bir Türkçe yetişkin platformu eklendiğinde güncellenecektir.",
                'pros' => [
                    'Türkçe arayüz',
                    'Yasal ve rıza temelli içerik politikası',
                ],
                'cons' => [
                    'Placeholder veri - gerçek site değil',
                ],
            ],
            'İstanbul Cam' => [
                'tagline' => 'Türkçe altyazılı ve yerelleştirilmiş canlı yayın örneği',
                'rating' => 3.70,
                'review_long' => "İstanbul Cam, yerelleştirilmiş canlı kamera platformu örneği. Türkçe konuşan modellere yer veren ve Türkçe altyazı destekli yayınlar sunan bir konsept.\n\nKısıtlamalar: Tüm modeller 18+ ve rızalı olmak zorunda; ifşa yayını yasak.\n\nNot: Placeholder veri.",
                'pros' => [
                    'Türkçe konuşan model konsepti',
                    'Yerelleştirilmiş arayüz',
                ],
                'cons' => [
                    'Placeholder veri - gerçek site değil',
                ],
            ],
            'Türkçe Tube' => [
                'tagline' => 'Türkçe başlık ve etiketleme örnek tube',
                'rating' => 3.60,
                'review_long' => "Türkçe Tube, Türkçe başlık, açıklama ve kategori etiketleriyle düzenlenmiş örnek bir tube. SEO açısından Türkçe kullanıcı için optimize edilmesi hedeflenmiş.\n\nİçerik politikası: Yalnızca rızalı ve yasal yetişkin içerik. NCII (rıza dışı paylaşım) kesinlikle yasak.\n\nNot: Placeholder veri.",
                'pros' => [
                    'Türkçe SEO optimizasyonu',
                    'Türkçe etiketleme',
                ],
                'cons' => [
                    'Placeholder veri - gerçek site değil',
                ],
            ],
        ];

        foreach ($reviews as $name => $fields) {
            Site::where('name', $name)->update($fields);
        }
    }
}

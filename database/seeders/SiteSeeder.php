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
                'review_long' => "PornHub, ücretsiz porno tube siteleri kategorisinin tartışmasız lideri. Milyonlarca video, binlerce stüdyo ortaklığı ve düzgün bir arama deneyimi sunan platform, yetişkin internetinin en bilinen markası haline geldi.\n\nSitenin en güçlü yanı içerik çeşitliliği — amatör çekimlerden büyük prodüksiyonlara, kategori bazlı koleksiyonlardan canlı yayınlara kadar her şey burada. Premium aboneliği almasanız bile ücretsiz olarak HD kalitede izleyebileceğiniz binlerce video var.\n\nReklam yoğunluğu son dönemde arttı ama bir VPN veya reklam engelleyici ile bu sorun büyük ölçüde çözülüyor. Türkiye'den erişim için VPN gerekli.",
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
                    'Reklam yok — temiz arayüz',
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
                'review_long' => "Candy AI, son birkaç yılda hızla yükselen AI tabanlı yetişkin sohbet ve içerik üretici platformlarının önde gelenlerinden. Kullanıcı kendi sanal karakterini tasarlıyor — saç rengi, vücut tipi, kişilik özellikleri seçilebiliyor — ve bu karakterle metin, sesli ve görüntülü etkileşime giriyor.\n\nUygulama tamamen rıza temelli yapay zeka karakterleriyle çalışıyor; gerçek bir kişiyi simüle etmiyor. Görsel kalite hızla iyileşiyor, sohbet doğal ve uzun süreli hafıza özelliği sayesinde karakter sizi hatırlıyor.\n\nÜcretsiz versiyonda günlük mesaj limiti var; premium aboneler sınırsız mesaj, sınırsız görsel üretimi ve ses mesajı gönderme özelliklerine erişiyor.",
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
                'review_long' => "CamSoda, canlı yayın yapan modellerle gerçek zamanlı etkileşim sunan bir webcam platformu. Sektörün diğer büyük oyuncularına göre daha agresif bir bonus sistemi ve düşük token fiyatlarıyla dikkat çekiyor.\n\nPlatformun en sevilen özelliği ücretsiz olarak izlenebilen geniş bir genel yayın havuzu — kayıt olmadan bile birçok modeli izleyebiliyorsunuz. Token aldığınızda bahşiş bırakabiliyor, özel oda açabiliyor veya kontrollü oyuncak özelliklerine erişebiliyorsunuz.\n\nMobil deneyim oldukça akıcı, çok kameralı görünüm desteği var ve sık sık ünlü porno yıldızlarının özel yayınlarına ev sahipliği yapıyor.",
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
        ];

        foreach ($reviews as $name => $fields) {
            Site::where('name', $name)->update($fields);
        }
    }
}

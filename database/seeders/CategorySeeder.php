<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Ücretsiz Porno Tubeları',
                'slug' => 'ucretsiz-porno-tube',
                'subtitle' => 'Dünyanın en popüler porno tube sitelerini keşfet!',
                'icon' => 'play',
                'accent_color' => '#10B981',
                'button_label' => 'SİTE DAHA GÖR',
                'sort_order' => 10,
            ],
            [
                'name' => 'YZ Porno Siteleri',
                'slug' => 'yz-porno-siteleri',
                'subtitle' => 'Animasyonlu kadınların yapay zeka tarafından üretilen kendi porno görüntülerini oluşturun!',
                'icon' => 'sparkles',
                'accent_color' => '#3B82F6',
                'button_label' => 'SİTE DAHA GÖR',
                'sort_order' => 20,
            ],
            [
                'name' => 'Canlı Kamera Siteleri',
                'slug' => 'canli-kamera-siteleri',
                'subtitle' => 'Webcam kızlarıyla sohbet et, mastürbasyon izle, bahşiş bırak!',
                'icon' => 'video',
                'accent_color' => '#10B981',
                'button_label' => 'SİTE DAHA GÖR',
                'sort_order' => 30,
            ],
            [
                'name' => 'En İyi Premium Pornolar',
                'slug' => 'premium-porno',
                'subtitle' => 'Seksi kızlar ve porno yıldızlarının HD porno videolarını izle!',
                'icon' => 'crown',
                'accent_color' => '#F59E0B',
                'button_label' => 'SİTE DAHA GÖR',
                'sort_order' => 40,
            ],
            [
                'name' => 'NSFW AI Siteleri',
                'slug' => 'nsfw-ai-siteleri',
                'subtitle' => 'XXX fantezileri için yapay zeka platformları. Sorumlu bir şekilde ve rıza ile kullanın!',
                'icon' => 'robot',
                'accent_color' => '#8B5CF6',
                'button_label' => 'SİTE DAHA GÖR',
                'sort_order' => 50,
            ],
            [
                'name' => 'AI Porno Üreticileri',
                'slug' => 'ai-porno-ureticileri',
                'subtitle' => 'AI porno yapımcıları! Özel NSFW AI porno görüntüleri ve videoları anında oluşturun!',
                'icon' => 'film',
                'accent_color' => '#374151',
                'button_label' => 'SİTE DAHA GÖR',
                'sort_order' => 60,
            ],
            [
                'name' => 'Ücretsiz OnlyFans Hesapları',
                'slug' => 'ucretsiz-onlyfans',
                'subtitle' => 'En sevdiğiniz OnlyFans kızlarına abone olun, sohbet edin ve özel yapım NSFW içerik isteyin!',
                'icon' => 'heart',
                'accent_color' => '#0EA5E9',
                'button_label' => 'SİTE DAHA GÖR',
                'sort_order' => 70,
            ],
            [
                'name' => 'Seks İlişki Siteleri',
                'slug' => 'seks-iliski-siteleri',
                'subtitle' => 'Otuzbirden bıktın mı? Seks randevusu ayarla, gerçek aşkı sik!',
                'icon' => 'spark-heart',
                'accent_color' => '#EF4444',
                'button_label' => 'SİTE DAHA GÖR',
                'sort_order' => 80,
            ],
            [
                'name' => 'TikTok Porno Siteleri',
                'slug' => 'tiktok-porno',
                'subtitle' => 'NSFW kısa videolar - TikTok tarzı yetişkin akış!',
                'icon' => 'music',
                'accent_color' => '#000000',
                'button_label' => 'SİTE DAHA GÖR',
                'sort_order' => 90,
            ],
            [
                'name' => 'OnlyFans Porno Siteleri',
                'slug' => 'onlyfans-porno',
                'subtitle' => 'Sızdırılmamış, yasal OnlyFans içerik koleksiyonu siteleri.',
                'icon' => 'star',
                'accent_color' => '#06B6D4',
                'button_label' => 'SİTE DAHA GÖR',
                'sort_order' => 100,
            ],
            [
                'name' => 'VR Porno Siteleri',
                'slug' => 'vr-porno',
                'subtitle' => 'Sanal gerçeklik gözlüğünüzle yetişkin içerik deneyimi yaşayın!',
                'icon' => 'vr',
                'accent_color' => '#7C3AED',
                'button_label' => 'SİTE DAHA GÖR',
                'sort_order' => 110,
            ],
            [
                'name' => 'Premium Amatör Siteleri',
                'slug' => 'premium-amator',
                'subtitle' => 'Gerçek amatör içerik üreticilerini ve premium amatör siteleri keşfet!',
                'icon' => 'camera',
                'accent_color' => '#F472B6',
                'button_label' => 'SİTE DAHA GÖR',
                'sort_order' => 120,
            ],
            [
                'name' => 'Türkçe Porno Siteleri',
                'slug' => 'turkce-porno',
                'subtitle' => 'Türkçe dilinde içerik sunan rızalı yetişkin platformları.',
                'icon' => 'flag',
                'accent_color' => '#DC2626',
                'button_label' => 'SİTE DAHA GÖR',
                'sort_order' => 130,
            ],
        ];

        foreach ($categories as $cat) {
            Category::updateOrCreate(['slug' => $cat['slug']], $cat);
        }

        $this->seedSeoDescriptions();
    }

    protected function seedSeoDescriptions(): void
    {
        $descriptions = [
            'ucretsiz-porno-tube' => "Ücretsiz porno tube siteleri, milyonlarca yetişkin video içeriğine ücretsiz erişim sunan dünyanın en büyük platformlarıdır. PornHub, XVideos, xHamster gibi devler bu kategoride yer alır. HD ve 4K çözünürlük seçenekleri, milyonlarca video, detaylı kategori sistemi ve günlük yüklemelerle bu siteler yetişkin internetinin ana çekirdeğini oluşturur.\n\nListemizdeki tube siteleri içerik kütüphanesi büyüklüğüne, video kalitesine, reklam yoğunluğuna ve kullanıcı deneyimine göre sıralanmıştır. Türkiye'den erişim için VPN gerekli olabilir.",
            'yz-porno-siteleri' => "YZ (yapay zeka) porno siteleri, sanal AI karakterlerle metin, ses ve görüntülü etkileşim sunan yeni nesil yetişkin platformlarıdır. Candy AI, OurDream, SpicyChat gibi platformlar bu alanın önde gelenleridir. Karakter özelleştirme, uzun süreli sohbet hafızası ve görsel üretim entegrasyonu öne çıkan özelliklerdir.\n\nTüm platformlar rıza temelli AI karakterlerle çalışır; gerçek kişileri simüle etmez. Çoğu ücretsiz versiyon sunar, premium özellikler için aylık abonelik gerekir.",
            'canli-kamera-siteleri' => "Canlı kamera siteleri, modellerin gerçek zamanlı yayın yaptığı interaktif platformlardır. CamSoda, StripChat, LiveJasmin sektörün en büyük oyuncularıdır. Token sistemi ile bahşiş, özel oda, çoklu kamera ve VR desteği sunar.\n\nÜcretsiz olarak izlenebilen genel yayınların yanında, özel etkileşim için token paketleri alınır. Modeller dünya genelinden katılır; çoklu dil desteği yaygındır.",
            'premium-porno' => "Premium porno siteleri, profesyonel stüdyo prodüksiyonu, 4K kalite ve düzenli güncellemelerle aylık aboneliğe dayalı yetişkin platformlardır. Brazzers, BangBros, AdultTime gibi markalar bu kategoride yer alır.\n\nReklamsız izleme, mobil uygulama, offline indirme ve çoklu kanal erişimi premium üyeliğin getirdiği başlıca avantajlardır. Deneme paketleri ve uzun süreli üyelik indirimleri ile giriş maliyeti makul tutulabilir.",
            'nsfw-ai-siteleri' => "NSFW AI siteleri, yapay zeka ile yetişkin görsel ve içerik üretimi sunan platformlardır. Kullanıcılar prompt yazarak veya hazır şablonlardan görsel oluşturabilir.\n\nFotoğraf düzenleme özelliği sunan araçlarda rıza alınmış görseller kullanılması yasal ve etik zorunluluktur. Listemizdeki her araç bu uyarıyı kullanım şartlarında belirtir; izinsiz görsel düzenleme yasalara aykırıdır.",
            'ai-porno-ureticileri' => "AI porno üreticileri, sıfırdan özel yetişkin görsel ve video üretmeye odaklanan platformlardır. Karakter özelleştirme, stil seçimi ve toplulukla paylaşım özellikleri ile öne çıkar.\n\nÇıktı kalitesi ve karakter tutarlılığı bu platformlarda en kritik kalite kriterleridir. Aylık abonelik veya kredi sistemi ile ödeme yapılır; çoğunda ücretsiz başlangıç kredisi vardır.",
            'ucretsiz-onlyfans' => "Ücretsiz OnlyFans hesapları, abonelik olmadan da içeriklerine erişilebilen popüler içerik üreticilerini kapsar. Bu hesaplar genelde ücretsiz takip + PPV (pay-per-view) özel içerik modeliyle çalışır.\n\nÜreticiler düzenli güncelleme, abonelerle direkt mesajlaşma ve özel video gönderimi yapar. Eva Elfie, Luna Star, Skylar Mae gibi popüler isimler listemizde yer alır.",
            'seks-iliski-siteleri' => "Seks ilişki siteleri, yetişkinlerin tanışıp buluşmak için kullandığı yasal platformlardır. AdultFriendFinder, AshleyMadison, BeNaughty gibi platformlar bu kategoride yer alır.\n\nProfil bazlı eşleştirme, mesajlaşma, fotoğraf paylaşımı ve canlı sohbet özellikleri sunulur. Gizlilik odaklı tasarım, fotoğraf maskeleme ve veri silme gibi özellikler ön plandadır.",
            'tiktok-porno' => "TikTok porno siteleri, kısa video formatında NSFW içerik akışı sunan platformlardır. TikTok'un viral algoritmasına benzer şekilde kaydır-keşfet mantığıyla çalışır.\n\nİçerikler genelde 15-60 saniye arasındadır; ücretsiz izleme yaygındır. Mobile odaklı arayüzler ve düşey video formatı standarttır.",
            'onlyfans-porno' => "OnlyFans porno siteleri, içerik üreticilerinin OnlyFans hesaplarındaki yasal ve rızalı içeriklerini düzenleyen platformlardır. Sızdırılmış içerik barındırmaz; sadece üreticinin paylaşmayı kabul ettiği içerikler yer alır.\n\nKategori bazlı keşif, oyuncu profilleri ve OF link yönlendirmeleri ile çalışır. Her zaman üreticinin orijinal OF hesabına yönlendirme yapılır.",
            'vr-porno' => "VR porno siteleri, sanal gerçeklik gözlüğüyle 360 derece ve 180 derece formatlarda yetişkin içerik sunar. Meta Quest, PlayStation VR, Pico gibi cihazlarla uyumlu içerikler bulunur.\n\nVR pornoda çekim formatı, çözünürlük (4K-8K) ve kameranın gerçekçiliği önemlidir. Aylık abonelik ile aylık 50-100+ yeni video erişimi sunulur.",
            'premium-amator' => "Premium amatör siteleri, amatör görünümlü ama profesyonel kalitede prodüksiyonu olan içerik platformlarıdır. Gerçek çift, ev ortamı ve doğal sahneler ön planda yer alır.\n\nKurgu ve profesyonel ışıklandırma yerine doğallık ve gerçekçi yaklaşım tercih edilir. Aylık abonelikle erişim, indirme ve özel topluluk forumları sunulur.",
            'turkce-porno' => "Türkçe porno siteleri, Türkçe arayüz veya Türkçe başlık/etiketleme ile yayın yapan yetişkin platformlardır. Hedef kitlesi Türkiye ve Türkçe konuşan kullanıcılardır.\n\nNot: Listemizdeki tüm Türkçe sitelerin yasal ve rıza temelli içerik kuralına uyması zorunludur. Rıza dışı paylaşım (NCII), 18 yaş altı ya da kimlik ifşa içeriği kesinlikle kabul edilmez ve şikayet halinde anında kaldırılır.",
        ];

        foreach ($descriptions as $slug => $description) {
            Category::where('slug', $slug)->update([
                'description' => $description,
            ]);
        }
    }
}

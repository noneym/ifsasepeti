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
                'subtitle' => 'NSFW kısa videolar — TikTok tarzı yetişkin akış!',
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
    }
}

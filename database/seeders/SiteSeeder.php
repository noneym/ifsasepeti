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
    }
}

@section('title', 'ifsasepeti.com - Türkiye\'nin En İyi Yetişkin Site Dizini')
@section('description', 'En iyi premium pornolar, ücretsiz tube siteleri, canlı kameralar, AI üreticileri, OnlyFans ve seks ilişki platformları kalite sırasına göre incelenmiş. 1000+ site, Türkçe inceleme, güncel sıralama.')

@section('json_ld')
    @php
        $homeLd = [
            '@context' => 'https://schema.org',
            '@type' => 'CollectionPage',
            'name' => 'ifsasepeti.com - Yetişkin Site Dizini',
            'description' => 'Türkiye\'nin en kapsamlı yetişkin site dizini. Kategori bazlı inceleme ve sıralama.',
            'url' => url('/'),
            'inLanguage' => 'tr-TR',
            'isFamilyFriendly' => false,
            'mainEntity' => [
                '@type' => 'ItemList',
                'itemListElement' => $categories->map(fn ($c, $i) => [
                    '@type' => 'ListItem',
                    'position' => $i + 1,
                    'name' => $c->name,
                    'url' => route('category.show', $c->slug),
                ])->all(),
            ],
        ];
    @endphp
    <script type="application/ld+json">{!! json_encode($homeLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endsection

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 grid-cards-wrap">

    {{-- H1 visually-hidden for SEO --}}
    <h1 class="sr-only">ifsasepeti.com - Türkiye'nin En İyi Yetişkin Site Dizini ve İnceleme Platformu</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
        @foreach ($categories as $category)
            <livewire:category-card :category="$category" :key="'cat-'.$category->id" />
        @endforeach
    </div>

    {{-- SEO content block at the bottom --}}
    <section class="mt-10 prose prose-sm max-w-none text-ifsa-muted">
        <h2 class="text-base font-display font-bold text-ifsa-ink">ifsasepeti.com Hakkında</h2>
        <p>
            ifsasepeti.com, Türkiye'de yetişkin site dizini ihtiyacına en kapsamlı yanıtı sunan bir inceleme
            ve sıralama platformudur. Sitelerimizin tamamı yasal ve rıza temelli içerik kuralına uyar;
            rıza dışı paylaşım (NCII / "ifşa") ve 18 yaş altı içerik kesinlikle yer almaz.
        </p>
        <p>
            Listemizde yer alan {{ $categories->sum(fn($c) => $c->activeSites->count()) }}+ site, kalite,
            güncel içerik üretimi, kullanıcı deneyimi ve şeffaf ödeme politikalarına göre değerlendirilmiştir.
            Premium pornolar, ücretsiz tube siteleri, canlı kameralar, AI porno üreticileri, OnlyFans
            koleksiyonları, seks ilişki siteleri ve daha fazlasını kategori bazında inceleyebilirsiniz.
        </p>
        <p>
            Her site için Türkçe inceleme, artılar/eksiler, kullanıcı puanı ve güncel ekran görüntüsü
            sunuyoruz. Listemize site eklenmesi için <a href="{{ url('/link-degisimi') }}" class="text-ifsa-orange font-semibold">link değişimi</a>
            sayfamızı, şikayet için <a href="{{ url('/sikayet') }}" class="text-ifsa-orange font-semibold">şikayet kanalımızı</a>
            kullanabilirsiniz.
        </p>
        <p class="text-xs italic">
            <strong>18+ Uyarı:</strong> Bu site yalnızca 18 yaşından büyük kullanıcılar içindir.
        </p>
    </section>
</div>

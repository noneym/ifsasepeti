@extends('layouts.app')
@section('title', 'Link Değişimi - ifsasepeti.com')
@section('content')
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <h1 class="text-3xl font-display font-bold mb-4">Link Değişimi</h1>
        <p class="text-ifsa-muted leading-relaxed mb-4">
            Sitenize ifsasepeti.com linki ekleyin, biz de sitenizi dizinimize değerlendirip ekleyelim.
            Karşılıklı link değişimi için aşağıdaki bilgileri <a href="mailto:partner@ifsasepeti.com" class="text-ifsa-orange font-semibold">partner@ifsasepeti.com</a> adresine gönderin:
        </p>
        <ul class="list-disc list-inside text-ifsa-muted space-y-1">
            <li>Sitenizin adı ve URL'si</li>
            <li>Kategori önerisi</li>
            <li>Bizim linkimizin yerleştirildiği URL</li>
            <li>Kısa açıklama (1-2 cümle)</li>
        </ul>
    </div>
@endsection

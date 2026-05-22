@extends('layouts.app')
@section('title', 'Link Değişimi - ifsasepeti.com')
@section('description', 'ifsasepeti.com ile karşılıklı link değişimi başvurusu. Sitenizi premium dizinimize ekletin.')

@section('content')
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <nav class="text-xs text-ifsa-muted mb-4">
            <a href="{{ url('/') }}" class="hover:text-ifsa-orange">ifsasepeti</a>
            <span class="mx-1">›</span>
            <span class="text-ifsa-ink">Link Değişimi</span>
        </nav>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
            <div class="md:col-span-7">
                <h1 class="font-display font-extrabold text-3xl mb-3">Link Değişimi</h1>
                <p class="text-ifsa-muted mb-4">
                    Sitenize ifsasepeti.com linki ekleyin, biz de sitenizi inceleyip uygun kategoride dizinimize ekleyelim.
                    Karşılıklı, ücretsiz, kalıcı.
                </p>

                <h2 class="font-bold text-base mt-6 mb-2">📋 Gereksinimler</h2>
                <ul class="list-disc list-inside text-sm text-ifsa-muted space-y-1 mb-6">
                    <li>Site yasal ve rıza temelli yetişkin içerik sunmalı</li>
                    <li>Türkçe veya İngilizce dil desteği olmalı</li>
                    <li>SSL sertifikası bulunmalı (https://)</li>
                    <li>Sitenizde ifsasepeti.com linkini görünür bir yere yerleştirmiş olmalısınız</li>
                    <li>NCII / "ifşa" / 18 yaş altı içerik <strong class="text-rose-600">kabul edilmez</strong></li>
                </ul>

                <h2 class="font-bold text-base mt-6 mb-2">🔗 Bizim linkimiz</h2>
                <div class="bg-ifsa-bg border border-ifsa-border rounded-lg p-3 mb-2">
                    <code class="text-xs break-all">&lt;a href="https://ifsasepeti.com" target="_blank"&gt;ifsasepeti.com - En İyi Yetişkin Site Dizini&lt;/a&gt;</code>
                </div>
                <p class="text-xs text-ifsa-muted">
                    Bu HTML bloğunu sitenizin uygun bir bölümüne (footer, partnerler sayfası, vb.) yerleştirin.
                </p>

                <h2 class="font-bold text-base mt-6 mb-2">⏱️ Süreç</h2>
                <ol class="list-decimal list-inside text-sm text-ifsa-muted space-y-1">
                    <li>Sağdaki formu doldurun</li>
                    <li>3-7 iş günü içinde sitenizi inceleyelim</li>
                    <li>Onay verirsek sizi uygun kategoride listeleriz</li>
                    <li>Geri linkinizi 3 aylık dönemlerde otomatik doğrularız</li>
                </ol>
            </div>

            <div class="md:col-span-5">
                <livewire:link-exchange-form />
            </div>
        </div>
    </div>
@endsection

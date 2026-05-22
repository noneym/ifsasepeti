@extends('layouts.app')

@section('title', $category->name . ' - ifsasepeti.com')
@section('description', $category->subtitle ?? 'En iyi '.$category->name.' listesi - ifsasepeti.com')

@section('content')
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-6 grid-cards-wrap">
        <nav class="text-xs text-ifsa-muted mb-3">
            <a href="{{ url('/') }}" class="hover:text-ifsa-orange">Anasayfa</a>
            <span class="mx-1">/</span>
            <span class="text-ifsa-ink">{{ $category->name }}</span>
        </nav>

        <header class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                @include('partials.category-icon', ['icon' => $category->icon, 'color' => $category->accent_color])
                <h1 class="text-2xl sm:text-3xl font-display font-bold text-ifsa-ink">{{ $category->name }}</h1>
            </div>
            @if ($category->subtitle)
                <p class="text-ifsa-muted">{{ $category->subtitle }}</p>
            @endif
            @if ($category->description)
                <div class="prose prose-sm max-w-none mt-3">{!! nl2br(e($category->description)) !!}</div>
            @endif
        </header>

        <div class="card">
            <ol class="divide-y divide-ifsa-border">
                @foreach ($sites as $index => $site)
                    <li class="site-row !py-3">
                        <span class="num !text-sm">{{ $index + 1 }}.</span>
                        @if ($site->logo_emoji)
                            <span class="text-xl w-8 text-center leading-none">{{ $site->logo_emoji }}</span>
                        @else
                            <span class="w-8 h-8 rounded-full bg-ifsa-bg border border-ifsa-border flex items-center justify-center text-xs font-bold text-ifsa-muted">
                                {{ mb_substr($site->name, 0, 1) }}
                            </span>
                        @endif
                        <a href="{{ route('site.show', $site->slug) }}"
                           class="flex-1 font-semibold text-ifsa-ink hover:text-ifsa-orange truncate">
                            {{ $site->name }}
                        </a>
                        <div class="flex items-center gap-1.5">
                            @foreach ($site->badges as $badge)
                                <span class="badge {{ $badge['class'] }}">{{ $badge['label'] }}</span>
                            @endforeach
                        </div>
                        <a href="{{ route('site.go', $site->slug) }}"
                           target="_blank"
                           rel="noopener nofollow"
                           class="ml-3 hidden sm:inline-flex items-center px-3 py-1.5 rounded-lg bg-ifsa-orange text-white text-xs font-bold hover:bg-ifsa-red transition">
                            Siteye Git →
                        </a>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
@endsection

<!DOCTYPE html>
<html lang="tr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Yönetim') · ifsasepeti.com</title>

    <link rel="icon" type="image/png" href="{{ asset('img/logo-mark.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="min-h-screen bg-ifsa-bg font-sans antialiased text-ifsa-ink">

    @auth
        <div class="flex min-h-screen">
            {{-- Sidebar --}}
            <aside class="hidden md:flex md:flex-col w-60 bg-white border-r border-ifsa-border">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2 px-4 h-16 border-b border-ifsa-border">
                    <span class="relative inline-flex items-center justify-center h-9 w-9">
                        <span class="absolute inset-0 rounded-xl bg-gradient-to-br from-ifsa-yellow via-ifsa-orange to-ifsa-red rotate-[-6deg]"></span>
                        <img src="{{ asset('img/logo-mark.png') }}" class="relative h-7 w-7 object-contain">
                    </span>
                    <span class="font-display font-extrabold text-lg leading-none">
                        ifsa<span class="text-ifsa-orange">sepeti</span>
                    </span>
                </a>

                <nav class="flex-1 py-3 space-y-0.5 text-sm">
                    @php $current = request()->route()->getName(); @endphp
                    @foreach ([
                        ['admin.dashboard', '📊', 'Dashboard', null],
                        ['admin.sites', '🗂️', 'Siteler', null],
                        ['admin.categories', '🏷️', 'Kategoriler', null],
                        ['admin.link-exchanges', '🔗', 'Link Değişimleri', \App\Models\LinkExchange::where('status','pending')->count() ?: null],
                        ['admin.users', '👤', 'Kullanıcılar', null],
                    ] as [$route, $icon, $label, $badge])
                        @php $active = $current === $route; @endphp
                        <a href="{{ route($route) }}"
                           class="flex items-center gap-3 px-4 py-2.5 mx-2 rounded-lg {{ $active ? 'bg-ifsa-orange/10 text-ifsa-orange font-bold' : 'hover:bg-ifsa-bg text-ifsa-ink' }}">
                            <span class="text-base">{{ $icon }}</span>
                            <span class="flex-1">{{ $label }}</span>
                            @if ($badge)
                                <span class="inline-flex items-center justify-center min-w-5 h-5 px-1.5 rounded-full bg-rose-500 text-white text-[10px] font-bold">{{ $badge }}</span>
                            @endif
                        </a>
                    @endforeach
                </nav>

                <div class="border-t border-ifsa-border p-3">
                    <a href="{{ url('/') }}" target="_blank" class="block text-xs text-ifsa-muted hover:text-ifsa-orange mb-2">
                        ↗ Siteyi aç
                    </a>
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="text-xs text-ifsa-muted hover:text-rose-600">
                            ↪ Çıkış ({{ auth()->user()->name }})
                        </button>
                    </form>
                </div>
            </aside>

            {{-- Main --}}
            <div class="flex-1 flex flex-col">
                <header class="h-16 bg-white border-b border-ifsa-border flex items-center justify-between px-4 sm:px-6">
                    <h1 class="font-display font-extrabold text-lg sm:text-xl">@yield('page_title', 'Dashboard')</h1>
                    <div class="text-xs text-ifsa-muted hidden sm:block">{{ now()->translatedFormat('d F Y, H:i') }}</div>
                </header>

                @if (session('status'))
                    <div class="mx-4 sm:mx-6 mt-4 px-4 py-3 rounded-lg bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm">
                        {{ session('status') }}
                    </div>
                @endif

                <main class="flex-1 p-4 sm:p-6">
                    {{ $slot ?? '' }}
                    @yield('content')
                </main>
            </div>
        </div>
    @else
        <main>
            {{ $slot ?? '' }}
            @yield('content')
        </main>
    @endauth

    @livewireScripts
</body>
</html>

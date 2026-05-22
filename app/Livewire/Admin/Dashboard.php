<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use App\Models\LinkExchange;
use App\Models\Site;
use App\Models\SiteClick;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Dashboard extends Component
{
    #[Layout('layouts.admin')]
    #[Title('Dashboard')]
    public function render()
    {
        return view('livewire.admin.dashboard', [
            'siteCount' => Site::count(),
            'activeSiteCount' => Site::where('is_active', true)->count(),
            'categoryCount' => Category::count(),
            'pendingExchanges' => LinkExchange::where('status', 'pending')->count(),
            'totalClicks' => Site::sum('click_count'),
            'clicksToday' => SiteClick::whereDate('created_at', today())->count(),
            'topSites' => Site::orderByDesc('click_count')->limit(8)->get(),
            'recentExchanges' => LinkExchange::latest()->limit(5)->get(),
        ]);
    }
}

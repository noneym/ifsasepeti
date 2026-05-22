<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\SiteClick;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function go(Request $request, string $slug): RedirectResponse
    {
        $site = Site::where('slug', $slug)->where('is_active', true)->firstOrFail();

        $site->increment('click_count');

        SiteClick::create([
            'site_id' => $site->id,
            'ip_hash' => hash('sha256', (string) $request->ip()),
            'referer' => substr((string) $request->headers->get('referer'), 0, 250),
            'user_agent' => substr((string) $request->userAgent(), 0, 250),
        ]);

        return redirect()->away($site->url, 302);
    }

    public function show(string $slug): View
    {
        $site = Site::with('category')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $similar = Site::where('category_id', $site->category_id)
            ->where('id', '!=', $site->id)
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->limit(12)
            ->get();

        $position = Site::where('category_id', $site->category_id)
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('id')
            ->pluck('id')
            ->search($site->id);
        $position = $position === false ? null : $position + 1;

        return view('site.show', compact('site', 'similar', 'position'));
    }
}

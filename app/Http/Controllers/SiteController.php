<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\SiteClick;
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
}

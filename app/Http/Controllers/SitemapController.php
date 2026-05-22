<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Site;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $urls = collect();

        // Static pages
        $urls->push([
            'loc' => url('/'),
            'lastmod' => now()->toAtomString(),
            'changefreq' => 'daily',
            'priority' => '1.0',
        ]);

        foreach (['iletisim', 'link-degisimi', 'gizlilik', 'sartlar', 'sikayet'] as $path) {
            $urls->push([
                'loc' => url('/'.$path),
                'lastmod' => now()->subDays(7)->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.4',
            ]);
        }

        // Categories
        $categories = Category::where('is_active', true)->orderBy('sort_order')->get();
        foreach ($categories as $cat) {
            $urls->push([
                'loc' => route('category.show', $cat->slug),
                'lastmod' => optional($cat->updated_at)->toAtomString() ?? now()->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.8',
            ]);
        }

        // Site review pages
        $sites = Site::where('is_active', true)->orderBy('sort_order')->get();
        foreach ($sites as $site) {
            $urls->push([
                'loc' => route('site.show', $site->slug),
                'lastmod' => optional($site->updated_at)->toAtomString() ?? now()->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.7',
            ]);
        }

        $xml = view('sitemap.index', ['urls' => $urls])->render();

        return response($xml, 200)
            ->header('Content-Type', 'application/xml; charset=utf-8')
            ->header('Cache-Control', 'public, max-age=3600');
    }
}

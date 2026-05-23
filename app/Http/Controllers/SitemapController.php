<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
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

        // Blog index + posts
        $urls->push([
            'loc' => route('blog.index'),
            'lastmod' => now()->toAtomString(),
            'changefreq' => 'daily',
            'priority' => '0.7',
        ]);
        foreach (Post::published()->get() as $post) {
            $urls->push([
                'loc' => $post->url,
                'lastmod' => optional($post->updated_at)->toAtomString() ?? now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.6',
            ]);
        }

        $xml = view('sitemap.index', ['urls' => $urls])->render();

        return response($xml, 200)
            ->header('Content-Type', 'application/xml; charset=utf-8')
            ->header('Cache-Control', 'public, max-age=3600');
    }
}

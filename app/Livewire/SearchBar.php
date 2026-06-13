<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\Site;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SearchBar extends Component
{
    #[Validate('nullable|string|max:120')]
    public string $query = '';

    public function render()
    {
        $sites = collect();
        $posts = collect();

        $q = trim($this->query);

        if (mb_strlen($q) >= 2) {
            try {
                $sites = Site::search($q)->take(6)->get()->load('category');
                $posts = Post::search($q)->take(3)->get();
            } catch (\Throwable $e) {
                report($e);
                // Meilisearch down -> degrade to a simple DB lookup
                $sites = Site::where('is_active', true)
                    ->where(fn ($w) => $w->where('name', 'like', "%{$q}%")->orWhere('tagline', 'like', "%{$q}%"))
                    ->limit(6)
                    ->get();
            }
        }

        return view('livewire.search-bar', [
            'sites' => $sites,
            'posts' => $posts,
            'hasQuery' => mb_strlen($q) >= 2,
        ]);
    }
}

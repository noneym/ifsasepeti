<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\Site;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class SearchResults extends Component
{
    use WithPagination;

    #[Url(as: 'q')]
    public string $q = '';

    #[Url(as: 'tab')]
    public string $tab = 'sites';

    public function updating($name): void
    {
        if (in_array($name, ['q', 'tab'])) {
            $this->resetPage();
        }
    }

    public function setTab(string $tab): void
    {
        $this->tab = $tab;
        $this->resetPage();
    }

    #[Layout('layouts.app')]
    #[Title('Arama - ifsasepeti.com')]
    public function render()
    {
        $query = trim($this->q);
        $sites = null;
        $posts = null;
        $siteCount = 0;
        $postCount = 0;

        if (mb_strlen($query) >= 2) {
            try {
                $siteCount = Site::search($query)->raw()['estimatedTotalHits'] ?? 0;
                $postCount = Post::search($query)->raw()['estimatedTotalHits'] ?? 0;
            } catch (\Throwable $e) {
                report($e);
            }

            if ($this->tab === 'posts') {
                $posts = Post::search($query)->paginate(12);
            } else {
                $sites = Site::search($query)->paginate(15);
                $sites->getCollection()->load('category');
            }
        }

        return view('livewire.search-results', [
            'query' => $query,
            'sites' => $sites,
            'posts' => $posts,
            'siteCount' => $siteCount,
            'postCount' => $postCount,
        ]);
    }
}

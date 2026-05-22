<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use App\Models\Site;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class SiteList extends Component
{
    use WithPagination;

    #[Url(as: 'q')]
    public string $search = '';

    #[Url(as: 'cat')]
    public string $categoryFilter = '';

    #[Url(as: 'state')]
    public string $stateFilter = '';

    public function updating($name): void
    {
        if (in_array($name, ['search', 'categoryFilter', 'stateFilter'])) {
            $this->resetPage();
        }
    }

    public function toggleActive(int $id): void
    {
        $site = Site::findOrFail($id);
        $site->is_active = ! $site->is_active;
        $site->save();
    }

    public function delete(int $id): void
    {
        Site::findOrFail($id)->delete();
        session()->flash('status', 'Site silindi.');
    }

    #[Layout('layouts.admin')]
    #[Title('Siteler')]
    public function render()
    {
        $sites = Site::query()
            ->with('category')
            ->when($this->search, fn ($q) => $q->where(function ($q) {
                $q->where('name', 'like', '%'.$this->search.'%')
                  ->orWhere('url', 'like', '%'.$this->search.'%')
                  ->orWhere('slug', 'like', '%'.$this->search.'%');
            }))
            ->when($this->categoryFilter, fn ($q) => $q->where('category_id', $this->categoryFilter))
            ->when($this->stateFilter === 'active', fn ($q) => $q->where('is_active', true))
            ->when($this->stateFilter === 'inactive', fn ($q) => $q->where('is_active', false))
            ->when($this->stateFilter === 'premium', fn ($q) => $q->where('is_premium', true))
            ->when($this->stateFilter === 'ai', fn ($q) => $q->where('is_ai', true))
            ->orderBy('sort_order')
            ->orderBy('id')
            ->paginate(25);

        return view('livewire.admin.site-list', [
            'sites' => $sites,
            'categories' => Category::orderBy('sort_order')->get(),
        ]);
    }
}

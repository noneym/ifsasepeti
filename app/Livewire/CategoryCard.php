<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryCard extends Component
{
    public Category $category;
    public int $visibleCount = 10;

    public function render()
    {
        $sites = $this->category->relationLoaded('activeSites')
            ? $this->category->activeSites
            : $this->category->activeSites()->get();

        $visible = $sites->take($this->visibleCount);
        $remaining = max(0, $sites->count() - $this->visibleCount);

        return view('livewire.category-card', [
            'sites' => $visible,
            'remaining' => $remaining,
        ]);
    }
}

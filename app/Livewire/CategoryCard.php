<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryCard extends Component
{
    public Category $category;

    /** Hard cap on how many rows we render into the scrollable list. */
    public int $maxRender = 60;

    public function render()
    {
        $sites = $this->category->relationLoaded('activeSites')
            ? $this->category->activeSites
            : $this->category->activeSites()->get();

        $total = $sites->count();
        $visible = $sites->take($this->maxRender);
        $remaining = max(0, $total - $this->maxRender);

        return view('livewire.category-card', [
            'sites' => $visible,
            'total' => $total,
            'remaining' => $remaining,
        ]);
    }
}

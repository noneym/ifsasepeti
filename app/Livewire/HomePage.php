<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class HomePage extends Component
{
    #[Layout('layouts.app')]
    #[Title('ifsasepeti.com - En İyi Yetişkin Site Dizini')]
    public function render()
    {
        $categories = Category::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->with('activeSites')
            ->get();

        return view('livewire.home-page', [
            'categories' => $categories,
        ]);
    }
}

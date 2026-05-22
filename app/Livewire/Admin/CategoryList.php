<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class CategoryList extends Component
{
    public function toggleActive(int $id): void
    {
        $cat = Category::findOrFail($id);
        $cat->is_active = ! $cat->is_active;
        $cat->save();
    }

    public function delete(int $id)
    {
        $cat = Category::findOrFail($id);
        if ($cat->sites()->exists()) {
            session()->flash('status', "“{$cat->name}” silinemedi — içinde site var.");
            return;
        }
        $cat->delete();
        session()->flash('status', 'Kategori silindi.');
    }

    #[Layout('layouts.admin')]
    #[Title('Kategoriler')]
    public function render()
    {
        return view('livewire.admin.category-list', [
            'categories' => Category::withCount('sites')->orderBy('sort_order')->get(),
        ]);
    }
}

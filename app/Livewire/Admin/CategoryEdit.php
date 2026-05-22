<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CategoryEdit extends Component
{
    public ?Category $category = null;

    #[Validate('required|string|max:255')]
    public string $name = '';

    #[Validate('nullable|string|max:255')]
    public ?string $slug = '';

    #[Validate('nullable|string|max:255')]
    public ?string $subtitle = '';

    #[Validate('nullable|string|max:5000')]
    public ?string $description = '';

    public ?string $icon = 'play';

    #[Validate('required|string|max:16')]
    public string $accent_color = '#10B981';

    #[Validate('required|string|max:255')]
    public string $button_label = 'SİTE DAHA GÖR';

    #[Validate('integer|min:0')]
    public int $sort_order = 0;

    public bool $is_active = true;

    public array $iconOptions = [
        'play' => 'Play',
        'sparkles' => 'Sparkles',
        'video' => 'Video',
        'crown' => 'Crown',
        'robot' => 'Robot',
        'film' => 'Film',
        'heart' => 'Heart',
        'spark-heart' => 'Spark Heart',
        'music' => 'Music',
        'star' => 'Star',
        'vr' => 'VR',
        'camera' => 'Camera',
        'flag' => 'Flag',
    ];

    public function mount(?Category $category = null): void
    {
        if ($category && $category->exists) {
            $this->category = $category;
            $this->fill($category->only([
                'name', 'slug', 'subtitle', 'description', 'icon',
                'accent_color', 'button_label', 'sort_order', 'is_active',
            ]));
        }
    }

    public function save()
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'slug' => $this->slug ?: null,
            'subtitle' => $this->subtitle ?: null,
            'description' => $this->description ?: null,
            'icon' => $this->icon,
            'accent_color' => $this->accent_color,
            'button_label' => $this->button_label,
            'sort_order' => $this->sort_order,
            'is_active' => $this->is_active,
        ];

        if ($this->category && $this->category->exists) {
            $this->category->update($data);
            session()->flash('status', 'Kategori güncellendi.');
        } else {
            $this->category = Category::create($data);
            session()->flash('status', 'Kategori oluşturuldu.');
            return redirect()->route('admin.category.edit', $this->category);
        }
    }

    #[Layout('layouts.admin')]
    #[Title('Kategori Düzenle')]
    public function render()
    {
        return view('livewire.admin.category-edit');
    }
}

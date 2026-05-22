<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use App\Models\Site;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class SiteEdit extends Component
{
    use WithFileUploads;

    public ?Site $site = null;

    #[Validate('required|exists:categories,id')]
    public ?int $category_id = null;

    #[Validate('required|string|max:255')]
    public string $name = '';

    #[Validate('nullable|string|max:255')]
    public ?string $slug = '';

    #[Validate('required|url|max:255')]
    public string $url = '';

    #[Validate('nullable|string|max:16')]
    public ?string $logo_emoji = '';

    #[Validate('nullable|string|max:255')]
    public ?string $tagline = '';

    #[Validate('nullable|string|max:1000')]
    public ?string $description = '';

    #[Validate('nullable|string|max:2000')]
    public ?string $review = '';

    #[Validate('nullable|string|max:20000')]
    public ?string $review_long = '';

    public array $pros = [];
    public array $cons = [];
    public string $newPro = '';
    public string $newCon = '';

    #[Validate('nullable|numeric|min:0|max:5')]
    public ?float $rating = null;

    public bool $is_active = true;
    public bool $is_featured = false;
    public bool $is_new = false;
    public bool $is_ai = false;
    public bool $is_premium = false;
    public bool $is_sale = false;

    #[Validate('integer|min:0')]
    public int $sort_order = 0;

    #[Validate('nullable|string|max:255')]
    public ?string $meta_title = '';

    #[Validate('nullable|string|max:320')]
    public ?string $meta_description = '';

    #[Validate('nullable|image|max:4096')]
    public $logo_upload = null;

    #[Validate('nullable|image|max:8192')]
    public $screenshot_upload = null;

    public ?string $existing_logo_path = null;
    public ?string $existing_screenshot_path = null;

    public function mount(?Site $site = null): void
    {
        if ($site && $site->exists) {
            $this->site = $site;
            $this->fill($site->only([
                'category_id', 'name', 'slug', 'url', 'logo_emoji', 'tagline',
                'description', 'review', 'review_long', 'rating',
                'is_active', 'is_featured', 'is_new', 'is_ai', 'is_premium', 'is_sale',
                'sort_order', 'meta_title', 'meta_description',
            ]));
            $this->pros = $site->pros ?? [];
            $this->cons = $site->cons ?? [];
            $this->existing_logo_path = $site->logo_path;
            $this->existing_screenshot_path = $site->screenshot_path;
        }
    }

    public function addPro(): void
    {
        $val = trim($this->newPro);
        if ($val !== '') {
            $this->pros[] = $val;
            $this->newPro = '';
        }
    }

    public function removePro(int $i): void
    {
        unset($this->pros[$i]);
        $this->pros = array_values($this->pros);
    }

    public function addCon(): void
    {
        $val = trim($this->newCon);
        if ($val !== '') {
            $this->cons[] = $val;
            $this->newCon = '';
        }
    }

    public function removeCon(int $i): void
    {
        unset($this->cons[$i]);
        $this->cons = array_values($this->cons);
    }

    public function save()
    {
        $this->validate();

        $data = [
            'category_id' => $this->category_id,
            'name' => $this->name,
            'slug' => $this->slug ?: null,
            'url' => $this->url,
            'logo_emoji' => $this->logo_emoji ?: null,
            'tagline' => $this->tagline ?: null,
            'description' => $this->description ?: null,
            'review' => $this->review ?: null,
            'review_long' => $this->review_long ?: null,
            'pros' => $this->pros ?: null,
            'cons' => $this->cons ?: null,
            'rating' => $this->rating,
            'is_active' => $this->is_active,
            'is_featured' => $this->is_featured,
            'is_new' => $this->is_new,
            'is_ai' => $this->is_ai,
            'is_premium' => $this->is_premium,
            'is_sale' => $this->is_sale,
            'sort_order' => $this->sort_order,
            'meta_title' => $this->meta_title ?: null,
            'meta_description' => $this->meta_description ?: null,
        ];

        $disk = config('filesystems.default');

        if ($this->logo_upload) {
            $data['logo_path'] = $this->logo_upload->store('logos', $disk);
        }
        if ($this->screenshot_upload) {
            $data['screenshot_path'] = $this->screenshot_upload->store('screenshots', $disk);
        }

        if ($this->site && $this->site->exists) {
            $this->site->update($data);
            session()->flash('status', 'Site güncellendi.');
        } else {
            $this->site = Site::create($data);
            session()->flash('status', 'Site oluşturuldu.');
            return redirect()->route('admin.site.edit', $this->site);
        }
    }

    public function delete()
    {
        if ($this->site && $this->site->exists) {
            $this->site->delete();
            session()->flash('status', 'Site silindi.');
            return redirect()->route('admin.sites');
        }
    }

    #[Layout('layouts.admin')]
    #[Title('Site Düzenle')]
    public function render()
    {
        return view('livewire.admin.site-edit', [
            'categories' => Category::orderBy('sort_order')->get(),
        ]);
    }
}

<?php

namespace App\Livewire\Admin;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostEdit extends Component
{
    use WithFileUploads;

    public ?Post $post = null;

    #[Validate('required|string|max:255')]
    public string $title = '';

    #[Validate('nullable|string|max:255')]
    public ?string $slug = '';

    #[Validate('nullable|string|max:500')]
    public ?string $excerpt = '';

    #[Validate('nullable|string|max:200000')]
    public ?string $body = '';

    public array $tags = [];
    public string $newTag = '';

    #[Validate('nullable|string|max:255')]
    public ?string $meta_title = '';

    #[Validate('nullable|string|max:320')]
    public ?string $meta_description = '';

    public bool $is_published = false;
    public bool $is_featured = false;

    #[Validate('nullable|image|max:8192')]
    public $cover_upload = null;

    public ?string $existing_cover_path = null;

    public function mount(?Post $post = null): void
    {
        if ($post && $post->exists) {
            $this->post = $post;
            $this->fill($post->only([
                'title', 'slug', 'excerpt', 'body', 'meta_title', 'meta_description',
                'is_published', 'is_featured',
            ]));
            $this->tags = $post->tags ?? [];
            $this->existing_cover_path = $post->cover_path;
        }
    }

    public function addTag(): void
    {
        $val = trim($this->newTag);
        if ($val !== '') {
            $this->tags[] = $val;
            $this->newTag = '';
        }
    }

    public function removeTag(int $i): void
    {
        unset($this->tags[$i]);
        $this->tags = array_values($this->tags);
    }

    public function save()
    {
        $this->validate();

        $data = [
            'title' => $this->title,
            'slug' => $this->slug ?: null,
            'excerpt' => $this->excerpt ?: null,
            'body' => $this->body ?: null,
            'tags' => $this->tags ?: null,
            'meta_title' => $this->meta_title ?: null,
            'meta_description' => $this->meta_description ?: null,
            'is_published' => $this->is_published,
            'is_featured' => $this->is_featured,
            'user_id' => auth()->id(),
        ];

        if ($this->cover_upload) {
            $data['cover_path'] = $this->cover_upload->store('blog', config('filesystems.default'));
        }

        if ($this->post && $this->post->exists) {
            $this->post->update($data);
            session()->flash('status', 'Yazı güncellendi.');
        } else {
            $this->post = Post::create($data);
            session()->flash('status', 'Yazı oluşturuldu.');
            return redirect()->route('admin.post.edit', $this->post);
        }
    }

    public function delete()
    {
        if ($this->post && $this->post->exists) {
            $this->post->delete();
            session()->flash('status', 'Yazı silindi.');
            return redirect()->route('admin.posts');
        }
    }

    #[Layout('layouts.admin')]
    #[Title('Yazı Düzenle')]
    public function render()
    {
        return view('livewire.admin.post-edit');
    }
}

<?php

namespace App\Livewire\Admin;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;

    #[Url(as: 'q')]
    public string $search = '';

    public function updating($name): void
    {
        if ($name === 'search') {
            $this->resetPage();
        }
    }

    public function togglePublished(int $id): void
    {
        $post = Post::findOrFail($id);
        $post->is_published = ! $post->is_published;
        if ($post->is_published && ! $post->published_at) {
            $post->published_at = now();
        }
        $post->save();
    }

    public function delete(int $id): void
    {
        Post::findOrFail($id)->delete();
        session()->flash('status', 'Yazı silindi.');
    }

    #[Layout('layouts.admin')]
    #[Title('Blog Yazıları')]
    public function render()
    {
        $posts = Post::query()
            ->when($this->search, fn ($q) => $q->where('title', 'like', '%'.$this->search.'%'))
            ->latest()
            ->paginate(20);

        return view('livewire.admin.post-list', compact('posts'));
    }
}

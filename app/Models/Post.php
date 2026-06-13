<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use HasFactory;
    use Searchable;

    protected $guarded = [];

    protected $casts = [
        'tags' => 'array',
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
        'view_count' => 'integer',
        'reading_minutes' => 'integer',
        'published_at' => 'datetime',
    ];

    protected static function booted(): void
    {
        static::saving(function (Post $post) {
            if (empty($post->slug)) {
                $base = Str::slug($post->title);
                $slug = $base ?: 'yazi';
                $i = 2;
                while (static::where('slug', $slug)->where('id', '!=', $post->id ?? 0)->exists()) {
                    $slug = $base.'-'.$i++;
                }
                $post->slug = $slug;
            }

            if ($post->body && empty($post->reading_minutes)) {
                $words = str_word_count(strip_tags($post->body));
                $post->reading_minutes = max(1, (int) round($words / 200));
            }

            if ($post->is_published && empty($post->published_at)) {
                $post->published_at = now();
            }
        });
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopePublished(Builder $q): Builder
    {
        return $q->where('is_published', true)->where('published_at', '<=', now());
    }

    public function getUrlAttribute(): string
    {
        return route('blog.show', $this->slug);
    }

    public function getCoverUrlAttribute(): ?string
    {
        if (! $this->cover_path) {
            return null;
        }
        return Storage::disk(config('filesystems.default'))->url($this->cover_path);
    }

    /**
     * Render the body to HTML. Supports Markdown (##, **, -, links, ---)
     * and passes through any raw HTML blocks the author wrote.
     */
    public function getBodyHtmlAttribute(): string
    {
        if (blank($this->body)) {
            return '';
        }

        return Str::markdown($this->body, [
            'html_input' => 'allow',
            'allow_unsafe_links' => false,
        ]);
    }

    public function shouldBeSearchable(): bool
    {
        return $this->is_published && $this->published_at && $this->published_at->isPast();
    }

    public function toSearchableArray(): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'excerpt' => $this->excerpt,
            'tags' => $this->tags ?? [],
            'body_text' => $this->body ? mb_substr(strip_tags($this->body_html), 0, 5000) : null,
            'published_at' => optional($this->published_at)->timestamp,
            'view_count' => (int) $this->view_count,
            'reading_minutes' => (int) $this->reading_minutes,
        ];
    }
}

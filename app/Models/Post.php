<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

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
}

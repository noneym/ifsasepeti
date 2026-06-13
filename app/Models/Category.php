<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    protected static function booted(): void
    {
        static::saving(function (Category $category) {
            if (empty($category->slug)) {
                $category->slug = Str::slug($category->name);
            }
        });
    }

    public function sites(): BelongsToMany
    {
        return $this->belongsToMany(Site::class)
            ->withPivot('sort_order')
            ->orderBy('category_site.sort_order')
            ->orderBy('sites.id');
    }

    public function activeSites(): BelongsToMany
    {
        return $this->sites()->where('sites.is_active', true);
    }
}

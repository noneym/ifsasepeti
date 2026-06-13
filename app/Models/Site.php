<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Site extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'is_ai' => 'boolean',
        'is_new' => 'boolean',
        'is_premium' => 'boolean',
        'is_featured' => 'boolean',
        'is_sale' => 'boolean',
        'is_active' => 'boolean',
        'click_count' => 'integer',
        'sort_order' => 'integer',
        'rating' => 'decimal:2',
        'pros' => 'array',
        'cons' => 'array',
    ];

    protected static function booted(): void
    {
        static::saving(function (Site $site) {
            if (empty($site->slug)) {
                $base = Str::slug($site->name);
                $slug = $base;
                $i = 2;
                $query = static::where('slug', $slug);
                if ($site->exists) {
                    $query->where('id', '!=', $site->id);
                }
                while ($query->exists()) {
                    $slug = $base.'-'.$i++;
                    $query = static::where('slug', $slug);
                    if ($site->exists) {
                        $query->where('id', '!=', $site->id);
                    }
                }
                $site->slug = $slug;
            }
        });

        // Primary category must always exist in the pivot too
        static::saved(function (Site $site) {
            if ($site->category_id) {
                $site->categories()->syncWithoutDetaching([
                    $site->category_id => ['sort_order' => $site->sort_order],
                ]);
            }
        });
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class)->withPivot('sort_order');
    }

    public function clicks(): HasMany
    {
        return $this->hasMany(SiteClick::class);
    }

    public function getScreenshotUrlAttribute(): ?string
    {
        if ($this->screenshot_path) {
            return Storage::disk(config('filesystems.default'))->url($this->screenshot_path);
        }
        $auth = config('services.thumio.auth');
        if (! $auth || ! $this->url) {
            return null;
        }
        $options = trim((string) config('services.thumio.options'), '/');
        $optionsPath = $options ? '/'.$options : '';
        return 'https://image.thum.io/get/auth/'.$auth.$optionsPath.'/'.$this->url;
    }

    public function getLogoUrlAttribute(): ?string
    {
        if (! $this->logo_path) {
            return null;
        }
        return Storage::disk(config('filesystems.default'))->url($this->logo_path);
    }

    public function getRatingFilledAttribute(): int
    {
        return (int) floor((float) ($this->rating ?? 0));
    }

    public function getBadgesAttribute(): array
    {
        $badges = [];
        if ($this->is_new) {
            $badges[] = ['label' => 'new', 'class' => 'badge-new'];
        }
        if ($this->is_ai) {
            $badges[] = ['label' => 'Ai', 'class' => 'badge-ai'];
        }
        if ($this->is_premium) {
            $badges[] = ['label' => 'Premium', 'class' => 'badge-premium'];
        }
        if ($this->is_sale) {
            $badges[] = ['label' => '*sale', 'class' => 'text-rose-600 font-semibold text-[10px]'];
        }
        return $badges;
    }
}

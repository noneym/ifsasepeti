<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;

class Site extends Model
{
    use HasFactory;
    use Searchable;

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
        // Prefer a cached copy on our own storage (R2) — fast and survives
        // temporary outages of the target site or the screenshot provider.
        if ($this->screenshot_path) {
            return Storage::disk(config('filesystems.default'))->url($this->screenshot_path);
        }

        return $this->liveScreenshotUrl();
    }

    /**
     * Build a live screenshot URL from the configured provider.
     * Used as a fallback when no cached image exists, and by the
     * sites:cache-screenshots command to populate the cache.
     */
    public function liveScreenshotUrl(): ?string
    {
        if (! $this->url) {
            return null;
        }

        $w = (int) config('services.screenshot.width', 1200);
        $h = (int) config('services.screenshot.height', 750);

        return match (config('services.screenshot.provider', 'cloak')) {
            'cloak' => $this->cloakUrl(),
            'thumio' => $this->thumioUrl(),
            'mshots' => 'https://s0.wp.com/mshots/v1/'.rawurlencode($this->url).'?w='.$w.'&h='.$h,
            default => $this->cloakUrl() ?? 'https://s0.wp.com/mshots/v1/'.rawurlencode($this->url).'?w='.$w.'&h='.$h,
        };
    }

    protected function cloakUrl(): ?string
    {
        $base = config('services.screenshot.cloak_url');
        if (! $base) {
            return null;
        }
        $w = (int) config('services.screenshot.width', 1200);
        $h = (int) config('services.screenshot.height', 750);

        return rtrim($base, '/')
            .'?url='.rawurlencode($this->url)
            .'&width='.$w
            .'&height='.$h;
    }

    protected function thumioUrl(): ?string
    {
        $auth = config('services.thumio.auth');
        if (! $auth) {
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

    public function shouldBeSearchable(): bool
    {
        return $this->is_active;
    }

    public function toSearchableArray(): array
    {
        $this->loadMissing('categories');

        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'url' => $this->url,
            'tagline' => $this->tagline,
            'description' => $this->description,
            'review_long' => $this->review_long ? mb_substr(strip_tags($this->review_long), 0, 3000) : null,
            'logo_emoji' => $this->logo_emoji,
            'rating' => (float) $this->rating,
            'click_count' => (int) $this->click_count,
            'sort_order' => (int) $this->sort_order,
            'is_premium' => (bool) $this->is_premium,
            'is_ai' => (bool) $this->is_ai,
            'is_new' => (bool) $this->is_new,
            'category_ids' => $this->categories->pluck('id')->all(),
            'category_names' => $this->categories->pluck('name')->all(),
            'primary_category' => optional($this->category)->name,
        ];
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

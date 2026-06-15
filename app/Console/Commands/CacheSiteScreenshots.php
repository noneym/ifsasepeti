<?php

namespace App\Console\Commands;

use App\Models\Site;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class CacheSiteScreenshots extends Command
{
    protected $signature = 'sites:cache-screenshots
        {--force : Re-capture sites that already have a cached screenshot}
        {--only= : Only this site id or slug}
        {--sleep=1 : Seconds to wait between captures}
        {--retries=3 : How many times to retry a capture before giving up}';

    protected $description = 'Fetch each site screenshot from thum.io once and store it on R2, so pages no longer hit thum.io live (faster + survives temporary site outages).';

    public function handle(): int
    {
        $disk = config('filesystems.default');
        $provider = config('services.screenshot.provider', 'cloak');
        $retries = max(1, (int) $this->option('retries'));
        $this->info("Provider: {$provider} | disk: {$disk} | retries: {$retries}");

        $query = Site::query()->where('is_active', true)->whereNotNull('url');

        if ($only = $this->option('only')) {
            $query->where(fn ($q) => $q->where('id', $only)->orWhere('slug', $only));
        }
        if (! $this->option('force')) {
            $query->whereNull('screenshot_path');
        }

        $sites = $query->orderBy('sort_order')->get();

        if ($sites->isEmpty()) {
            $this->info('Nothing to capture. (Use --force to recapture cached ones.)');
            return self::SUCCESS;
        }

        $this->info("Capturing {$sites->count()} screenshot(s) to disk [{$disk}]...");
        $ok = 0;
        $fail = 0;

        foreach ($sites as $site) {
            $shotUrl = $site->liveScreenshotUrl();
            if (! $shotUrl) {
                $this->warn("  ✗ {$site->name} — screenshot URL uretilemedi");
                $fail++;
                continue;
            }

            try {
                // CloakBrowser renders a real PNG in one shot (it solves
                // Cloudflare challenges, so allow a long timeout). mShots, by
                // contrast, serves a small GIF "generating" placeholder first,
                // so we reject non-image / tiny / gif bodies and retry.
                $body = null;
                $type = null;
                $minBytes = 15000;
                for ($attempt = 1; $attempt <= $retries; $attempt++) {
                    $res = Http::timeout(120)->get($shotUrl);
                    $type = (string) $res->header('Content-Type');

                    $isRealImage = $res->ok()
                        && str_starts_with($type, 'image/')
                        && ! str_contains($type, 'gif')          // mShots placeholder is gif
                        && strlen($res->body()) >= $minBytes;

                    if ($isRealImage) {
                        $body = $res->body();
                        break;
                    }
                    if ($attempt < $retries) {
                        sleep(4);
                    }
                }

                if (! $body) {
                    $this->warn("  ✗ {$site->name} — gercek gorsel alinamadi (son: {$type})");
                    $fail++;
                    continue;
                }

                // Content-hashed filename: a new capture gets a new name, so the
                // CDN never serves a stale cached copy at the same key.
                $path = 'screenshots/site-'.$site->id.'-'.substr(md5($body), 0, 12).'.png';
                Storage::disk($disk)->put($path, $body, 'public');

                // Remove the previous cached file (if any) so we don't pile up junk.
                $old = $site->getOriginal('screenshot_path');
                if ($old && $old !== $path && str_starts_with($old, 'screenshots/')) {
                    Storage::disk($disk)->delete($old);
                }

                $site->forceFill(['screenshot_path' => $path])->saveQuietly();

                $this->line('  ✓ '.$site->name.' ('.number_format(strlen($body) / 1024, 0).' KB)');
                $ok++;
            } catch (\Throwable $e) {
                $this->warn("  ✗ {$site->name} — {$e->getMessage()}");
                $fail++;
            }

            $sleep = (int) $this->option('sleep');
            if ($sleep > 0) {
                sleep($sleep);
            }
        }

        $this->newLine();
        $this->info("Bitti. Basarili: {$ok}, Basarisiz: {$fail}.");
        $this->line('Not: kotu (frozen/down) yakalanmis bir gorseli admin panelden elle degistirebilir');
        $this->line('     veya o sitenin screenshot_path alanini bosaltip --only ile tekrar cekebilirsiniz.');

        return self::SUCCESS;
    }
}

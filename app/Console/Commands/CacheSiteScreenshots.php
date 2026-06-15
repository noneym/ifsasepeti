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
        {--sleep=1 : Seconds to wait between captures}';

    protected $description = 'Fetch each site screenshot from thum.io once and store it on R2, so pages no longer hit thum.io live (faster + survives temporary site outages).';

    public function handle(): int
    {
        $disk = config('filesystems.default');
        $provider = config('services.screenshot.provider', 'mshots');
        $this->info("Provider: {$provider}");

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
                // mShots returns a small "generating" placeholder (~9 KB) on the
                // first hit and the real screenshot a few seconds later. Real
                // captures are well over 20 KB, so keep retrying until we get one.
                $body = null;
                $type = null;
                $minBytes = 20000;
                for ($attempt = 1; $attempt <= 8; $attempt++) {
                    $res = Http::timeout(45)->get($shotUrl);
                    $type = $res->header('Content-Type');

                    if ($res->ok() && str_starts_with((string) $type, 'image/') && strlen($res->body()) >= $minBytes) {
                        $body = $res->body();
                        break;
                    }
                    sleep(4); // give the provider time to render the real image
                }

                if (! $body) {
                    $this->warn("  ✗ {$site->name} — gercek gorsel alinamadi (son: {$type})");
                    $fail++;
                    continue;
                }

                $path = 'screenshots/site-'.$site->id.'-'.substr(md5($site->url), 0, 8).'.png';
                Storage::disk($disk)->put($path, $body, 'public');

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

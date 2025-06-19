<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\Route;
use App\Models\Service;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = Sitemap::create();

        foreach (Route::getRoutes() as $route):
            if (!in_array('GET', $route->methods())) continue;

            $uri = $route->uri();

            if (
                in_array($uri, ['/', 'about-us', 'contact-us']) ||
                str_starts_with($uri, 'meta/')
            ):
                $sitemap->add(
                    Url::create(url($uri))
                        ->setLastModificationDate(Carbon::now())
                        ->setPriority(
                            $uri === '/' ? 1.0 : (in_array($uri, ['about-us', 'contact-us']) ? 0.9 : 0.7)
                        )
                );
            endif;
        endforeach;

        foreach (Service::getActiveServices() as $service) {
            if(view()->exists('frontend.services.' . $service->slug)):
                $sitemap->add(
                    Url::create(url('/services/' . $service->slug))
                        ->setLastModificationDate($service->updated_at ?? Carbon::now())
                        ->setPriority(0.8)
                );
            endif;
        }


        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Sitemap generated and saved to /public/sitemap.xml');
    }
}

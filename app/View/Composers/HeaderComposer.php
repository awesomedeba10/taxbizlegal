<?php

namespace App\View\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Service;

class HeaderComposer
{
    /**
     * Create a new profile composer.
     */
    public function __construct(
        protected Service $service,
    ) {}

    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $headers = Cache::remember('service_headers', now()->addHours(4), function () {
            return $this->service::getHeaderServices();
        });

        $view->with('serviceHeaders', $headers);
    }
}
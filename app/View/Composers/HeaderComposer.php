<?php

namespace App\View\Composers;

use Illuminate\View\View;
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
        $headers = $this->service::getServices();

        $view->with('serviceHeaders', $headers);
    }
}
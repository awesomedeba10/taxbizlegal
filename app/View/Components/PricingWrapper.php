<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
use Illuminate\View\Component;
use Illuminate\Support\Arr;

class PricingWrapper extends Component
{
    public $page;
    public $file = 'company_plans.txt';
    /**
     * Create a new component instance.
     */
    public function __construct($page)
    {
        $this->page = $page;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $decryptedData = Crypt::decryptString(Storage::disk('public')->get($this->file));

        $plans = Arr::get(unserialize($decryptedData), $this->page, []);

        return view('components.pricing-wrapper', ['plans' => $plans]);
    }
}

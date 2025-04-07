<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Config;
use Illuminate\View\Component;

class FaqWrapper extends Component
{
    public $page;
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
        $faqs = Config::get('faqs.' . $this->page, []);

        return view('components.faq-wrapper', [
            'faqs' => $faqs, 
            'slug' => $this->page
        ]);
    }
}

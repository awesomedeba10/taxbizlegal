<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use App\Traits\ServiceComponents;

class FaqWrapper extends Component
{
    use ServiceComponents;

    public $page;
    protected $primary_util_name = 'faqs';
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->page = Str::afterLast(URL::current(), '/');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $faqs = $this->get_utils(
            $this->primary_util_name , $this->page);

        return view('components.faq-wrapper', [
            'faqs' => $faqs,
            'slug' => $this->page
        ]);
    }
}

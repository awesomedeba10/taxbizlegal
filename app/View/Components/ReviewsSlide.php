<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Cache;

class ReviewsSlide extends Component
{
    public $testimonials;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->testimonials = Cache::remember('testimonials', now()->addHours(6), function () {
            return Testimonial::inRandomOrder()->get();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // dd(Testimonial::inRandomOrder()->get());
        return view('components.reviews-slide');
    }
}

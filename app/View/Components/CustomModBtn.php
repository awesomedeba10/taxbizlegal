<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CustomModBtn extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $href = 'javascript:void(0)',
        public string $btnIcon = 'btn-icon--blue'
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.custom-mod-btn');
    }
}

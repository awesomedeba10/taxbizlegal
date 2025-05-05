<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Traits\ServiceComponents;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;

class StepsWrapper extends Component
{
    use ServiceComponents;

    public $page;
    protected $primary_util_name = 'steps';
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
        $steps = $this->get_utils(
            $this->primary_util_name , $this->page);

        return view('components.steps-wrapper', [
            'steps' => $steps
        ]);
    }
}

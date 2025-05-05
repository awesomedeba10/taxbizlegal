<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use App\Traits\ServiceComponents;

class UserForm extends Component
{
    use ServiceComponents;

    public $page;
    protected $primary_util_name = 'service_plans';
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
        return view('components.user-form', [
            'plans' => $this->get_utils(
                $this->primary_util_name , $this->page)
        ]);
    }
}

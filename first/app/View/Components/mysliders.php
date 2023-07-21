<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class mysliders extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public function __construct($name)
    {
        //
        $this->name = $name;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.mysliders');
    }
}

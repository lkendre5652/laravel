<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class sidebar2 extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $details;
    public function __construct($name,$details)
    {
        //variable declaration
        $this->details = $details;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar2');
    }
}

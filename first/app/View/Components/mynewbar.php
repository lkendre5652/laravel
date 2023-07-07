<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class mynewbar extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $description;
    public function __construct($description,$name)
    {
        $this->name=$name;
        $this->description =$description; 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.mynewbar');
    }
}

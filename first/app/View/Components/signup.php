<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class signup extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $email;
    public $contact;
    public function __construct( $name,$email,$contact)
    {
        //
        $this->name = $name;
        $this->contact = $contact;
        $this->email = $email;
        

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.signup');
    }
}

<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class login extends Component
{
    /**
     * Create a new component instance.
     */
    public $username;
    public $pass;

    public function __construct($username,$pass)
    {
        //
        $this->username = $username;
        $this->pass = sha1($pass);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.login');
    }
}

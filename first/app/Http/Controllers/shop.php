<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shop extends Controller
{
    // shop controller
    function index(){
        return view('shop.header').view('shop').view('shop/footer');
    }

}

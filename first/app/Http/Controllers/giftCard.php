<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class giftCard extends Controller
{
    //gift controller
    function index(){
        return view('shop.header').view('gift-card').view('shop.footer');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homespa extends Controller
{
    // Home spa
    function index(){
        return view('shop.header').view('homespa').view('shop/footer');
    }
}

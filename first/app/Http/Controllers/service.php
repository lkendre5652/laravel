<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class service extends Controller
{
    //service controller
    function index(){
        return view('shop.header').view('service.service').view('shop.footer');
    }
}

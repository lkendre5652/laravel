<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    //index controller
    function index(){
        return view('shop.header').view('about').view('shop.footer');
    }
    function aboutDetail(){
        echo "About Detail";
    }
}
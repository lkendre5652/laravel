<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactus extends Controller
{
    
    function index(){
        return view('shop.header').view('contact-us').view('shop.footer');
    }
    function contactDetails(){
        echo "Contact Details Page";
    }
}

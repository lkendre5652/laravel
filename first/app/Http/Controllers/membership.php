<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class membership extends Controller
{
    //Membership controller
    function index(){
        return view('shop.header').view('spa-membership').view('shop.footer');
    }
    function membership(){
        return view('shop.header').view('membership.spa-membership').view('shop.footer');
    }
    function salonMembership(){            
        return view('shop.header').view('membership.salon-membership').view('shop.footer');

    }
}

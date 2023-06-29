<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // First Controller
    function index(){
    //    echo "Home Controller";
        return view('shop/header').view('home').view('shop/footer');
    }
    function about($id){
        echo "About Page".$id;
    }
  

}

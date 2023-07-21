<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form extends Controller
{
    //
    function index(Request $request){
        return $request->all();
       
    }
    function signup(Request $request){
        return $request->all();
    }
}

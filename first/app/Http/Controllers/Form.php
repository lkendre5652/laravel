<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form extends Controller
{
    //
    function index(Request $request){

        // form validation start

        // $request->validate([
        //     'fname' => 'required|min:3|max:10',
        //     'email' => 'required|email',
        // ]);
        // // //return $request->all();
        // echo "hi";

        // form validation end

        echo $request->file('doc')->store('media');


       
    }
    function signup(Request $request){
        return $request->all();
    }
}

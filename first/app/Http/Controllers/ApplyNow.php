<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplyNow extends Controller
{
    
    function index(Request $request){
        return view('shop.header').view('CareerForm').view('shop/footer');
    }
    function apply(Request $request){
        $request->validate([
            'name' => 'required|min:5|max:25',
            'email' => 'required|min:5|max:100|email',
            'resume' => 'required|mimes:pdf|max:2028'
        ]);
        $request->file('resume')->store('media/resume');
        // print_r( $request->all() );
        $arr =  $request->all();             
        return redirect('thank');
    }
    function thakYou(Request $request){
        return view('shop.header').view('thank').view('shop.footer');
    }

    function session_set(Request $request){        
        $request->session()->put('name','Laxman');
        //echo "session_set";
    }
    function session_get(Request $request){        
        echo $request->session()->get('name');
    }
    function session_remove(Request $request){
        return $request->session()->forget('name');

    }
    function session_check(Request $request){
        if( $request->session()->has('name') ){
            echo "Yes";
        }else{
            echo "No";
        }

    }

}

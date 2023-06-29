<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    //
    function index(){
        //echo "Career Page";
        return view('shop.header').view('career').view('shop.footer');
    }
    function careerDetail($id){            
        return view('shop.header').view('career_detail',array('id'=>$id)).view('shop.footer');
    }
}

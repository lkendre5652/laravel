<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Products extends Controller
{
    //
    function index(){
        //return view('product',array('ids'=>$id));
        $id = 'my_id';
        return view('shop.header').view('product',array('prod_id'=>$id,'fname'=>'Laxman','lname'=>'Kendre')).view('shop.footer');
    }
    
    function prod_detail($pid){
        return view('shop/header').view('product_details',array('pid'=>$pid)).view('shop/footer');
    }
}

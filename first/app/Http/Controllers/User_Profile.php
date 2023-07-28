<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
class User_Profile extends Controller
{
    //
    function index(){
        //return Profile::all();
        //return Profile::where('eid','>','2')->get();
        //return Profile::all();
        // $res =  Profile::find(1);
        // $res->delete();
        return Profile::all();
    }
}

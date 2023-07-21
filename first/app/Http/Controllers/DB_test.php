<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DB_test extends Controller
{
    //select
    function select(){
        //return DB::table('emp')->get();

        // get all records
        // $result = DB::table('emp')->get();
        
        // get single record
        // $result = DB::table('emp')->where('eid',1)->get();

        // use conditional operators
        // exists(), doesntExists(), count(), max('id'), min('id'),avg('id')
        //$result = DB::table('emp')->where('eid','>',1)->get(); // you can use the conditional operators: > < = <= >= !=
        
        // get only id
        //$result = DB::table('emp')->where('eid','>',1)->select('eid')->get();
        
        // get id and name        
        //$result = DB::table('emp')->where('eid','>',1)->select(['eid','empname'])->get();

        // write raw query
        // $result = DB::select( 'select * from emp where eid = 1' );

        // order by : desc, asc 
        $result = DB::table('emp')->orderBy('eid','desc')->get();


        // Insert 
        // DB::table('emp')->insert(
        //     array('eid'=> 10, 'empname' => 'lkendre')
        // );

        
        echo "<pre>";
        print_r( $result );
    }
    function insert(){
        DB::table('emp')->insert(
            array('empname'=>'Employee Lk')
        );
    }
    function update(){
        DB::table('emp')->where('empname','=','Employee Lk')->update(
            array('empname' => 'Laxman Kendre')
        );
    }
    function delete(){
        DB::table('emp')->where('eid','=','11')->delete();
    }
}

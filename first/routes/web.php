<?php

use Illuminate\Support\Facades\Route;

// import home controller
use App\Http\Controllers\contactus;
use App\Http\Controllers\About;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Products;
use App\Http\Controllers\homespa;
use App\Http\Controllers\shop;
use App\Http\Controllers\giftCard;
use App\Http\Controllers\membership;
use App\Http\Controllers\service;
use App\Http\Controllers\Form;
use App\Http\Controllers\ApplyNow;
use App\Http\Controllers\DB_test;

use App\Http\Controllers\User_Profile;

// define the home routes
// Route::get('/about/{id}',[HomeController::class,'about']);
// blade Template
//Route::view('web','web');
// Query Builder

Route::get('profile/',[User_Profile::class, 'index']);

Route::get('/select',[DB_test::class,'select']);
Route::get('/insert',[DB_test::class,'insert']);
Route::get('/update',[DB_test::class,'update']);
Route::get('/delete',[DB_test::class,'delete']);


// Session 
Route::get('/session_set',[ApplyNow::class, 'session_set']);
Route::get('/session_get',[ApplyNow::class,'session_get']);
Route::get('/session_remove',[ApplyNow::class,'session_remove']);
Route::get('/session_check',[ApplyNow::class, 'session_check']);
// Form Routes
Route::get('/apply-now',[ApplyNow::class, 'index']);
Route::post('/apply',[ApplyNow::class, 'apply']);
Route::get('/thank',[ApplyNow::class, 'thakYou']);

// middleware view
Route::view('denied','denied');
Route::view('mylogin','mylogin'); // UserCheck1 middleware

//Route::view('page2','page2')->middleware("UserCheck1");

// Group middleware
Route::group(['middleware' => ['UserCheck'] ],function(){
    Route::view('page','page');
    //Route::view('page2','page2');
});
// Group middleware

Route::view("maxamount",'maxamount');



Route::view('mynewpage','mynewpage');
Route::view('login','login');
Route::view('signup','register');
Route::post('/signaction',[Form::class, 'signup']);
Route::post('/formSubmit',[Form::class,'index']);



Route::get('/web',function(){   
    //return view('web',array("name" => 'Laxman'));
    //return view('web',array('data'=> array('fname' => 'Laxman', 'lname' => 'Kendre')));
    //return view('web',array('data' => array(1,2,3,4,5)));
    return view('web', array( 'data' => array('fname' => 'Laxman', 'lname' => 'Kendre') ) );
});


// view 



// Form 
Route::view('form','form');
Route::post('/formSubmit',[Form::class,'index']);




// components 
// Route::view('page','page');
// Route::view('page','page')->middleware("UserCheck");
// Route::view('page2','page2');
Route::view('sidebar2','sidebar2');
Route::view('mysidebar','mysidebar');


// service
Route::get('/service',[service::class, 'index']);
// membership
Route::get('/spa-membership',[membership::class,'membership']);
Route::get('/salon-membership',[membership::class,'salonMembership']);
//gift routes
Route::get('/gift-vouchers',[giftCard::class, 'index']);
// home spa
Route::get('/home-spa',[homespa::class,'index']);
Route::get('/shop/',[shop::class, 'index']);
// Product page Routes
Route::get('/products',[Products::class, 'index']);
Route::get('/products/product-detail/{pid}',[Products::class, 'prod_detail']);
// Home Page Routes
Route::get('/',[HomeController::class,'index']);
// Career Page Routes
Route::get('/careers',[CareerController::class, 'index']);
Route::get('/career-detail/{id}',[CareerController::class,'careerDetail']);

// About Us Page Route
Route::get('/about',[About::class,'index']);
Route::get('/about-detail',[About::class,'aboutDetail']);

// Contact Routes
Route::get('/contact',[contactus::class,'index']);
Route::get('/contact-detail',[contactus::class,'contactDetails']);


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// call ID

// Route::get('/first/{id}',function($id){  
//     // echo $id;
//     return View('first');
// });

// Route::get('/career', 'UserController@index');



//Route::view('first','first');
// Route::get('/first', function () {
//     return view('first');
// });

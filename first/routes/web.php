<?php

use Illuminate\Support\Facades\Route;

// import home controller
use App\Http\Controllers\contactus;
use App\Http\Controllers\About;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Products;

// define the home routes
// Route::get('/about/{id}',[HomeController::class,'about']);
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
Route::get('/contact-us',[contactus::class,'index']);
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

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


//PRAKTIKUM 1
//home
Route::get('/home', function () {
    return view('home', ['cafe' => 'Cafe']);
});

// product
Route::prefix('product')->group(function(){
    Route::get('/',[App\Http\Controllers\productController::class,'product']);
});

// news
Route::get('/news/{id}',[App\Http\Controllers\newsController::class,'news']);

//program
Route::prefix('program')->group(function(){
    Route::get('/',[App\Http\Controllers\programController::class,'program']);
});

//about us
Route::get('/about-us', function () {
    return view('aboutUs', ['aboutus'=> 'Toko ini berdiri sejak 2008']);
});

//contact us
Route::resource('contactus',contactController::class)->only([
    'index'
]);


<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use DebugBar\DebugBar;

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
//TEST
Route::get('welcome',function(){

    return view('welcome');
})->name('welcome');
//
Route::get('/', function () {
    return Redirect::to('home');
});
Route::get('intro', function () {
    return view('intro');
});
Route::get('home', function () {
    return view('home');

});
Route::get('product',function(){
    return view('product');
});
Route::get('price',[ProductController::class,'display']);
Route::get('contact',function(){

    return view('contact');
});
Route::post('add',[ContactController::class,'add']);
Route::post('orderRequest',[OrderController::class,'add']);
Route::get('index',function(){
    return view('index');
});
Route::get('productFil',[ProductController::class,'filter']);
Route::post('login',[LoginController::class,'display']);
//Route::get('profile',function(){
  ///   return view('profile');
//});

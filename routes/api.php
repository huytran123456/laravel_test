<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get(&#39;users&#39;, &#39;\App\Http\Controllers\UserController@index&#39;);
// Get one user
Route::get(&#39;users/{id}&#39;, &#39;\App\Http\Controllers\UserController@show&#39;);
// Save user
Route::post(&#39;users&#39;, &#39;\App\Http\Controllers\UserController@store&#39;);
// Update user
//Route::put(&#39;users/{id}&#39;, &#39;\App\Http\Controllers\UserController@update&#39;);
Route::post(&#39;users/{id}&#39;, &#39;\App\Http\Controllers\UserController@update&#39;);
// Delete user
Route::delete(&#39;users/{id}&#39;, &#39;\App\Http\Controllers\UserController@destroy&#39;);

<?php

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

use App\Http\Controllers\homeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", "htmlController@home");

Route::get("/about", "htmlController@about");

Route::get("/features", "htmlController@features");

Route::get("/portfolio", "htmlController@portfolio");

Route::get("/contact", "htmlController@contact");

Route::get("/services", "homeController@services");

Route::get("/products", "homeController@products");

Route::get("/team", "homeController@team");

// Route::get('/about', 'homeController@index');

Route::get('/call', 'testController@test');

// Route::get('/call', function() {
//     return view('call');
// });


// Route::get('/test', 'testController@test');


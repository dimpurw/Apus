<?php

use Illuminate\Support\Facades\Route;

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

// views
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/news', function () {
    return view('blog');
});
Route::get('/newsdetail', function () {
    return view('blog-detail');
});

// auth
Route::post('/postregister', 'Auth\RegisterController@store');
Route::post('/postlogin', 'Auth\LoginController@store');
Route::get('/logout', 'Auth\LoginController@logout');

// home 
Route::group(['middleware' => ['auth', 'CheckRole:user,admin']], function () {
    Route::get('/home', function () {
        return view('home');
    });
});

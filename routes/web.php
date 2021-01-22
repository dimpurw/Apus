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

// auth
Route::post('/postlogin', 'Auth\LoginController@postlogin');
Route::get('/logout', 'Auth\LoginController@logout');

// home 
Route::group(['middleware' => ['auth', 'CheckRole:pelanggan,barbershop,admin']], function () {
    Route::get('/home', function () {
        return view('home');
    });
});

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
Route::get('/blog', 'BlogController@index');
Route::get('/blogdetail/{id}', 'BlogController@show');
Route::get('/forum', 'ForumController@index');
// auth
Route::post('/postregister', 'Auth\RegisterController@store');
Route::post('/postlogin', 'Auth\LoginController@store');
Route::get('/logout', 'Auth\LoginController@logout');

// home 
Route::group(['middleware' => ['auth', 'CheckRole:user,admin']], function () {
    Route::get('/dashboards', function () {
        return view('dashboard.index');
    });
    Route::get('/home', function () {
        return view('home');
    });
    // profile
    Route::get('/profile/{id}', 'ProfileController@index');
    Route::post('/editprofile/{id}', 'ProfileController@update');
    Route::get('/forumdetail/{id}', 'ForumController@show');
    Route::get('/createforum', 'ForumController@create');
    Route::post('/createforum/{id}', 'ForumController@store');
    Route::post('/postcomment', 'ForumController@comment');
    Route::get('/prediction', function () {
        return view('dashboard.prediction');
    });
    Route::get('/dataprediction', function () {
        return view('dashboard.dataprediction');
    });
    Route::get('/detailprediction', function () {
        return view('dashboard.detailprediction');
    });
});

Route::group(['middleware' => ['auth', 'CheckRole:admin']], function() {
    Route::get('/createblog', 'BlogController@create');
    Route::post('/postblog', 'BlogController@store');
});

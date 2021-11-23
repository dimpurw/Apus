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
    $blog = DB::table('blogs')->orderBy('created_at', 'desc')->paginate(3);
    return view('index',['blog' => $blog]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/blogs', 'BlogController@index');
Route::get('/blogdetail/{id}', 'BlogController@show');
Route::get('/forum', 'ForumController@index');
Route::get('/image', function () {
    return view('image');
});
// auth
Route::post('/postregister', 'Auth\RegisterController@store');
Route::post('/postlogin', 'Auth\LoginController@store');
Route::get('/logout', 'Auth\LoginController@logout');

// home 
Route::group(['middleware' => ['auth', 'CheckRole:User,Subscriber,Admin']], function () {
    Route::get('/dashboards', function () {
        return view('dashboard.index');
    });
    Route::get('/home', function () {
        $blog = DB::table('blogs')->orderBy('created_at', 'desc')->paginate(3);
        return view('home',['blog' => $blog]);
    });
    // profile
    Route::get('/profile/{id}', 'ProfileController@index');
    Route::post('/editprofile/{id}', 'ProfileController@update');

    // forum
    Route::get('/forumdetail/{id}', 'ForumController@show');
    Route::get('/createforum', 'ForumController@create');
    Route::post('/createforum/{id}', 'ForumController@store');

    // comment
    Route::post('/postcomment', 'ForumController@comment');

    // prediction
    Route::get('/prediction', function () {
        return view('dashboard.prediction');
    });
    Route::get('/dataprediction', 'RecapDataController@index');
    Route::get('/detailprediction', function () {
        return view('dashboard.detailprediction');
    });
});

Route::group(['middleware' => ['auth', 'Admin']], function () {
    Route::get('/createblog', 'BlogController@create');
    Route::post('/postblog', 'BlogController@store');
});

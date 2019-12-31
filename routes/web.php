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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin'], function () {
    Route::view('/', 'admin.dashboard');
    Route::resource('places', 'PlaceController');
    Route::group(['prefix'=>'users'], function () {
        Route::view('/', 'admin.users.index');
    }); 
    Route::group(['prefix'=>'ratings'], function () {
        Route::view('/', 'admin.ratings.index');
    });
});


Route::group(['prefix'=>''], function () {
    Route::view('/', 'layouts.master');
});


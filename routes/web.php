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

Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'role:admin']], function () {
    Route::view('/', 'admin.dashboard');
    Route::resource('places', 'PlaceController');
    Route::resource('users', 'UserController');
});


Route::get('/', 'IndexController@index');

Route::group(['prefix'=>'places', 'middleware'=>['auth', 'role:client']], function () {
    Route::get('/detail/{id}', 'IndexController@detail');
});


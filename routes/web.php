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

Route::get('/', function () {
    return view('welcome');
});
//課題４　グループ化した場合
Route::group(['prefix' => 'admin'], function() {
    // Route::get('news/create', 'Admin\NewsController@add');
    Route::get('profile/create','Admin\ProfileController@add')->middleware('auth');
    Route::get('profile/edit','Admin\ProfileController@edit')->middleware('auth');
});

Route::post('login','Admin\ProfileController@add')->middleware('auth');

//課題３
Route::get('XXX', 'AAAController@bbb');

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('login','Admin\ProfileController@add');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

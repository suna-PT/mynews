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
    Route::get('news/create', 'Admin\NewsController@add');
    Route::get('profile/create','Admin\ProfileController@add');
    Route::get('profile/edit','Admin\ProfileController@edit');
});

//課題３
Route::get('XXX', 'AAAController@bbb');

//課題４　グループ化しない場合
//admin/profile/create にアクセスしたら ProfileController の add Actionに割り当てる
Route::get('admin/profile/create','Admin\ProfileController@add');

//admin/profile/edit にアクセスしたら ProfileController の edit Action に割り当てる
Route::get('admin/profile/edit','Admin\ProfileController@edit');
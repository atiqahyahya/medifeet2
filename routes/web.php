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
    return view('pages/welcome');
});

Route::get('manager','PagesController@getManager');
Route::get('staff','PagesController@getstaff');
Route::get('item','PagesController@getitem');

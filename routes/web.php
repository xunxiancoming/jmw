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
Route::get('/','StaticController@index')->name('home');
Route::get('/list','StaticController@list')->name('list');
Route::get('/detail','StaticController@detail')->name('detail');
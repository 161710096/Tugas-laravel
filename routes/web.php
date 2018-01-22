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
Route::get('home','tugasController@template');
Route::get('gallery','tugasController@template2');
Route::get('table','tugasController@template3');
Route::get('paragraf','tugasController@template4');
Route::get('custom','tugasController@template6');
Route::get('custom2','tugasController@template5');

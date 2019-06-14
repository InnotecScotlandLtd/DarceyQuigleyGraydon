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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('graydon', 'GraydonController@index');
Route::get('graydon/search', 'GraydonController@search');
Route::post('graydon/search', 'GraydonController@searchPost');
Route::get('graydon/company', 'GraydonController@company');
Route::get('graydon/monitoring', 'GraydonController@monitoring');
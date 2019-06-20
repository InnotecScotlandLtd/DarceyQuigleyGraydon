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
    return redirect('home');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('home', 'GraydonController@search')->name('home');
    Route::get('graydon', 'GraydonController@search');
    Route::get('graydon/search', 'GraydonController@search');
    Route::post('graydon/search', 'GraydonController@search')->name('post-search');
    Route::get('graydon/company/{id}/{type?}', 'GraydonController@companyDetail')->name('company-detail');
    Route::get('graydon/monitoring', 'GraydonController@monitoring');
});
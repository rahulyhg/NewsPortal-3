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
Auth::routes();

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function() {    
    Route::name('index')->get('/', 'HomeController@index');
    Route::resource('category', CategoryController::class);
});

Route::group(['prefix' => ''], function() {
    Route::name('index')->get('/', 'HomeController@index');
});
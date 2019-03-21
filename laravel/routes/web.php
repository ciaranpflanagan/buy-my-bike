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

// Store Routes
Route::get('/store', 'StoreController@index')->name('store');
Route::get('/store/{slug}', 'StoreController@product')->name('store.product');

// Other static page routes
Route::get('/shipping', 'HomeController@shipping')->name('shipping');
Route::get('/contact', 'HomeController@contact')->name('contact');
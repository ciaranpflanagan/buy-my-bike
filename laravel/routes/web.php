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
Route::get('/store/{slug}/pay', 'PaymentController@index')->name('store.pay');
Route::post('/store/{slug}/thank_you', 'PaymentController@thank_you')->name('store.thank_you');

// Other static page routes
Route::get('/shipping', 'PagesController@shipping')->name('shipping');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/contact', 'PagesController@submit_contact')->name('submit_contact');
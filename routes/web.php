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






Route::middleware('auth')->group(function () {
	

Route::get('/', 'ProductsController@create')->name('product.create');

   Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create', 'ProductsController@create')->name('product.create');
Route::get('/store', 'ProductsController@store')->name('product.store');
Route::get('/qr', 'ProductsController@qr')->name('qr');
Route::get('/result', 'ProductsController@result')->name('result.store');
Route::get('/sucess', 'ProductsController@sucess')->name('sucess');
});
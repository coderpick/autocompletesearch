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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','ProductController@index')->name('home.page');
Route::get('/product/{slug}','ProductController@productDetails')->name('product.details');
Route::post('/find/product','ProductController@autoComplete')->name('autocomplete.search');

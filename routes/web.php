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

Route::group(['namespace' => 'Shop'], function () {
   Route::get('/', 'MainShopController@index')->name('shop.index');
   Route::get('/danh-muc/{slug}', 'CategoryController@index')->name('category.index');
});

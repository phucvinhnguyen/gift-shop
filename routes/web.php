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
   Route::get('/danh-muc/{reqCategory}', 'CategoryController@index')->name('category.index');
   Route::get('/san-pham/{reqProduct}/{id}', 'ProductController@index')->name('product.index');
   Route::get('/cart', 'CartController@index')->name('product.cart');
   Route::get('/checkout', 'CheckoutController@index')->name('product.checkout');
   Route::get('/lien-he', 'ContactController@index')->name('shop.contact');

   Route::group(['prefix' => 'gioi-thieu'], function () {
       Route::get('/tram-huong', 'IntroController@index')->name('shop.intro');
       Route::get('/cau-hoi-dap', 'IntroController@faq')->name('shop.faq');
       Route::get('/giao-hang', 'IntroController@ship')->name('shop.ship');
   });

   Route::get('/bai-viet/{reqArticle?}', 'ArticleController@index')->name('blog.article');
});

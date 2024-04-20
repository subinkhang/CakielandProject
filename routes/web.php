<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\HomepageController@index');

Route::get('/product-list', 'App\Http\Controllers\ProductListController@index');

Route::get('/product-detail', 'App\Http\Controllers\ProductDetailController@index');

Route::get('/account', 'App\Http\Controllers\AccountController@index');

Route::get('/cart', 'App\Http\Controllers\CartController@index');

Route::get('/checkout', 'App\Http\Controllers\CheckoutController@index');

Route::get('/error-page', 'App\Http\Controllers\ErrorPageController@index');

Route::get('/signup', 'App\Http\Controllers\SignupController@index');

Route::get('/login', 'App\Http\Controllers\LoginController@index');

Route::get('/about-us', 'App\Http\Controllers\AboutUsController@index');

Route::fallback(function () {
    return redirect()->action('App\Http\Controllers\ErrorPageController@index');
});
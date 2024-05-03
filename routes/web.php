<?php

use Illuminate\Support\Facades\Route;



// User routes
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

Route::get('/pagination', 'App\Http\Controllers\PaginationController@index');

Route::fallback(function () {
    return redirect()->action('App\Http\Controllers\ErrorPageController@index');
});


// Admin routes
Route::get('/admin-login', 'App\Http\Controllers\AdminController@index');
Route::get('/admin-dashboard', 'App\Http\Controllers\AdminController@show_dashboard');
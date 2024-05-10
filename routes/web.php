<?php

use Illuminate\Support\Facades\Route;



// User routes
Route::get('/', 'App\Http\Controllers\HomepageController@index');

Route::get('/product-list', 'App\Http\Controllers\ProductListController@getAllProducts');
Route::get('/product-list', 'App\Http\Controllers\ProductListController@getPagedProducts');

Route::get('/product-detail', 'App\Http\Controllers\ProductDetailController@index');

Route::get('/account', 'App\Http\Controllers\AccountController@index');

Route::get('/cart', 'App\Http\Controllers\CartController@index');

Route::get('/checkout', 'App\Http\Controllers\CheckoutController@index');

Route::get('/error-page', 'App\Http\Controllers\ErrorPageController@index');

Route::get('/signup', 'App\Http\Controllers\SignupController@index');

Route::get('/login', 'App\Http\Controllers\LoginController@index');

Route::get('/about-us', 'App\Http\Controllers\AboutUsController@index');

Route::get('/my-orders', 'App\Http\Controllers\MyOrdersController@myorders');

Route::get('/pagination', 'App\Http\Controllers\PaginationController@index');

// Route::fallback(function () {
//     return redirect()->action('App\Http\Controllers\ErrorPageController@index');
// });


// Admin routes
Route::get('/admin-login', 'App\Http\Controllers\AdminController@index');
Route::get('/admin-dashboard', 'App\Http\Controllers\AdminController@show_dashboard');

// Product Routes
Route::get('/admin-list-product', 'App\Http\Controllers\AdminListProductController@get_list_product');
Route::get('/admin-add-product', 'App\Http\Controllers\ProductController@add_product');
Route::get('/admin-edit-product/{product_id}', 'App\Http\Controllers\AdminEditProductController@edit_product');
Route::post('/save-product', 'App\Http\Controllers\ProductController@save_product');
Route::post('/update-product/{product_id}', 'App\Http\Controllers\AdminEditProductController@update_product');

// Order Routes
Route::get('/admin-list-bill', 'App\Http\Controllers\AdminController@list_bill');

//Homepage Routes
Route::post('/save-email', 'App\Http\Controllers\HomePageController@save_email');
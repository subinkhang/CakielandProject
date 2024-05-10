<?php

use Illuminate\Support\Facades\Route;

// User routes
// Route::get('/', 'App\Http\Controllers\HomepageController@index');
Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/product-list', 'App\Http\Controllers\ProductListController@getAllProducts');
Route::get('/product-list', 'App\Http\Controllers\ProductListController@getPagedProducts');

// Category & sub-category Routes
Route::get('/product-list', 'App\Http\Controllers\ProductListController@getPagedProducts');
Route::get('/category{category_id}', 'App\Http\Controllers\ProductListController@showCategory');
Route::get('/sub-category{sub_category_id}', 'App\Http\Controllers\ProductListController@showSubCategory');

// Product Detail Routes
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

Route::fallback(function () {
    return redirect()->action('App\Http\Controllers\ErrorPageController@index');
});


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

// Auth Routes
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/product-detail/{product_id}', 'App\Http\Controllers\ProductDetailController@product_detail');
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('/cart', 'App\Http\Controllers\CartController@index');

Route::get('/checkout', 'App\Http\Controllers\CheckoutController@index');

Route::get('/error-page', 'App\Http\Controllers\ErrorPageController@index');

Route::get('/signup', 'App\Http\Controllers\SignupController@index');

Route::get('/login', 'App\Http\Controllers\LoginController@index');

Route::get('/about-us', 'App\Http\Controllers\AboutUsController@index');

Route::get('/my-orders', 'App\Http\Controllers\MyOrdersController@myorders_detail');

Route::get('/pagination', 'App\Http\Controllers\PaginationController@index');

// Route::fallback(function () {
//     return redirect()->action('App\Http\Controllers\ErrorPageController@index');
// });


// Admin routes
Route::get('/admin-dashboard', 'App\Http\Controllers\AdminController@show_dashboard');
Route::get('/admin-dashboard', 'App\Http\Controllers\AdminController@count_data');

// Product Routes
Route::get('/admin-list-product', 'App\Http\Controllers\AdminListProductController@get_list_product');
Route::get('/admin-add-product', 'App\Http\Controllers\ProductController@add_product');
Route::get('/admin-edit-product/{product_id}', 'App\Http\Controllers\AdminEditProductController@edit_product');
Route::post('/save-product', 'App\Http\Controllers\ProductController@save_product');
Route::post('/update-product/{product_id}', 'App\Http\Controllers\AdminEditProductController@update_product');


// Order Routes
Route::get('/admin-list-bill', 'App\Http\Controllers\AdminListBillController@get_list_orders');
// Route::get('/canceled-order-status/{ $order_id }', 'App\Http\Controllers\AdminListBillController@canceled_order_status');
// Route::get('/completed-order-status/{ $order_id }', 'App\Http\Controllers\AdminListBillController@completed_order_status');
// Route::get('/delivering-order-status/{ $order_id }', 'App\Http\Controllers\AdminListBillController@delivering_order_status');
// Route::put('/update-order-status/{id}', 'AdminListBillController@updateOrderStatus');
Route::get('/cancel-order-status/{id}', 'App\Http\Controllers\AdminListBillController@cancelOrderStatus');
Route::get('/complete-order-status/{id}', 'App\Http\Controllers\AdminListBillController@completeOrderStatus');
Route::get('/delivery-order-status/{id}', 'App\Http\Controllers\AdminListBillController@deliveryOrderStatus');



//Homepage Routes
Route::post('/save-email', 'App\Http\Controllers\HomePageController@save_email');
Route::get('/', 'App\Http\Controllers\HomePageController@getAllProducts');

//Admin List Product
Route::get('/delete-list-product/{id}', 'App\Http\Controllers\AdminListProductController@delete_list_product');
// Route::post('/update-order-status/{id}', 'AdminListBillController@updateOrderStatus');
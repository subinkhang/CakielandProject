<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

// Auth Routes
// Route::view('/', 'auth/login');
Route::view('dashboard', 'dashboard')->middleware(['auth'])->name('dashboard');
Route::view('profile', 'profile')->middleware(['auth', 'verified'])->name('profile');
require __DIR__ . '/auth.php';

// Product Routes
Route::get('/product-list', 'App\Http\Controllers\ProductListController@getPagedProducts');
Route::post('/search-product-list', 'App\Http\Controllers\ProductListController@search');
Route::get('/search-product-list', 'App\Http\Controllers\ProductListController@searchSort');
Route::get('/product-detail/{product_id}', 'App\Http\Controllers\ProductDetailController@product_detail');
Route::get('/product-detail', function () {
    return redirect('/product-list');
});

// Category & sub-category Routes
Route::get('/category{category_id}', 'App\Http\Controllers\ProductListController@showCategory');
Route::get('/sub-category{sub_category_id}', 'App\Http\Controllers\ProductListController@showSubCategory');

// Product Detail Routes
Route::get('/product-detail', 'App\Http\Controllers\ProductDetailController@index');

Route::get('/cart', 'App\Http\Controllers\CartController@index');
Route::post('/check-voucher', 'App\Http\Controllers\CartController@checkVoucher');

// User Dashboard Routes
Route::post('/save-email', 'App\Http\Controllers\HomePageController@save_email');
Route::get('/dashboard', 'App\Http\Controllers\HomePageController@getAllProducts')->name('dashboard');

// About Us Routes
Route::get('/about-us', 'App\Http\Controllers\AboutUsController@index');

// Other Routes
Route::fallback('App\Http\Controllers\ErrorPageController@index');
// Route::get('/pagination', 'App\Http\Controllers\PaginationController@index');



Route::middleware(['auth', 'verified'])->group(function () {
    // User routes
    Route::post('/update-account', 'App\Http\Controllers\AccountController@update_account');

    // Product Routes
    // Route::get('/product-list', 'App\Http\Controllers\ProductListController@getPagedProducts');
    // Route::post('/search-product-list', 'App\Http\Controllers\ProductListController@search');
    // Route::get('/search-product-list', 'App\Http\Controllers\ProductListController@searchSort');
    
    // Product Detail Routes
    // Route::get('/product-detail/{product_id}', 'App\Http\Controllers\ProductDetailController@product_detail');
    // Route::get('/product-detail', function () {
    //     return redirect('/product-list');
    // });

    // Category & sub-category Routes
    // Route::get('/category{category_id}', 'App\Http\Controllers\ProductListController@showCategory');
    // Route::get('/sub-category{sub_category_id}', 'App\Http\Controllers\ProductListController@showSubCategory');

    // Account Routes
    Route::get('/account', 'App\Http\Controllers\AccountController@index');
    Route::post('/update-account', [AccountController::class, 'updateAccount'])->name('update.account');
    Route::post('/update/{user_id}', 'App\Http\Controllers\CheckoutController@update');

    // Cart & Checkout Routes
    Route::get('/checkout', 'App\Http\Controllers\CheckoutController@index');

    // My Orders Routes
    Route::get('/my-orders', 'App\Http\Controllers\MyOrdersController@myorders');
    Route::get('/my-orders', 'App\Http\Controllers\MyOrdersController@myorders_detail');

    //VNPAY
    Route::post('/vnpay', 'App\Http\Controllers\CheckoutController@vnpay');
    Route::get('/vnpay-return', 'App\Http\Controllers\CheckoutController@vnpayReturn');
    Route::post('/save-temp-data', 'App\Http\Controllers\CheckoutController@saveTempData');

});

// Admin routes
Route::middleware(['auth', 'admin'])->group(function () {
    // AdminListBill Routes
    Route::get('/admin-list-bill', 'App\Http\Controllers\AdminListBillController@get_list_orders');
    Route::get('/cancel-order-status/{id}', 'App\Http\Controllers\AdminListBillController@cancelOrderStatus');
    Route::get('/complete-order-status/{id}', 'App\Http\Controllers\AdminListBillController@completeOrderStatus');
    Route::get('/delivery-order-status/{id}', 'App\Http\Controllers\AdminListBillController@deliveryOrderStatus');

    // AdminListProduct Routes
    Route::get('/delete-list-product/{id}', 'App\Http\Controllers\AdminListProductController@delete_list_product');
    Route::get('/admin-list-product', 'App\Http\Controllers\AdminListProductController@get_list_product');
    Route::get('/delete-list-product/{id}', 'App\Http\Controllers\AdminListProductController@delete_list_product');

    // Product Routes
    Route::get('/admin-add-product', 'App\Http\Controllers\ProductController@add_product');
    Route::post('/save-product', 'App\Http\Controllers\ProductController@save_product');

    // AdminEditProduct Routes
    Route::get('/admin-edit-product/{product_id}', 'App\Http\Controllers\AdminEditProductController@edit_product');
    Route::post('/update-product/{product_id}', 'App\Http\Controllers\AdminEditProductController@update_product');

    // Admin Routes
    Route::get('/admin-dashboard', 'App\Http\Controllers\AdminController@show_dashboard');
    Route::get('/admin-dashboard', 'App\Http\Controllers\AdminController@count_data');

    //Admin List Voucher
    Route::get('/admin-list-voucher', 'App\Http\Controllers\AdminListVoucherController@get_list_voucher');
    Route::get('/delete-list-voucher/{id}', 'App\Http\Controllers\AdminListVoucherController@delete_list_voucher');
    //Admin Add Voucher
    Route::get('/admin-add-voucher', 'App\Http\Controllers\AdminAddVoucherController@add_voucher');
    Route::post('/admin-add-voucher', 'App\Http\Controllers\AdminAddVoucherController@insert_coupon_code');
});

Route::get('/', function () { return redirect('/dashboard'); });


// AdminUser Routes
Route::get('/admin-user', 'App\Http\Controllers\AdminUserController@get_list_user');


use App\Http\Controllers\AdminUserController;
Route::get('/download-user', [AdminUserController::class, 'export_excel']);
use App\Http\Controllers\AdminListProductController;
Route::get('/download-product', [AdminListProductController::class, 'export_excel']);
use App\Http\Controllers\AdminListBillController;
Route::get('/download-bill', [AdminListBillController::class, 'export_excel']);
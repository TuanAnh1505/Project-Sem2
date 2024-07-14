<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Trang chủ
Route::get('/', 'HomeController@index')->name('home');

// User routes
Route::resource('users', 'UserController');

// Address routes
Route::resource('addresses', 'AddressController');

// Category routes
Route::resource('categories', 'CategoryController');

// Product routes
Route::resource('products', 'ProductController');

// Order routes
Route::resource('orders', 'OrderController');
Route::get('orders/{order}/details', 'OrderController@details')->name('orders.details');

// Payment routes
Route::resource('payments', 'PaymentController');

// Payment Method routes
Route::resource('payment-methods', 'PaymentMethodController');

// Shipping routes
Route::resource('shipping', 'ShippingController');

// Status routes
Route::resource('statuses', 'StatusController');

// Voucher routes
Route::resource('vouchers', 'VoucherController');

// Cart routes
Route::get('cart', 'CartController@index')->name('cart.index');
Route::post('cart/add', 'CartController@add')->name('cart.add');
Route::post('cart/remove', 'CartController@remove')->name('cart.remove');
Route::post('cart/update', 'CartController@update')->name('cart.update');

// Checkout route
Route::get('checkout', 'CheckoutController@index')->name('checkout');
Route::post('checkout', 'CheckoutController@process')->name('checkout.process');

// Authentication routes (if you're using Laravel's built-in authentication)

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

// Start non localized routes
Route::post('/timezone', 'HomeController@timezoneAjax');
Route::get('/contact', function () { return redirect(locale_route('contact.index')); });
// End non localized routes


// Start localized routes
Route::get('/{language?}', 'HomeController@index')->name('home.index');
Route::get('/{language}/contact', 'ContactController@index')->name('contact.index');
// End localized routes


Route::group(['namespace' => 'shop'], function() {
    // Start non localized routes
    Route::get('/cart', function () { return redirect(locale_route('cart.index')); });
    Route::get('/products', function () { return redirect(locale_route('products.index')); });
    Route::get('/services', function () { return redirect(locale_route('services.index')); });
    // End non localized routes


    // Start localized routes
    Route::get('/{language}/cart', 'CartController@index')->name('cart.index');
    Route::get('/{language}/products', 'ProductsController@index')->name('products.index');
    Route::get('/{language}/services', 'ServicesController@index')->name('services.index');
    // End localized routes
});


Route::group(['namespace' => 'blog'], function() {
    // Start non localized routes
    Route::get('/blog', function () { return redirect(locale_route('blog.index')); });
    // End non localized routes


    // Start localized routes
    Route::get('/{language}/blog', 'BlogController@index')->name('blog.index');
    // End localized routes
});


Route::group(['namespace' => 'customer'], function() {
    // Start non localized routes

    // End non localized routes


    // Start localized routes

    // End localized routes
});
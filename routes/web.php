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

// Start localized routes
Route::get('/{language?}', 'HomeController@index')->name('home.index');
Route::get('/{language}/contact', 'ContactController@index')->name('contact.index');
Route::post('/{language}/contact', 'ContactController@sendMessage')->name('contact.send-message');

Route::group(['namespace' => 'shop'], function() {
    // Start non localized routes
    Route::get('/products', function () { return redirect(locale_route('products.index')); });
    Route::get('/services', function () { return redirect(locale_route('services.index')); });

    Route::get('/products/{product}', function () { return redirect(locale_route('products.show', compact('product'))); });
    Route::get('/services/{service}', function () { return redirect(locale_route('services.show', compact('service'))); });

    // Start localized routes
    Route::get('/{language}/services', 'ServiceController@index')->name('services.index');
    Route::get('/{language}/products', 'ProductController@index')->name('products.index');

    Route::get('/{language}/products/{product}', 'ProductController@show')->name('products.show');
    Route::get('/{language}/services/{service}', 'ServiceController@show')->name('services.show');
});

Route::group(['namespace' => 'blog'], function() {
    // Start non localized routes
    Route::get('/articles', function () { return redirect(locale_route('articles.index')); });
    Route::get('/articles/{article}', function () { return redirect(locale_route('articles.show', compact("article"))); });

    // Start localized routes
    Route::get('/{language}/articles', 'ArticleController@index')->name('articles.index');
    Route::get('/{language}/articles/{article}', 'ArticleController@show')->name('articles.show');

    Route::post('/{language}/articles/{article}/comment', 'ArticleController@comment')->name('articles.comment');
});

Route::group(['namespace' => 'auth'], function() {
    // Start non localized routes
    Route::get('/login', function () { return redirect(locale_route('login')); });

    // Start localized routes
    Route::get('/{language}/login', 'LoginController@showLoginForm')->name('login');

    Route::post('/{language}/login', 'LoginController@login');
    Route::post('/{language}/logout', 'LoginController@logout')->name('logout');
});

Route::group(['namespace' => 'customer'], function() {
    // Start non localized routes
    Route::get('/customer/dashboard', function () { return redirect(locale_route('customer.dashboard.index')); });

    // Start localized routes
    Route::get('/{language}/customer/dashboard', 'DashboardController@index')->name('customer.dashboard.index');
});

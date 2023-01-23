<?php

use App\Http\Controllers\Front\AboutUsController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(), 'namespace' => 'Front',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {


    #### Home ####
    Route::get('/', 'HomeController@index')->name('home');

    #### About Us ####
    Route::get('/about_us', 'AboutUsController@index')->name('about_us');

    #### Contact ####
    Route::get('/contact', 'ContactController@index')->name('contact');

    #### Service ####
    Route::get('/service', 'ServiceController@index')->name('service');

    #### Request ####
    Route::get('/request', 'RequestController@index')->name('request');

    #### Product ####
    Route::get('/products', 'ProductController@index')->name('product');
    Route::get('/search', 'ProductController@search')->name('product-search');
    Route::get('/filter', 'ProductController@filter')->name('product-filter');
    Route::get('/categorySort', 'ProductController@categorySort')->name('categorySort');

        #### Request ####
        Route::get('/request', 'Front\RequestController@index')->name('request');
        Route::post('/store', 'Front\RequestController@store')->name('store.request');

        #### Product ####
        Route::get('/products', 'Front\ProductController@index')->name('product');

    #### Single ####
    Route::get('/single', 'SingleController@index')->name('single');
    Route::get('/product/{id}', 'SingleController@getProduct')->name('get.product');

    #### Faqs ####
    Route::get('/faqs', 'FaqsController@index')->name('faqs');




});

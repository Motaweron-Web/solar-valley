<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>'admin'],function (){
    Route::get('login', 'AuthController@index')->name('admin.login');
    Route::POST('login', 'AuthController@login')->name('admin.login');
});

Route::group(['prefix'=>'admin','middleware'=>'auth:admin'],function (){
    Route::get('/','MainController@index')->name('adminHome');

    Route::resource('admins','AdminController');
    Route::post('/delete_admin','AdminController@delete')->name('delete_admin');
    Route::post('/admins_update','AdminController@update')->name('admins_update');

    #### Category ####
    Route::resource('/category', 'CategoryController');

    #### Service ####
    Route::resource('/service', 'ServiceController');

    #### About Us ####
    Route::resource('/about_us', 'AboutUsController')->except('create','store', 'edit', 'destroy');

    #### Contact ####
    Route::resource('/contact', 'ContactController');

    #### Product ####
    Route::resource('/product', 'ProductController');

    #### Quote ####
    Route::resource('/quote', 'QuoteController');

    #### Setting ####
    Route::resource('/setting', 'SettingController');



#### Auth ####
Route::get('logout', 'AuthController@logout')->name('admin.logout');



});


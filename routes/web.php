<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::group(['middleware'=>'auth'],function(){
    Route::group(['middleware'=>'admin','prefix'=>'admin'],function(){
        Route::get('',function(){
            return "test";
        });
        Route::resource('admin/settings', 'Admin\\SettingController');
    });
    Route::group(['middleware'=>'embassy','prefix'=>'embassy'],function(){
        Route::get('',function(){
            return "test";
        });

    });
    Route::group(['middleware'=>'ministry','prefix'=>'ministry'],function(){
        Route::get('',function(){
            return "ministry";
            return "ministry";
            return "ministry";
        });

    });
});


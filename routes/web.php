<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// All admin routes


Route::name('admin.')->prefix('admin/')->namespace('Admin')->group(function () {

    Route::get('/login', 'AdminController@showlogin')->name('login');
    Route::post('/authorize', 'AdminController@authenticate')->name('authorize');

    Route::middleware(['adminlogin'])->group(function(){
        Route::get('/', 'AdminController@index')->name('dashboard');
        Route::resource('social', 'SocialController');

        //Upload
        Route::post('/upload', 'UploadController@upload')->name('upload');

        //Page manager
        Route::get('/pagelist', 'PageController@index')->name('pagelist');
        Route::get('/createpage', 'PageController@create')->name('createpage');
        Route::get('/editpage/{page}', 'PageController@edit')->name('editpage');

        Route::post('/ajax_pagelist', 'PageController@pageList')->name('ajax_pagelist');
        Route::post('/savepage', 'PageController@store')->name('savepage');

    });

});

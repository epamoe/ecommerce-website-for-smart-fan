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



Route::group(['namespace'=>'App\Http\Controllers\Frontend'],function(){

    Route::get('/','Vitrine\IndexController@index')->name('vitrine');
    Route::get('/signin','Auth\LoginController@index')->name('signin');
    Route::post('/login','Auth\LoginController@authenticate')->name('login');

    
    });

Route::group(['namespace'=>'App\Http\Controllers\Backend'],function(){

Route::get('dashboard','HomeController@index')->name('back.home');

});

/*
    les routes de gestion du profile
*/
Route::get('/profile', function () {
    return view('app-profile');
});

Route::post('/profile','App\Http\Controllers\Profile\ProfileController@find')->name('findprofile');
Route::post('/profile-setting','App\Http\Controllers\Profile\ProfileController@edit')->name('editprofile');

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
    Route::post('/logout','Auth\LoginController@logout')->name('logout');
    Route::get('/logout','Auth\LoginController@logout')->name('logout');
 Route::post('/sendmessage','Vitrine\IndexController@sendmessage')->name('sendmessage');
    Route::get('/sendmessage','Vitrine\IndexController@sendmessage')->name('sendmessage');


    
    });

Route::group(['namespace'=>'App\Http\Controllers\Backend'],function(){

Route::get('dashboard','HomeController@index')->name('back.home');
Route::get('bestinvest','BestinvestController@index')->name('bestinvest');
Route::get('userinvest','BestinvestController@users')->name('userlist');
Route::post('userinvest','BestinvestController@users')->name('userlist');


Route::get('showmail','SendMailController@show')->name('sendmailshow');
Route::post('sendmail','SendMailController@sendmail')->name('sendmail');
Route::get('sendmail','SendMailController@sendmail')->name('sendmail');





});

/*
    les routes de gestion du profile
*/
// Route::get('/profile', function () {
//     return view('app-profile');
// });

Route::post('/profile','App\Http\Controllers\Backend\Profil\ProfilController@index')->name('findprofile');
Route::get('/profile','App\Http\Controllers\Backend\Profil\ProfilController@index')->name('findprofile');

Route::post('/profile-setting','App\Http\Controllers\Profile\ProfileController@edit')->name('editprofile');

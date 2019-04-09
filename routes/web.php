<?php

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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' =>'auth'], function() {

    Route::get('/onetimedonate', 'PageController@oneTimeDonatePage')->name('oneTimeDonatePage');
    Route::post('/onetimeprocess', 'PageController@oneTimeProcessPay')->name('oneTimeProcessPay');

    Route::get('/recurrentdonate', 'PageController@recurrentDonatePage')->name('recurrentDonatePage');
    Route::post('/recurrentprocess', 'PageController@recurrentProcessPay')->name('recurrentProcessPay');
    Route::get('/paymentrecord', 'PageController@paymentRecord')->name('paymentRecord');


    Route::get('/paymentrecord', 'PageController@paymentRecord')->name('paymentRecord');


    Route::get('/donationcompleted', 'PageController@donationcompleted')->name('donationcompleted');
});
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('member_register','Home\CommonController@member_register')->name('member_register');
Route::get('member_login','Home\CommonController@member_login')->name('member_login');

Route::group(['namespace' => 'Auth'],function(){
    Route::get('member/index','IndexController@index')->name('member_index');
});

Route::group(['namespace' => 'Home',] , function (){
    Route::get('/','HomeController@index')->name('home');
    Route::get('services/show','ServicesShowController@index')->name('services_show');
    Route::get('services/info','ServicesInfoController@index')->name('services_info');
});
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

Route::get('/', function () {
    return view('front');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('mypage/index', 'Admin\MypageController@add');
});

Route::group(['prefix' => 'admin'], function() {
     Route::get('ticket/index', 'Admin\TicketController@add')->middleware('auth');
    Route::get('ticket/post', 'Admin\TicketController@edit')->middleware('auth');
    Route::get('mypage/edit', 'Admin\MypageController@edit')->middleware('auth');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('/home');
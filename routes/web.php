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
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('ticket/index', 'Admin\TicketController@add');
    Route::get('ticket/post', 'Admin\TicketController@edit');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('mypage/index', 'Admin\MypageController@add')->middleware('auth');
    Route::get('mypage/edit', 'Admin\MypageController@edit')->middleware('auth');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('/home');

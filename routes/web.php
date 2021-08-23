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
    Route::get('ticket/rank', 'Admin\TicketController@add');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('ticket/index', 'Admin\TicketController@index');
    Route::get('ticket/post', 'Admin\TicketController@edit');
    Route::get('mypage/edit', 'Admin\MypageController@edit');
    Route::post('mypage/edit', 'Admin\MypageController@create');
    Route::post('ticket/post', 'Admin\TicketController@create');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('/home');
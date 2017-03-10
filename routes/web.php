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


Route::any('/wechat', 'WechatController@serve');


Route::group(['middleward' => ['web']], function () {

    Route::get('/users', 'UsersController@users');
    Route::get('/user/{openId}', 'UsersController@user');
    Route::get('/user/{openId}/{remark}', 'UsersController@remark');
});


Route::group(['prefix' => 'tag'], function () {

    Route::get('/lists', 'TagController@Lists');
    Route::get('/create/{tagName}', 'TagController@create');
    Route::get('/update/{tagId}/{tagName}', 'TagController@update');
    Route::get('/delete/{tagId}', 'TagController@delete');
});


Route::group(['prefix' => 'material'], function () {

    Route::get('/uploadImage', 'MaterialController@uploadImage');
    Route::get('/create/{tagName}', 'TagController@create');
    Route::get('/update/{tagId}/{tagName}', 'TagController@update');
    Route::get('/delete/{tagId}', 'TagController@delete');
});
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// 路由
Route::get('/', function () {
	
    return view('welcome');
});

//加载后台主页面
Route::controller('/admin','Admin\AdminController');
// 在后台加载用户页面
Route::resource('/user','Admin\UserController');

//在后台加载分类页面
Route::resource('/cate','Admin\CateController');



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
Route::any('index/index','Index\\IndexController@index');//主页
Route::get('index/reg','Index\\IndexController@reg');//注册
Route::post('index/doReg','Index\\IndexController@doReg');//注册
Route::get('index/login','Index\\IndexController@login');//登录
Route::post('index/doLogin','Index\\IndexController@doLogin');//登录
Route::get('index/center','Index\\IndexController@center');//个人中心

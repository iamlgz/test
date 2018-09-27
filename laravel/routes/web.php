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

//商城首页
Route::get('index','Shop\IndexController@index');
//商城登录
Route::get('login','Shop\UserController@login');
//商品列表
Route::get('list','Shop\IndexController@goodsList');
//商品详细
Route::get('detail','Shop\IndexController@goodsDetail');
//购物车
Route::get('cart','Shop\IndexController@shoppingCart');
//用户个人信息
Route::get('selfinfo','Shop\UserController@selfInfo');
//用户个人订单
Route::get('order','Shop\UserController@orderForGoods');
//注册
Route::get('register','Shop\UserController@register');

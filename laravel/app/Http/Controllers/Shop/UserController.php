<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /*
     * 渲染登录模板
     * */
    public function login()
    {
        return view('user.login');
    }

    /*
     * 用户订单渲染
     * */
    public function orderForGoods()
    {
        return view('user.order_for_goods');
    }

    /*
     * 注册渲染
     * */
    public function register()
    {
        return view('user.register');
    }

    /*
     * 用户个人信息
     * */
    public function selfInfo()
    {
        return view('user.self_info');
    }
}

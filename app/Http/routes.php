<?php

/*
|--------------------------------------------------------------------------
| 程序路由
|--------------------------------------------------------------------------
|
| 这里注册该应用程序中所有的路由，即页面的访问地址。
| 通过浏览器访问该路径（注册路由中的第一个参数），即可查看相应的页面。
| 路由方法会返回一个页面模板，模板存放在项目中的 resource/views 文件夹中。
| view 函数接收一个字符串参数，通过点语法(.)来获取对应文件夹内的模板。
|
*/

/**
 * 首页
 */
Route::get('/', 'IndexController@homePage');

/**
 * 定义一个路由群组，并设置访问前缀为 account
 * 在该群组内部，所有访问地址都需要增加前缀，例如登录页的访问地址：/account/login
 */
Route::group(['prefix' => 'account'], function() {
    /**
     * 注册页
     * 访问地址：/account/register
     */
    Route::get('register', 'AccountController@registerPage');

    /**
     * 注册接口
     * 访问地址：/account/register
     */
    Route::post('register', 'AccountController@register');

    /**
     * 登录页
     * 访问地址：/account/login
     */
    Route::get('login', 'AccountController@loginPage');

    /**
     * 登录接口
     * 访问地址：/account/login
     */
    Route::post('login', 'AccountController@login');

    /**
     * 退出登录
     * 访问地址：/account/logout
     */
    Route::get('logout', 'AccountController@logout');
});

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function() {
    /**
     * 我的购物车页
     * 访问地址：/user/shopping-cart
     */
    Route::get('shopping-cart', 'GoodsController@shoppingCartPage');

    /**
     * 删除购物车中的商品
     * 访问地址：/user/delete/cart
     */
    Route::post('delete/cart', 'GoodsController@deleteShoppingCart');

    /**
     * 我的订单页
     * 访问地址：/user/order
     */
    Route::get('order', 'GoodsController@orderPage');

    /**
     * 支付接口
     * 访问地址：/user/pay
     */
    Route::post('pay', 'GoodsController@pay');
});

Route::group(['prefix' => 'goods'], function() {
    /**
     * 商品列表页
     * 访问地址；/goods/list
     */
    Route::get('list', 'GoodsController@goodsListPage');

    /**
     * 商品详情页
     * 访问地址：/goods/single
     */
    Route::get('single', 'GoodsController@goodsDetailPage');

    /**
     * 添加商品至购物车
     * 访问地址：/goods/add/cart
     */
    Route::post('add/cart', 'GoodsController@addCart');
});
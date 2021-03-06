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
 * 上传文件接口
 */
Route::post('/upload/image', 'IndexController@uploads');

/**
 * 搜索结果页
 * 访问地址：/search
 */
Route::get('search', 'IndexController@searchPage');

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

    /**
     * 删除订单商品
     * 访问地址：/user/delete/order
     */
    Route::post('delete/order', 'GoodsController@deleteOrder');
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

Route::group(['prefix' => 'admin'], function() {
    /**
     * 后台登录页
     * 访问地址：/admin/login
     */
    Route::get('login', 'AdminController@loginPage');

    /**
     * 后台登录接口
     * 访问地址：/admin/login
     */
    Route::post('login', 'AdminController@login');

    /**
     * 必须登录
     */
    Route::group(['middleware' => 'admin'], function() {
        /**
         * 后台首页
         * 访问地址：/admin
         */
        Route::get('index', 'AdminController@homePage');

        /**
         * 修改密码页
         * 访问地址：/admin/change-password
         */
        Route::get('change-password', 'AdminController@changePasswordPage');

        /**
         * 修改密码接口
         * 访问地址：/admin/change-password
         */
        Route::post('change-password', 'AdminController@changePassword');

        /**
         * 购买记录页
         * 访问地址：/admin/order
         */
        Route::get('order', 'AdminController@orderPage');

        Route::group(['prefix' => 'user'], function() {
            /**
             * 用户列表页
             * 访问地址：/admin/user
             */
            Route::get('', 'AdminController@userListPage');

            /**
             * 禁用 / 启用用户
             * 访问地址：/admin/user/disable
             */
            Route::post('disable', 'AdminController@userDisable');
        });

        Route::group(['prefix' => 'goods'], function() {
            /**
             * 商品列表页
             * 访问地址：/admin/goods
             */
            Route::get('', 'AdminController@goodsPage');

            /**
             * 添加商品页
             * 访问地址：/admin/goods/add
             */
            Route::get('add', 'AdminController@goodsAddPage');

            /**
             * 添加商品接口
             * 访问地址：/admin/goods/add
             */
            Route::post('add', 'AdminController@goodsAdd');

            /**
             * 修改商品页
             * 访问地址：/admin/goods/update
             */
            Route::get('update', 'AdminController@goodsUpdatePage');

            /**
             * 修改商品接口
             * 访问地址：/admin/goods/update
             */
            Route::post('update', 'AdminController@goodsUpdate');

            /**
             * 禁用 / 启用商品
             * 访问地址：/admin/goods/disable
             */
            Route::post('disable', 'AdminController@goodsDisable');

            /**
             * 删除商品
             * 访问地址：/admin/goods/delete
             */
            Route::post('delete', 'AdminController@goodsDelete');

            /**
             * 商品类型列表页
             * 访问地址：/admin/goods/type
             */
            Route::get('type', 'AdminController@goodsTypePage');

            /**
             * 添加商品类型
             * 访问地址：/admin/goods/type/add
             */
            Route::post('type/add', 'AdminController@goodsTypeAdd');

            /**
             * 禁用 / 启用商品类型
             * 访问地址：/admin/goods/type/disable
             */
            Route::post('type/disable', 'AdminController@goodsTypeDisable');

            /**
             * 删除商品类型
             * 访问地址：/admin/goods/type/delete
             */
            Route::post('type/delete', 'AdminController@goodsTypeDelete');
        });
    });
});

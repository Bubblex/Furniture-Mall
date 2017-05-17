<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    /**
     * 注册页
     *
     * @return void
     */
    public function registerPage() {
        return view('account.register');
    }

    /**
     * 注册接口
     *
     * @param Request $request
     * @return void
     */
    public function register(Request $request) {

    }

    /**
     * 登录页
     *
     * @return void
     */
    public function loginPage() {
        return view('account.login');
    }

    /**
     * 登录接口
     *
     * @param Request $request
     * @return void
     */
    public function login(Request $request) {

    }
}

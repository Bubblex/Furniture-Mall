<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\UserRepository;
use App\Repositories\UserAddressRepository;

class AccountController extends Controller
{
    protected $user;
    protected $userAddress;

    public function __construct(UserRepository $user, UserAddressRepository $userAddress) {
        $this->user = $user;
        $this->userAddress = $userAddress;
    }

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
        $user = $this->user->getUserByUsername($request->username);

        if ($user) {
            return response()->json([
                'status' => 3,
                'message' => '该用户已注册'
            ]);
        }

        $user = $this->user->addGeneralUser($request->all());

        if ($user) {
            $this->userAddress->add($user->id, $request->address);
            return response()->json([
                'status' => 1,
                'message' => '注册成功，请登录'
            ]);
        }
        else {
            return response()->json([
                'status' => 2,
                'message' => '注册失败，请稍后再试'
            ]);
        }
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
        $user = $this->user->getGeneralUserByUsername($request->username);

        if (!$user) {
            return response()->json([
                'status' => 2,
                'message' => '该用户不存在'
            ]);
        }

        if ($user->password != md5($request->password)) {
            return response()->json([
                'status' => 3,
                'message' => '用户名或密码不正确'
            ]);
        }

        if ($user->status != 1) {
            return response()->json([
                'status' => 4,
                'message' => '用户已被禁用或无权限登录'
            ]);
        }

        session(['user' => $user]);

        return response()->json([
            'status' => 1,
            'message' => '登录成功'
        ]);
    }

    public function logout(Request $request) {
        $request->session()->flush();

        return redirect('/account/login');
    }
}

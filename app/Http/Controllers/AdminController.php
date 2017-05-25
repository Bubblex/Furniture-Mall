<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\UserRepository;
use App\Repositories\GoodsTypeRepository;

class AdminController extends Controller
{
    protected $user;
    protected $goodsType;

    public function __construct(
        UserRepository $user,
        GoodsTypeRepository $goodsType
    ) {
        $this->user = $user;
        $this->goodsType = $goodsType;
    }
    /**
     * 登录页
     *
     * @return void
     */
    public function loginPage() {
        return view('admin.login');
    }

    /**
     * 登录接口
     *
     * @param Request $request
     * @return void
     */
    public function login(Request $request) {
        $user = $this->user->getUserByUsername($request->username);

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

        if ($user->status != 1 || $user->role_id != 2) {
            return response()->json([
                'status' => 4,
                'message' => '用户已被禁用或无权限登录'
            ]);
        }

        session(['admin' => $user]);

        return response()->json([
            'status' => 1,
            'message' => '登录成功'
        ]);
    }

    /**
     * 首页
     *
     * @return void
     */
    public function homePage() {
        return view('admin.index');
    }

    /**
     * 用户列表页
     *
     * @return void
     */
    public function userListPage() {
        $users = $this->user->all();

        return view('admin.user')->with([
            'users' => $users,
        ]);
    }

    /**
     * 商品类型列表页
     *
     * @return void
     */
    public function goodsTypePage() {
        $goodsType = $this->goodsType->all();

        return view('admin.goods-type')->with([
            'goodsType' => $goodsType
        ]);
    }
}

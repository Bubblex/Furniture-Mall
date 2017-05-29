<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\UserRepository;
use App\Repositories\GoodsTypeRepository;
use App\Repositories\GoodsRepository;

class AdminController extends Controller
{
    protected $user;
    protected $goods;
    protected $goodsType;

    public function __construct(
        UserRepository $user,
        GoodsRepository $goods,
        GoodsTypeRepository $goodsType
    ) {
        $this->user = $user;
        $this->goods = $goods;
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
     * 修改密码页
     *
     * @return void
     */
    public function changePasswordPage() {
        return view('admin.change-password');
    }

    /**
     * 修改密码
     *
     * @param Request $request
     * @return void
     */
    public function changePassword(Request $request) {
        $user = $this->user->byId(session('admin')->id);

        if ($user->password != md5($request->oldPassword)) {
            return response()->json([
                'status' => 2,
                'message' => '旧密码错误'
            ]);
        }

        $user->password = md5($request->newPassword);
        $user->save();

        session()->forget('admin');

        return response()->json([
            'status' => 1,
            'message' => '修改成功，请重新登录'
        ]);
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
     * 用户启用禁用状态
     *
     * @param Request $request
     * @return void
     */
    public function userDisable(Request $request) {
        $id = $request->id;
        $status = $request->status;

        $this->user->update($id, ['status' => $status]);

        return response()->json([
            'status' => 1,
            'message' => '更新用户状态成功'
        ]);
    }

    /**
     * 商品列表页
     *
     * @return void
     */
    public function goodsPage() {
        $goods = $this->goods->all();

        return view('admin.goods')->with([
            'goods' => $goods,
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

    /**
     * 禁用 / 启用商品类型
     *
     * @param Request $request
     * @return void
     */
    public function goodsTypeDisable(Request $request) {
        $id = $request->id;
        $status = $request->status;

        $this->goodsType->update($id, [
            'status' => $status
        ]);

        return response()->json([
            'status' => 1,
            'message' => '更新商品类型状态成功'
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\UserRepository;
use App\Repositories\GoodsTypeRepository;
use App\Repositories\GoodsImageRepository;
use App\Repositories\GoodsRepository;
use App\Repositories\OrderRepository;

class AdminController extends Controller
{
    protected $user;
    protected $goods;
    protected $order;
    protected $goodsType;
    protected $goodsImage;

    public function __construct(
        UserRepository $user,
        GoodsRepository $goods,
        OrderRepository $order,
        GoodsTypeRepository $goodsType,
        GoodsImageRepository $goodsImage
    ) {
        $this->user = $user;
        $this->goods = $goods;
        $this->order = $order;
        $this->goodsType = $goodsType;
        $this->goodsImage = $goodsImage;
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
     * 禁用 / 启用商品
     *
     * @param Request $request
     * @return void
     */
    public function goodsDisable(Request $request) {
        $id = $request->id;
        $status = $request->status;

        $this->goods->update($id, [
            'status' => $status
        ]);

        return response()->json([
            'status' => 1,
            'message' => '更新商品状态成功'
        ]);
    }

    /**
     * 删除商品
     *
     * @param Request $request
     * @return void
     */
    public function goodsDelete(Request $request) {
        $id = $request->id;

        $this->goods->delete($id);

        return response()->json([
            'status' => 1,
            'message' => '删除商品成功'
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

    /**
     * 删除商品类型
     *
     * @param Request $request
     * @return void
     */
    public function goodsTypeDelete(Request $request) {
        $id = $request->id;

        $this->goodsType->delete($id);

        return response()->json([
            'status' => 1,
            'message' => '删除商品类型成功'
        ]);
    }

    /**
     * 添加商品类型接口
     *
     * @param Request $request
     * @return void
     */
    public function goodsTypeAdd(Request $request) {
        $this->goodsType->add($request->name);

        return response()->json([
            'status' => 1,
            'message' => '添加成功'
        ]);
    }

    /**
     * 添加商品页
     *
     * @return void
     */
    public function goodsAddPage() {
        $goodsType = $this->goodsType->all();

        return view('admin.goods-add')->with([
            'goodsType' => $goodsType
        ]);
    }

    /**
     * 修改商品页面
     *
     * @param Request $request
     * @return void
     */
    public function goodsUpdatePage(Request $request) {
        $goodsType = $this->goodsType->all();
        $goods = $this->goods->find($request->id);

        return view('admin.goods-update')->with([
            'goodsType' => $goodsType,
            'goods' => $goods,
        ]);
    }

    public function goodsUpdate(Request $request) {
        $this->goods->update($request->id, [
            'name' => $request->name,
            'goods_type_id' => $request->type,
            'norm' => $request->norm,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'summary' => $request->summary,
            'detail' => $request->detail
        ]);
        return response()->json([
            'status' => 1,
            'message' => '修改成功'
        ]);
    }

    /**
     * 添加商品接口
     *
     * @param Request $request
     * @return void
     */
    public function goodsAdd(Request $request) {
        $result = $this->goods->add($request);

        foreach ($request->images as $item) {
            $this->goodsImage->add([
                'id' => $result->id,
                'url' => $item
            ]);
        }

        return response()->json([
            'status' => 1,
            'message' => '商品添加成功'
        ]);
    }

    /**
     * 订单页
     *
     * @return void
     */
    public function orderPage() {
        return view('admin.order')->with([
            'orders' => $this->order->allWithTrashed()
        ]);
    }
}

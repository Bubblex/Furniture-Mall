<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\UserRepository;
use App\Repositories\GoodsRepository;
use App\Repositories\GoodsTypeRepository;
use App\Repositories\ShoppingCartRepository;
use App\Repositories\OrderRepository;

class GoodsController extends Controller
{
    protected $user;
    protected $goods;
    protected $order;
    protected $goodsType;
    protected $shoppingCart;

    public function __construct(
        OrderRepository $order,
        GoodsRepository $goods,
        GoodsTypeRepository $goodsType,
        ShoppingCartRepository $shoppingCart,
        UserRepository $user) {
        $this->user = $user;
        $this->goods = $goods;
        $this->order = $order;
        $this->goodsType = $goodsType;
        $this->shoppingCart = $shoppingCart;
    }

    /**
     * 商品列表页
     *
     * @param Request $request
     * @return void
     */
    public function goodsListPage(Request $request) {
        $id = $request->id;
        $goods = $this->goods->getGoodsByType($id, 9);
        $goodsType = $this->goodsType->getNormalGoodsTypes();

        return view('goods.list')->with([
            'id' => $id,
            'goods' => $goods,
            'goodsType' => $goodsType
        ]);
    }

    /**
     * 商品详情页
     *
     * @param Request $request
     * @return void
     */
    public function goodsDetailPage(Request $request) {
        $id = $request->id;
        $goods = $this->goods->getGoodsById($id);
        $recommendGoods = $this->goods->getGoodsByTypeWithNum($goods->goods_type_id, 10);
        $hotGoods = $this->order->most();

        return view('goods.single')->with([
            'id' => $id,
            'goods' => $goods,
            'recommendGoods' => $recommendGoods,
            'hotGoods' => $hotGoods,
        ]);
    }

    /**
     * 添加商品至购物车
     *
     * @param Reqeust $request
     * @return void
     */
    public function addCart(Request $request) {
        $goods = $this->goods->getGoodsById($request->id);

        $cart = $this->shoppingCart->addGoods(session('user'), $goods, $request->norm, $request->num);

        if (!$cart) {
            return response()->json([
                'status' => 0,
                'message' => '添加至购物车失败'
            ]);
        }

        return response()->json([
            'status' => 1,
            'message' => '成功添加该商品至购物车'
        ]);
    }

    /**
     * 购物车页面
     *
     * @return void
     */
    public function shoppingCartPage() {
        $id = session('user')->id;

        $user = $this->user->byId($id);
        $price = 0;
        $discount = 0;

        foreach ($user->cart as $item) {
            $price += $item->num * $item->goods->price;
            $discount += $item->num * $item->goods->discount_price;
        }

        return view('user.shopping-cart')->with([
            'carts' => $user->cart,
            'price' => $price,
            'discount' => $discount
        ]);
    }

    /**
     * 删除购物车商品接口
     *
     * @param Request $request
     * @return void
     */
    public function deleteShoppingCart(Request $request) {
        $result = $this->shoppingCart->delete($request->id);

        if (!$result) {
            return response()->json([
                'status' => 0,
                'message' => '删除失败'
            ]);
        }

        return response()->json([
            'status' => 1,
            'message' => ''
        ]);
    }

    /**
     * 订单页
     *
     * @return void
     */
    public function orderPage() {
        $id = session('user')->id;

        $user = $this->user->byId($id);

        $price = 0;
        $discount = 0;

        foreach ($user->order as $item) {
            $price += $item->num * $item->goods->price;
            $discount += $item->num * $item->goods->discount_price;
        }

        return view('user.order')->with([
            'orders' => $user->order,
            'price' => $price,
            'discount' => $discount
        ]);
    }

    public function pay(Request $request) {
        $id = session('user')->id;
        $user = $this->user->byId($id);
        $carts = $user->cart;

        $price = 0;
        $discount = 0;

        foreach ($carts as $item) {
            $price += $item->num * $item->goods->price;
            $discount += $item->num * $item->goods->discount_price;
        }

        if ($discount > $user->money) {
            return response()->json([
                'status' => 2,
                'message' => '账户余额不足，购买失败'
            ]);
        }

        foreach ($carts as $cart) {
            $goods = $this->goods->getGoodsById($cart->goods_id);
            $this->order->add($cart, $goods->price, $goods->discount_price);
            $this->shoppingCart->delete($cart->id);
        }

        $user->money = $user->money - $discount;
        $user->save();

        session(['user' => $user]);

        return response()->json([
            'status' => 1,
            'message' => '支付成功'
        ]);
    }

    public function deleteOrder(Request $request) {
        $id = $request->id;

        $this->order->delete($id);

        return response()->json([
            'status' => 1,
            'message' => '删除成功',
        ]);
    }
}

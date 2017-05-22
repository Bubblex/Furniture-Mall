<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\UserRepository;
use App\Repositories\GoodsRepository;
use App\Repositories\GoodsTypeRepository;
use App\Repositories\ShoppingCartRepository;

class GoodsController extends Controller
{
    protected $user;
    protected $goods;
    protected $goodsType;
    protected $shoppingCart;

    public function __construct(
        GoodsRepository $goods,
        GoodsTypeRepository $goodsType,
        ShoppingCartRepository $shoppingCart,
        UserRepository $user) {
        $this->user = $user;
        $this->goods = $goods;
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
        $recommendGoods = $this->goods->getGoodsByTypeWithNum($id, 10);

        return view('goods.single')->with([
            'id' => $id,
            'goods' => $goods,
            'recommendGoods' => $recommendGoods
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
}

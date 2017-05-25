<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\GoodsTypeRepository;
use App\Repositories\GoodsRepository;
use App\Repositories\OrderRepository;

class IndexController extends Controller
{
    protected $goods;
    protected $goodsType;
    protected $order;

    public function __construct(GoodsTypeRepository $goodsType, GoodsRepository $goods, OrderRepository $order) {
        $this->goods = $goods;
        $this->goodsType = $goodsType;
        $this->order = $order;
    }

    /**
     * 首页
     *
     * @return void
     */
    public function homePage() {
        $goodsTypes = $this->goodsType->getNormalGoodsTypes();
        $newGoods = $this->goods->getGoodsOrderByTimeDesc(6);
        $discountGoods = $this->goods->getGoodsOrderByDiscountDesc(6);
        $firstGoods = $this->goods->getOneGoodsOrderByTimeDesc();
        $hotGoods = $this->order->most();

        dd($hotGoods->toJson());

        return view('home.index')->with([
            'goodsTypes' => $goodsTypes,
            'newGoods' => $newGoods,
            'discountGoods' => $discountGoods,
            'firstGoods' => $firstGoods,
            'hotGoods' => $hotGoods,
        ]);
    }
}

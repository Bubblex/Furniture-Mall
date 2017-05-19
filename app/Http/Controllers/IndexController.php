<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\GoodsTypeRepository;
use App\Repositories\GoodsRepository;

class IndexController extends Controller
{
    protected $goods;
    protected $goodsType;

    public function __construct(GoodsTypeRepository $goodsType, GoodsRepository $goods) {
        $this->goods = $goods;
        $this->goodsType = $goodsType;
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

        return view('home.index')->with([
            'goodsTypes' => $goodsTypes,
            'newGoods' => $newGoods,
            'discountGoods' => $discountGoods,
            'firstGoods' => $firstGoods
        ]);
    }
}

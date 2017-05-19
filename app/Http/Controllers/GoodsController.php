<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\GoodsRepository;
use App\Repositories\GoodsTypeRepository;

class GoodsController extends Controller
{
    protected $goods;
    protected $goodsType;

    public function __construct(GoodsRepository $goods, GoodsTypeRepository $goodsType) {
        $this->goods = $goods;
        $this->goodsType = $goodsType;
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
}

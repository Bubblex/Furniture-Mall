<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

use App\Models\Goods;

class GoodsRepository
{
    protected $goods;

    public function __construct(Goods $goods) {
        $this->goods = $goods;
    }

    /**
     * 按照时间倒序获取商品列表
     *
     * @return void
     */
    public function getGoodsOrderByTimeDesc($num) {
        return $this->goods
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->take($num)
            ->get();
    }

    /**
     * 获取第一个最新的商品
     *
     * @param [type] $num
     * @return void
     */
    public function getOneGoodsOrderByTimeDesc() {
        return $this->goods
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->first();
    }

    /**
     * 查询折扣最高的商品
     *
     * @return void
     */
    public function getGoodsOrderByDiscountDesc($num) {
        return $this->goods
            ->select(DB::raw('*, (price - discount_price) as result'))
            ->where('status', 1)
            ->orderBy('result', 'desc')
            ->take($num)
            ->get();
    }

    /**
     * 通过类型查询商品
     *
     * @param [type] $type
     * @return void
     */
    public function getGoodsByType($type, $pageSize) {
        return $this->goods
            ->where('goods_type_id', $type)
            ->paginate($pageSize);
    }

    /**
     * 通过 id 获取商品
     *
     * @param [type] $id
     * @return void
     */
    public function getGoodsById($id) {
        return $this->goods
            ->where('status', 1)
            ->find($id);
    }
}

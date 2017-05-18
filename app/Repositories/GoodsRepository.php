<?php

namespace App\Repositories;

use App\Models\Goods;

class GoodsRepository
{
    protected $goods;

    public function __construct(Goods $goods) {
        $this->goods = $goods;
    }

    /**
     * 获取所有商品
     *
     * @return void
     */
    public function getAllGoods() {
        return $this->goods->get();
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
}

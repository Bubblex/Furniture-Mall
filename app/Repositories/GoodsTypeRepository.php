<?php

namespace App\Repositories;

use App\Models\GoodsType;

class GoodsTypeRepository
{
    protected $goodsType;

    public function __construct(GoodsType $goodsType) {
        $this->goodsType = $goodsType;
    }

    /**
     * 获取所有商品类型
     *
     * @return void
     */
    public function getAll() {
        return $this->goodsType->get();
    }

    /**
     * 根据状态来获取列表
     *
     * @param [type] $status
     * @return void
     */
    public function getGoodsTypesByStatus($status) {
        return $this->goodsType->where('status', $status)->get();
    }

    /**
     * 获取普通商品类型
     *
     * @return void
     */
    public function getNormalTypes() {
        return $this->getGoodsTypesByStatus(1);
    }
}

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
     * 根据状态获取列表
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
    public function getNormalGoodsTypes() {
        return $this->getGoodsTypesByStatus(1);
    }

    /**
     * 获取所有商品类型
     *
     * @return void
     */
    public function all() {
        return $this->goodsType->get();
    }

    /**
     * 更新商品类型
     *
     * @param [type] $id
     * @param [type] $update
     * @return void
     */
    public function update($id, $update) {
        $this->goodsType->where('id', $id)->update($update);
    }

    /**
     * 删除商品类型
     *
     * @param [type] $id
     * @return void
     */
    public function delete($id) {
        $this->goodsType->destroy($id);
    }
}


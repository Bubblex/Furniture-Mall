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
            ->with('images')
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
            ->with('images')
            ->orderBy('result', 'desc')
            ->take($num)
            ->get();
    }

    /**
     * 通过类型查询商品并按照固定数量获取
     *
     * @param [type] $num
     * @return void
     */
    public function getGoodsByTypeWithNum($type, $num) {
        return $this->goods
            ->where('goods_type_id', $type)
            ->with('images')
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
            ->with('images')
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
            ->with('type')
            ->with('images')
            ->with('norms')
            ->find($id);
    }

    /**
     * 获取所有商品
     *
     * @return void
     */
    public function all() {
        return $this->goods->has('type')->with(['images', 'type'])->get();
    }

    /**
     * 删除商品
     *
     * @param [type] $id
     * @return void
     */
    public function delete($id) {
        $this->goods->destroy($id);
    }

    /**
     * 更新商品
     *
     * @param [type] $id
     * @param [type] $update
     * @return void
     */
    public function update($id, $update) {
        $this->goods->where('id', $id)->update($update);
    }

    public function add($params) {
        $goods = new Goods;
        $goods->name = $params->name;
        $goods->goods_type_id = $params->type;
        $goods->norm = $params->norm;
        $goods->price = $params->price;
        $goods->discount_price = $params->discount_price;
        $goods->save();

        return $goods;
    }
}

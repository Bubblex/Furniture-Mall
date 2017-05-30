<?php

namespace App\Repositories;

use App\Models\GoodsImage;

class GoodsImageRepository
{
    protected $goodsImage;

    public function __construct(GoodsImage $goodsImage) {
        $this->goodsImage = $goodsImage;
    }

    public function add($params) {
        $goodsImage = new GoodsImage;
        $goodsImage->goods_id = $params['id'];
        $goodsImage->name = '';
        $goodsImage->url = $params['url'];
        $goodsImage->save();
    }
}

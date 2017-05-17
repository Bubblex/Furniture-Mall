<?php

namespace App\Repositories;

use App\Models\GoodsImage;

class GoodsImageRepository
{
    protected $goodsImage;

    public function __construct(GoodsImage $goodsImage) {
        $this->goodsImage = $goodsImage;
    }
}

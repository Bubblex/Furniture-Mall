<?php

namespace App\Repositories;

use App\Models\GoodsNorm;

class GoodsNormRepository
{
    protected $goodsNorm;

    public function __construct(GoodsNorm $goodsNorm) {
        $this->goodsNorm = $goodsNorm;
    }
}

<?php

namespace App\Repositories;

use App\Models\Goods;

class GoodsRepository
{
    protected $goods;

    public function __construct(Goods $goods) {
        $this->goods = $goods;
    }
}

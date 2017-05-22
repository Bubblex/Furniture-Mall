<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $table = 'shopping_carts';

    public function goods() {
        return $this->belongsTo('App\Models\Goods', 'goods_id');
    }
}

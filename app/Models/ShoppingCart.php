<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShoppingCart extends Model
{
    protected $table = 'shopping_carts';
    protected $dates = ['deleted_at'];

    public function goods() {
        return $this->belongsTo('App\Models\Goods', 'goods_id');
    }
}

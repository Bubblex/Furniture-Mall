<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    //
    protected $table = 'goods';

    public function type() {
        return $this->belongsTo('App\Models\GoodsType', 'goods_type_id');
    }
}

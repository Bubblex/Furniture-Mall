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

    public function images() {
        return $this->hasMany('App\Models\GoodsImage');
    }

    public function norms() {
        return $this->hasMany('App\Models\GoodsNorm');
    }
}

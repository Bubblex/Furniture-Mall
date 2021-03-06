<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GoodsType extends Model
{
    use SoftDeletes;
    //
    protected $table = 'goods_types';
    protected $dates = ['deleted_at'];
}

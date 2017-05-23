<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'users';

    public function cart() {
        return $this->hasMany('App\Models\ShoppingCart');
    }

    public function order() {
        return $this->hasMany('App\Models\Order');
    }
}

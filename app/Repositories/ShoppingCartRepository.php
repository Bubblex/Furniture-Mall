<?php

namespace App\Repositories;

use App\Models\ShoppingCart;

class ShoppingCartRepository
{
    protected $shoppingCart;

    public function __construct(ShoppingCart $shoppingCart) {
        $this->shoppingCart = $shoppingCart;
    }

    /**
     * 添加商品到购物车
     *
     * @param [type] $user
     * @param [type] $goods
     * @param [type] $norm
     * @param [type] $num
     * @return void
     */
    public function addGoods($user, $goods, $norm, $num) {
        $cart = new ShoppingCart;
        $cart->user_id = $user->id;
        $cart->goods_id = $goods->id;
        $cart->goods_name = $goods->name;
        $cart->norm = $norm;
        $cart->num = $num;
        $result = $cart->save();

        if (!$result) {
            return $result;
        }

        return $cart;
    }
}

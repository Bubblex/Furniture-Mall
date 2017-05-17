<?php

namespace App\Repositories;

use App\Models\ShoppingCart;

class ShoppingCartRepository
{
    protected $shoppingCart;

    public function __construct(ShoppingCart $shoppingCart) {
        $this->shoppingCart = $shoppingCart;
    }
}

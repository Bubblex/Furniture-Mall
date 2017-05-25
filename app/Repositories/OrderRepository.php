<?php

namespace App\Repositories;

use DB;

use App\Models\Order;

class OrderRepository
{
    protected $order;

    public function __construct(Order $order) {
        $this->order = $order;
    }

    public function add($goods, $price, $discount_price) {
        $order = new Order;
        $order->user_id = $goods->user_id;
        $order->goods_id = $goods->goods_id;
        $order->goods_name = $goods->goods_name;
        $order->norm = $goods->norm;
        $order->num = $goods->num;
        $order->price = $price;
        $order->discount_price = $discount_price;

        $result = $order->save();

        if (!$result) {
            return $result;
        }

        return $order;
    }

    public function most() {
        return $this->order
            ->select(DB::raw('goods_id, count(*) as hot_count'))
            ->with('goods')
            ->groupBy('goods_id')
            ->orderBy('hot_count')
            ->get();
    }
}

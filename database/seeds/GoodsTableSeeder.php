<?php

use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 50; $i++) {
            DB::table('goods')->insert([
                'name' => '商品名称'.$i,
                'price' => $i,
                'discount_price' => $i,
                'goods_type_id' => rand(1, 6),
                'summary' => '商品简介'.$i,
                'detail' => '商品详情'.$i,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}

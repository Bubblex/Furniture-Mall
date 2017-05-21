<?php

use Illuminate\Database\Seeder;

class GoodsNormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 1000; $i++) {
            DB::table('goods_norms')->insert([
                'goods_id' => rand(1, 50),
                'name' => '商品规格'.$i
            ]);
        }
    }
}

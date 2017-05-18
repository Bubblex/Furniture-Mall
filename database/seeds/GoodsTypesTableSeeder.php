<?php

use Illuminate\Database\Seeder;

class GoodsTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('goods_types')->insert([
            'name' => '起居室'
        ]);

        DB::table('goods_types')->insert([
            'name' => '桌子'
        ]);

        DB::table('goods_types')->insert([
            'name' => '沙发'
        ]);

        DB::table('goods_types')->insert([
            'name' => '床'
        ]);

        DB::table('goods_types')->insert([
            'name' => '椅子'
        ]);

        DB::table('goods_types')->insert([
            'name' => '婴儿床'
        ]);
    }
}

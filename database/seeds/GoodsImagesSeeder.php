<?php

use Illuminate\Database\Seeder;

use App\Models\GoodsImage;

class GoodsImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $goodsImage = factory(GoodsImage::class, 500)->create();
    }
}

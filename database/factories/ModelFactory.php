<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

use App\Models\User;
use App\Models\GoodsImage;

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(GoodsImage::class, function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('zh_CN');
    $initialTime = date('Y-m-d H:i:s', $faker->unixTime($max = 'now'));

    return [
        'goods_id' => rand(1, 50),
        'name' => '图片名称',
        'url' => $faker->imageUrl($width = 800, $height = 600, 'technics'),
        'created_at' => $initialTime,
        'updated_at' => $initialTime,
    ];
});
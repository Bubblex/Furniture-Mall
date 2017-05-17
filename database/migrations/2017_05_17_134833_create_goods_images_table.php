<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * 商品图片表
         */
        Schema::create('goods_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('goods_id')->unsigned()->comment('所属商品');
            $table->string('name')->comment('图片名称');
            $table->string('url')->comment('图片地址');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('goods_images');
    }
}

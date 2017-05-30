<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * 商品表
         */
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('商品名称');
            $table->double('price')->comment('商品价格');
            $table->integer('goods_type_id')->unsigned()->comment('商品类型');
            $table->double('discount_price')->comment('商品优惠价格');
            $table->longText('summary')->comment('商品简介');
            $table->longText('detail')->comment('商品详情');
            $table->longText('norm')->comment('商品规格')->nullable();
            $table->integer('status')->default(1)->comment('商品状态 1: 正常 2: 已禁用');
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
        Schema::drop('goods');
    }
}

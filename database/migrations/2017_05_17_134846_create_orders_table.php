<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * 订单表
         */
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->comment('所属用户');
            $table->integer('goods_id')->unsigned()->comment('购买的商品');
            $table->string('goods_name')->comment('购买商品名称');
            $table->string('norm')->comment('购买的商品规格');
            $table->integer('num')->comment('购买的数量');
            $table->double('price')->comment('购买的价格');
            $table->double('discount_price')->comment('购买的优惠价格');
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
        Schema::drop('orders');
    }
}

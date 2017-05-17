<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsNormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * 商品规格表
         */
        Schema::create('goods_norms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('goods_id')->unsigned()->comment('所属商品');
            $table->string('name')->comment('规格名称');
            $table->integer('status')->comment('商品规格状态 1: 正常 2: 已禁用');
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
        Schema::drop('goods_norms');
    }
}

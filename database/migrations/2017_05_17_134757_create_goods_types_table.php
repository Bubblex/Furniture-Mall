<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * 商品分类表
         */
        Schema::create('goods_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('商品分类名称');
            $table->integer('status')->default(1)->comment('商品分类状态 1: 正常 2: 已禁用');
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
        Schema::drop('goods_types');
    }
}

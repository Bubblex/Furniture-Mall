<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToGoodsNormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('goods_norms', function (Blueprint $table) {
            $table->foreign('goods_id')->references('id')->on('goods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('goods_norms', function (Blueprint $table) {
            //
        });
    }
}

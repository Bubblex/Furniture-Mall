<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * 用户表
         */
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('编号');
            $table->string('username')->unique()->comment('用户名');
            $table->string('telephone')->comment('手机号');
            $table->string('email')->comment('邮箱');
            $table->string('password')->comment('密码');
            $table->double('money')->default(0.0)->comment('金额');
            $table->integer('role_id')->unsigned()->default(1)->comment('所属角色');
            $table->integer('status')->default(1)->comment('账号状态 1: 正常 2: 已禁用');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}

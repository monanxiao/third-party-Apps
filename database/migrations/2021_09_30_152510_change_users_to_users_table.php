<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeUsersToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email')->nullable()->change();
            $table->string('password')->nullable()->change();
            $table->string('type')->default('user')->comment('登陆方式');
            $table->jsonb('qq')->nullable()->comment('QQ 登录');
            $table->jsonb('weixin')->nullable()->comment('weixin 登录');
            $table->jsonb('github')->nullable()->comment('github 登录');
            $table->jsonb('weibo')->nullable()->comment('weibo 登录');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn(['email', 'password', 'type', 'qq', 'weixin', 'github', 'weibo']);
        });
    }
}

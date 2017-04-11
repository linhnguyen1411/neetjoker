<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('u_id');
            $table->string('u_name');
            $table->string('u_email')->unique();
            $table->string('u_pass');
            $table->string('u_phone');
            $table->string('u_avatar');
            $table->integer('u_gender');
            $table->integer('u_roles');
            $table->date('u_birthday');
            $table->dropColumn('u_birthday');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

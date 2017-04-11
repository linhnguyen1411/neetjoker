<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('i_id');
            $table->integer('u_id');
            $table->integer('c_id');
            $table->integer('i_view');
            $table->string('i_full');
            $table->string('i_preview');
            $table->string('i_title');
            $table->integer('i_highlight');
            $table->integer('i_accept')->default(0);
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
        Schema::dropIfExists('images');
    }
}

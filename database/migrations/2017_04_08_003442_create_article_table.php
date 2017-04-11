<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->increments('a_id');
            $table->text('a_title');
            $table->text('a_content');
            $table->text('a_description');
            $table->string('a_image');
            $table->string('a_imgBlog');
            $table->string('a_img');
            $table->string('a_thumbnail');
            $table->integer('u_id');
            $table->integer('c_id');
            $table->integer('cate_id');
            $table->string('seo');
            $table->string('a_tag');
            $table->integer('view');
            $table->integer('highlight');
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
        Schema::dropIfExists('article');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_details', function (Blueprint $table) {
            $table->increments('blog_id');
            $table->tinyInteger('id');
            $table->string('title');
            $table->string('s_details');
            $table->string('f_details');
            $table->string('slogan');
            $table->string('tag');
            $table->string('image_main');
            $table->string('image_2');
            $table->string('image_3');
            $table->string('status');
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
        Schema::dropIfExists('blog_details');
    }
};

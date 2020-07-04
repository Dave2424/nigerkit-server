<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('hasLiked')->default(0);
            $table->bigIncrements('categories_id')->nullable();
            $table->bigInteger('views')->default(0);
            $table->string('title');
            $table->longText('body');
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->json('images')->nullable();
            $table->string('video')->nullable();
            $table->text('link')->nullable();
            $table->timestamp('time')->nullable();
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
        Schema::dropIfExists('posts');
    }
}

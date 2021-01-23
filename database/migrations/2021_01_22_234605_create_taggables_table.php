<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaggablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taggables', function (Blueprint $table) {
            $table->integer('tag_id');
            $table->integer('taggable_id');
            $table->string("taggable_type");
        });
        Schema::create('categorizables', function (Blueprint $table) {
            $table->integer('category_id');
            $table->integer('categorizable_id');
            $table->string("categorizable_type");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taggables');
        Schema::dropIfExists('categorizables');
    }
}

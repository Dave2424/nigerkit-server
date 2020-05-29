<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderlists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identifier_id');
            $table->string('cart_id');
            $table->string('buyer_email');
            $table->string('buyer_name');
            $table->string('buyer_address');
            $table->string('buyer_phone');
            $table->string('status');
            $table->string('amount');
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
        Schema::dropIfExists('orderlists');
    }
}

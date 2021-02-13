<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_inventories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('product_id');
            $table->integer('supplier_id')->nullable();
            $table->integer('stock_from')->default(0);
            $table->string('invoice_number')->nullable();
            $table->double('invoice_amount')->default(0);
            $table->string('receiving_report_number')->nullable();
            $table->integer('stock_balance_bf')->default(0);
            $table->integer('stock_added')->default(0);
            $table->integer('opening_stock')->default(0);
            $table->integer('closing_stock')->default(0);
            $table->timestamp('stock_added_date')->nullable();
            $table->timestamp('closing_date')->nullable();
            $table->integer('status')->default(1);
            $table->softDeletes('deleted_at')->nullable();
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
        Schema::dropIfExists('stock_inventories');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Product;

class AddStockToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('products', 'stock')) {
            Schema::table('products', function (Blueprint $table) {
                $table->integer('stock')->default(0)->after('price');
            });
        }
        if (!Schema::hasColumn('products', 'qty_sold')) {
            Schema::table('products', function (Blueprint $table) {
                $table->integer('qty_sold')->default(0)->after('stock');
            });
        }
        if (!Schema::hasColumn('products', 'available_qty')) {
            Schema::table('products', function (Blueprint $table) {
                $table->integer('available_qty')->default(0)->after('qty_sold');
            });
        }

        $products = Product::get();
        foreach($products as $product){
            $product->update([
                'stock'=>$product->quantity
            ]);
        }

        if (Schema::hasColumn('products', 'quantity')) {
            Schema::table('products', function (Blueprint $table) {
                $table->dropColumn('quantity');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('products', 'stock')) {
            Schema::table('products', function (Blueprint $table) {
                $table->dropColumn('stock');
            });
        }
        if (Schema::hasColumn('products', 'qty_sold')) {
            Schema::table('products', function (Blueprint $table) {
                $table->dropColumn('qty_sold');
            });
        }
        if (Schema::hasColumn('products', 'available_qty')) {
            Schema::table('products', function (Blueprint $table) {
                $table->dropColumn('available_qty');
            });
        }
    }
}

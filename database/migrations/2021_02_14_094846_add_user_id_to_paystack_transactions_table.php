<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToPaystackTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('paystack_transactions', 'user_id')) {
            Schema::table('paystack_transactions', function (Blueprint $table) {
                $table->integer('user_id')->nullable()->after('id');
            });
        }
        if (!Schema::hasColumn('paystack_transactions', 'order_id')) {
            Schema::table('paystack_transactions', function (Blueprint $table) {
                $table->string('order_id')->nullable()->after('id');
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
        if (Schema::hasColumn('paystack_transactions', 'user_id')) {
            Schema::table('paystack_transactions', function (Blueprint $table) {
                $table->dropColumn('user_id');
            });
        }
        if (Schema::hasColumn('paystack_transactions', 'order_id')) {
            Schema::table('paystack_transactions', function (Blueprint $table) {
                $table->dropColumn('order_id');
            });
        }
    }
}

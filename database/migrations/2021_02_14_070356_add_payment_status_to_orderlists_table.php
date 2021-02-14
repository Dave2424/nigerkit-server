<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaymentStatusToOrderlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('orderlists', 'payment_status')) {
            Schema::table('orderlists', function (Blueprint $table) {
                $table->integer('payment_status')->default(0)->after('status');
            });
        }
        if (!Schema::hasColumn('orderlists', 'delivery_status')) {
            Schema::table('orderlists', function (Blueprint $table) {
                $table->integer('delivery_status')->default(1)->after('payment_status');
            });
        }
        if (!Schema::hasColumn('orderlists', 'delivery_date')) {
            Schema::table('orderlists', function (Blueprint $table) {
                $table->timestamp('delivery_date')->nullable()->after('delivery_status');
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
        if (Schema::hasColumn('orderlists', 'payment_status')) {
            Schema::table('orderlists', function (Blueprint $table) {
                $table->dropColumn('payment_status');
            });
        }

        if (Schema::hasColumn('orderlists', 'delivery_status')) {
            Schema::table('orderlists', function (Blueprint $table) {
                $table->dropColumn('delivery_status');
            });
        }
        if (Schema::hasColumn('orderlists', 'delivery_date')) {
            Schema::table('orderlists', function (Blueprint $table) {
                $table->dropColumn('delivery_date');
            });
        }
    }
}

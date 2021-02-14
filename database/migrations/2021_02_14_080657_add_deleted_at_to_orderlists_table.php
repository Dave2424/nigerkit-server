<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToOrderlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('orderlists', 'deleted_at')) {
            Schema::table('orderlists', function (Blueprint $table) {
                $table->softDeletes('deleted_at')->nullable()->after('status');
            });
        }
        if (!Schema::hasColumn('orderlists', 'transaction_id')) {
            Schema::table('orderlists', function (Blueprint $table) {
                $table->integer('transaction_id')->nullable()->after('id');
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
        if (Schema::hasColumn('orderlists', 'deleted_at')) {
            Schema::table('orderlists', function (Blueprint $table) {
                $table->dropColumn('deleted_at');
            });
        }
        if (Schema::hasColumn('orderlists', 'transaction_id')) {
            Schema::table('orderlists', function (Blueprint $table) {
                $table->dropColumn('transaction_id');
            });
        }
    }
}

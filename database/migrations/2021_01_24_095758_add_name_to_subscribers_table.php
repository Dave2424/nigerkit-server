<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameToSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('subscribers', 'status')) {
            Schema::table('subscribers', function (Blueprint $table) {
                $table->integer('status')->default(1)->after('email');
            });
        }
        if (!Schema::hasColumn('subscribers', 'name')) {
            Schema::table('subscribers', function (Blueprint $table) {
                $table->string('name')->nullable()->after('id');
            });
        }
        if (!Schema::hasColumn('subscribers', 'phone')) {
            Schema::table('subscribers', function (Blueprint $table) {
                $table->string('phone')->nullable()->after('email');
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
        if (Schema::hasColumn('subscribers', 'status')) {
            Schema::table('subscribers', function (Blueprint $table) {
                $table->dropColumn('status');
            });
        }
        if (Schema::hasColumn('subscribers', 'name')) {
            Schema::table('subscribers', function (Blueprint $table) {
                $table->dropColumn('name');
            });
        }
        if (Schema::hasColumn('subscribers', 'phone')) {
            Schema::table('subscribers', function (Blueprint $table) {
                $table->dropColumn('phone');
            });
        }
    }
}

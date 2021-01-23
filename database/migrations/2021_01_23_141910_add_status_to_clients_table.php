<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToClientsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('clients', 'status')) {
            Schema::table('clients', function (Blueprint $table) {
                $table->integer('status')->default(1);
            });
        }
        if (!Schema::hasColumn('clients', 'login_status')) {
            Schema::table('clients', function (Blueprint $table) {
                $table->integer('login_status')->default(1);
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
        if (Schema::hasColumn('clients', 'status')) {
            Schema::table('clients', function (Blueprint $table) {
                $table->dropColumn('status');
            });
        }
        if (Schema::hasColumn('clients', 'login_status')) {
            Schema::table('clients', function (Blueprint $table) {
                $table->dropColumn('login_status');
            });
        }
    }
}

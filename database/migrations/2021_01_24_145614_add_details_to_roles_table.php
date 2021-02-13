<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDetailsToRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('roles', 'details')) {
            Schema::table('roles', function (Blueprint $table) {
                $table->text('details')->nullable()->after('key');
            });
        }
        if (!Schema::hasColumn('permissions', 'details')) {
            Schema::table('permissions', function (Blueprint $table) {
                $table->text('details')->nullable()->after('column');
            });
        }
    }

    /**
     * Reverse the migrations. details
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('roles', 'details')) {
            Schema::table('roles', function (Blueprint $table) {
                $table->dropColumn('details');
            });
        }
        if (Schema::hasColumn('permissions', 'details')) {
            Schema::table('permissions', function (Blueprint $table) {
                $table->dropColumn('details');
            });
        }
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitleToBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('banners', 'title')) {
            Schema::table('banners', function (Blueprint $table) {
                $table->string('title')->nullable()->after('id');
            });
        }
        if (!Schema::hasColumn('banners', 'status')) {
            Schema::table('banners', function (Blueprint $table) {
                $table->integer('status')->default(1)->after('details');
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
        if (Schema::hasColumn('banners', 'title')) {
            Schema::table('banners', function (Blueprint $table) {
                $table->dropColumn('title');
            });
        }
        if (Schema::hasColumn('banners', 'status')) {
            Schema::table('banners', function (Blueprint $table) {
                $table->dropColumn('status');
            });
        }
    }
}

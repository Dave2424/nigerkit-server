<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionToPostsTable extends Migration
{
    
    public function up()
    {
        if (!Schema::hasColumn('posts', 'author_id')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->integer('author_id')->default(1)->after('id');
            });
        }
        if (!Schema::hasColumn('posts', 'description')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->text('description')->nullable()->after('body');
            });
        }
        if (!Schema::hasColumn('posts', 'status')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->integer('status')->default(1);
            });
        }
        if (!Schema::hasColumn('posts', 'is_Comment')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->integer('is_Comment')->default(1);
            });
        }
        if (!Schema::hasColumn('posts', 'deleted_at')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->softDeletes('deleted_at')->nullable();
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
        if (Schema::hasColumn('posts', 'author_id')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->dropColumn('author_id');
            });
        }
        if (Schema::hasColumn('posts', 'description')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->dropColumn('description');
            });
        }
        if (Schema::hasColumn('posts', 'status')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->dropColumn('status');
            });
        }
        if (Schema::hasColumn('posts', 'is_Comment')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->dropColumn('is_Comment');
            });
        }
        if (Schema::hasColumn('posts', 'deleted_at')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->dropColumn('deleted_at');
            });
        }
    }
}

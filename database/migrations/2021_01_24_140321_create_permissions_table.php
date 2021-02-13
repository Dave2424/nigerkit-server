<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('key');
            $table->string('model');
            $table->string('action')->nullable();
            $table->string('column')->nullable();
            $table->integer('status')->default(1);
            $table->softDeletes('deleted_at')->nullable();
            $table->timestamps();
        });

        Schema::create('admin_permission', function (Blueprint $table) {
            $table->integer('permission_id');
            $table->integer('admin_id');
        });
        Schema::create('permission_user', function (Blueprint $table) {
            $table->integer('permission_id');
            $table->integer('user_id');
        });
        Schema::create('permission_role', function (Blueprint $table) {
            $table->integer('role_id');
            $table->integer('permission_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('permission_user');
        Schema::dropIfExists('admin_permission');
        Schema::dropIfExists('permission_role');
    }
}

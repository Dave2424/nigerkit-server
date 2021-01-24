<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Role;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('key');
            $table->integer('isLocked')->default(0);
            $table->integer('status')->default(1);
            $table->softDeletes('deleted_at')->nullable();
            $table->timestamps();
        });

        Role::create([
            'name'=>"Supper Admin",
            'key'=>"supper_admin",
            'isLocked'=>1,
        ]);
        Role::create([
            'name'=>"Admin",
            'key'=>"admin",
        ]);
        Role::create([
            'name'=>"User",
            'key'=>"user",
        ]);

        Schema::create('admin_role', function (Blueprint $table) {
            $table->integer('admin_id');
            $table->integer('role_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
        Schema::dropIfExists('admin_role');
    }
}

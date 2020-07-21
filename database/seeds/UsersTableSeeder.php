<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('admins')->insert([
            'name' => 'Main Admin',
            'email' => 'admin@material.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ]);


        factory(App\Category::class, 10)->create();
        factory(App\Banner_sr::class, 10)->create();
        factory(App\Banners::class, 10)->create();
        factory(App\User::class, 300)->create();
        factory(App\Model\Post::class, 300)->create();
        factory(App\Product::class, 300)->create();
    }
}

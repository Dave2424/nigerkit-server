<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $info = [
            ['key' => 'percentage', 'value' => 7.5],
            ['key' => 'delivery', 'value' => 1000]
        ];
        foreach ($info as $key) {
            \App\Info::create($key);
        }
    }
}

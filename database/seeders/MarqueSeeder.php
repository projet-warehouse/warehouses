<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marques')->insert([
            [
                'name' => 'NASCO'
            ],
            [
                'name' => 'ILUX'
            ],
            [
                'name' => 'SHAOBA'
            ],
            [
                'name' => 'SAMSUNG'
            ]
        ]);
    }
}

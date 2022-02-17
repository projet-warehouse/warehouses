<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->insert([
            [
                'taille' => '10',
                'color_1' => 'blanc',
                'color_2' => 'noir',
                'color_3' => 'gris',
                'color_4' => 'rouge',
                'poids' => '1',
                'article_id' => '1'
            ],
            [
                'taille' => '20',
                'color_1' => 'blanc',
                'color_2' => 'noir',
                'color_3' => 'gris',
                'color_4' => '',
                'poids' => '2',
                'article_id' => '2'
            ],
            [
                'taille' => '30',
                'color_1' => 'blanc',
                'color_2' => 'noir',
                'color_3' => '',
                'color_4' => '',
                'poids' => '3',
                'article_id' => '3'
            ],
            [
                'taille' => '40',
                'color_1' => 'blanc',
                'color_2' => '',
                'color_3' => '',
                'color_4' => '',
                'poids' => '4',
                'article_id' => '4'
            ],
        ]);
    }
}

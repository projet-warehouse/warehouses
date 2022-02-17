<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SousCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sous_categories')->insert([
            [ 
                'name' => 'La Cuisine',
                'categorie_id' => '1'
            ],
            [ 
                'name' => 'Le froid',
                'categorie_id' => '1'
            ],
            [ 
                'name' => 'Preparation Culinaire',
                'categorie_id' => '2'
            ],
            [ 
                'name' => 'Hygiene et soin du corps ',
                'categorie_id' => '2'
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            [
                'name' => 'Mixeur',
                'sous_categorie_id' => '3'
            ],
            [
                'name' => 'Rasoir',
                'sous_categorie_id' => '4'
            ],
            [
                'name' => 'Cuisiniere',
                'sous_categorie_id' => '2'
            ],
            [
                'name' => 'lave-linge',
                'sous_categorie_id' => '1'
            ],
            
        ]);
    }
}

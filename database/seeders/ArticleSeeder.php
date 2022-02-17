<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'name' => 'Nasco Blender bol Incassable',
                'description' => 'Nasco Blender bla bla',
                'qte' => '100',
                'ugs' => 'NASMIX',
                'prix' => '7000',
                'image' => 'image/nasco.jpg',
                'image_1' => 'image/nasco2.jpg',
                'image_2' => 'image/nasco3.jpg',
                'marque_id' => '1',
                'type_id' => '1'
            ],
            [
                'name' => 'Chaoba Tondeuse',
                'description' => 'Chaoba Tondeuse Professional bla bla',
                'qte' => '20',
                'ugs' => 'CHRAS',
                'prix' => '4000',
                'image' => 'image/chaoba.jpg',
                'image_1' => 'image/chaoba1.jpg',
                'image_2' => 'image/chaoba2.jpg',
                'marque_id' => '3',
                'type_id' => '2'
            ],
            [
                'name' => 'Ilux Cuisinière',
                'description' => 'Ilux Cuisinière Electrique 5 Feux',
                'qte' => '100',
                'ugs' => 'ILUCUI',
                'prix' => '20000',
                'image' => 'image/ilux',
                'image_1' => 'image/ilux1',
                'image_2' => 'image/ilux2',
                'marque_id' => '2',
                'type_id' => '3'
            ],
            [
                'name' => 'Samsung Machine A Laver',
                'description' => 'Samsung 9Kg Inverter Addwash bla bla',
                'qte' => '10',
                'ugs' => 'SAMLAV',
                'prix' => '7000',
                'image' => 'image/Samsung',
                'image_1' => 'image/Samsung1',
                'image_2' => 'image/Samsung2',
                'marque_id' => '4',
                'type_id' => '4'
            ],
        ]);
    }
}
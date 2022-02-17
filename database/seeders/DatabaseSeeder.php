<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\InfoSeeder;
use Database\Seeders\TypeSeeder;
use Database\Seeders\MarqueSeeder;
use Database\Seeders\ArticleSeeder;
use Database\Seeders\CategorieSeeder;
use Database\Seeders\SousCategorieSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorieSeeder::class,
            SousCategorieSeeder::class,
            TypeSeeder::class,
            MarqueSeeder::class,
            InfoSeeder::class,
            ArticleSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();
    }
}

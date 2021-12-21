<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $produit= new \App\Produit();
        $produit->nom = "mixeur ";
        $produit->prix_ttc ="7000";
        $produit->description ="mixeur bleu de bonne qualite";
        $produit->image ="mixeur bleu.jfif";
        $produit->marque ="nasco";
        $produit->ugs ="0011";
        $produit->quantite ="5";
        $produit->save();

    }
}

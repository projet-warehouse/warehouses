<?php

namespace App\Models;

use App\Models\Sous_categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    

    public $timestamps = false;
    // protected $table = "categories";


    // protected $fillable = 'name';

    // public function sous_categories()
    // {
    //     return $this->hasMany(Sous_categorie::class, 'categorie_id'); 
    // }

    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ajouter extends Model
{

    use HasFactory;

    protected $fillable = [
        'name', 'email', 'numero', 'mot de passe par defaut'
    ];
}

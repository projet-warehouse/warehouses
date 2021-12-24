<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personnels extends Model
{
    use HasFactory;

    protected $table = 'personnels';

    protected $fillable = [
        'user_id',
        'nom',
        'email',
        'phone',
        'password',
        'fonction',
        'date_embauche',
        'salaire',
        'adresse'
    ];
}

<?php

namespace App\Models;

use App\Models\Banner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Banner extends Model
{
    use HasFactory;
    protected $table = 'banner';
    protected $guarded = [];

    public $bar = [];
}

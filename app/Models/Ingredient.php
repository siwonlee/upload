<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $table = 'apl_ingredient';

    protected $fillable = [

    'upc',
    'id',
    'ingredients',
    'nutrition'        
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Immunization extends Model
{
    use HasFactory;
    protected $fillable = [
        'vaccine_brand',
        'vaccine_status',
        'first_dose',
        'second_dose'
    ];
}

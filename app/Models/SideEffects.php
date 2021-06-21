<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SideEffects extends Model
{
    use HasFactory;
    protected $fillable =[

        'user_id',
        'allergy',
        'fever',
        'muscle_pain',
        'headache',
        'chills',
        'nausea',
        'others',
        'days',
        'hours',

    ];

}

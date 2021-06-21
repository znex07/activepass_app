<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'img',
        'clinic_hours',
        'clinic_days',
        'availability',
        'patient_numbers'
    ];


    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}

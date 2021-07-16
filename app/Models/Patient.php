<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'isVerified',
        'phone_number',
        'email',
        'password',
        'profile_pic',
        'path',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}

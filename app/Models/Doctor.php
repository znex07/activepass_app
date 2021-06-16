<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends User
{
    use HasFactory;
    private $md_id;
    private $specialization;
    private $patients;

    protected $fillable = [


    ];

    function __construct($patients)
    {
        $this->patients = $patients;
    }
    function get_all_patients($patients){
        return $this->patients = $patients;
    }
    function get_todays_patients(){

    }

}

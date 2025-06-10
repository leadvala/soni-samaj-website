<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    //
    protected $fillable = [
    'full_name',
    'father_name',
    'mother_name',
    'dob',
    'gender',
    'marital_status',
    'gotra_self',
    'gotra_mother',
    'gotra_nani',
    'gotra_dadi',
    'qualification',
    'blood_group',
    'mobile',
    'whatsapp',
    'work_type',
    'job_type',
    'designation',
    'work_city',
    'current_address',
    'permanent_address',
    'satimata_place',
    'bheruji_place',
    'kuldevi_place',
    'profile_photo', // Only if you save the filename in DB
];

}

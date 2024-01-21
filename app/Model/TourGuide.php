<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TourGuide extends Model
{
    //
    protected $table = 'tourguides';
    protected $primaryKey = 'tourGuide_id';
    protected $fillable = [
        'tourGuide_name',
        'tourGuide_email',
        'tourGuide_phone',
        'tourGuide_address',
    ];
}

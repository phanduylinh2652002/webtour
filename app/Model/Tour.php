<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    //
    protected $table = "tours";
    protected $primaryKey = "tour_id";
    protected $keyType = "string";
    protected $fillable = [
        'tour_id',
        'tour_name',
        'tour_price',
        'tour_discount',
        'tour_description',
        'tour_trip',
        'tour_image',
        'tour_place',
        'tour_vehicle',
        'tour_locationStart',
        'tour_locationEnd',
        'tour_quantytiDate',
        'tour_dateStart',
        'tour_dateEnd',
        'tour_quantytiPerson',
        'category_id',
        'tourGuide_id'
    ];
}

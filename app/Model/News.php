<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'news';
    protected $primaryKey = 'new_id';
    protected $fillable = [
        'new_name',
        'new_image',
        'new_date',
        'new_description'
    ];
}

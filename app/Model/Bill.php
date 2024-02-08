<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    protected $table = 'bill';
    protected $primaryKey = 'bill_id';
    protected $fillable = [
        'billDetail_id',
        'customer_id',
        'bill_total',
        'bill_date',
        'id'
    ];
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    //
    protected $table = 'bill_detail';
    protected $primaryKey = 'billDetail_id';
    protected $fillable = [
        'bill_id',
        'tour_id',
        'customer_id',
        'quantity_OldPerson',
        'quantity_YoungPerson',
        'quantity_Children',
        'quantity_Infant',
        'note'
    ];
}

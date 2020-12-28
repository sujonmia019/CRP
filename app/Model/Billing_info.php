<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Billing_info extends Model
{
    protected $table = 'billing_infos';

    protected $fillable = [
        'order_id',
        'name',
        'email',
        'phone',
        'address_one',
        'address_two',
        'city',
        'vat_number',
        'country'
    ];

}

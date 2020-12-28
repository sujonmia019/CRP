<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'order_name',
        'order_id',
        'client_id',
        'worker_id',
        'order_date',
        'delivery_date',
        'spacification_id',
        'status',
        'price'
    ];
}

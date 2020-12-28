<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Specific_background extends Model
{
    protected $table = 'specific_backgrounds';

    protected $fillable = [
        'name',
        'price'
    ];
}

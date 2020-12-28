<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Specific_dpi extends Model
{
    protected $table = 'specific_dpis';

    protected $fillable = [
        'name',
        'price'
    ];
}

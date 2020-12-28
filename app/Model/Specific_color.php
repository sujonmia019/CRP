<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Specific_color extends Model
{
    protected $table = 'specific_colors';

    protected $fillable = [
        'name',
        'price'
    ];
}

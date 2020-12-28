<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Specific_size_format extends Model
{
    protected $table = 'specific_size_formats';

    protected $fillable = [
        'name',
        'price'
    ];
}

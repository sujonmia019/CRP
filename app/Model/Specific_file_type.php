<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Specific_file_type extends Model
{
    protected $table = 'specific_file_types';

    protected $fillable = [
        'name',
        'price'
    ];
}

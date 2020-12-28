<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Specific_category extends Model
{
    protected $table = 'spacification_categories';

    protected $fillable = [
        'title',
        'image'
    ];
}

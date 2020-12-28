<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Specific_alignment extends Model
{
    protected $table = 'specific_alignments';

    protected $fillable = [
        'name',
        'price'
    ];
}

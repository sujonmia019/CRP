<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Spacification extends Model
{
    protected $table = 'spacifications';

    protected $fillable = [
        'creator_id',
        'category_id',
        'name',
        'file_type_id',
        'background_id',
        'alignment_id',
        'color_id',
        'margin_id',
        'dpi_id',
        'size_format_id',
        'addon_id'
    ];
}

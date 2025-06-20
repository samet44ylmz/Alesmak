<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'title',
        'title_2',
        'description',
        'description_2',
        'btn_text',
        'image',
    ];

    
}

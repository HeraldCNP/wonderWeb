<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category',
        'image',
        'active'
    ];
}

<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'items_2' => 'array',
        'items_3' => 'array',
        'images_4' => 'array',
        'items_7' => 'array',
    ];
}

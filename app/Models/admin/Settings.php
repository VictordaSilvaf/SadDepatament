<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'footer_useful_links' => 'array',
        'footer_social_links' => 'array',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSectionSlider extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'image_path',
        'description',
        'status',
        'deleted_at'
    ];
}

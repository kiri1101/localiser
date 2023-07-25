<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'titre',
        'banner',
        'description',
        'photo_path',
        'photo_path2'
    ];

    public function enterprises()
    {
        return $this->hasMany(Enterprise::class, 'localisation_pays_id', 'id');
    }

}

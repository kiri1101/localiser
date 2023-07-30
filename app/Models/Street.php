<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'titre',
        'description',
        'number_enterprises',
        'sub_description',
        'banner',
        'photo_path',
        'photo_path2'
    ];

    /**
     * Get the documents for the enterprise.
     */
    public function enterprises()
    {
        return $this->hasMany(Enterprise::class, 'localisation_street_id','id');
    }

}

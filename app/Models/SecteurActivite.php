<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecteurActivite extends Model
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
        'icon',
        'description',
        'deleted_at'
    ];

    /**
     * Get the documents for the enterprise.
     */
    public function enterprises()
    {
        return $this->hasMany(Enterprise::class, 'SecteurActivite_id');
    }


}

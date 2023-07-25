<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
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
        'chemin',
        'enterprise_id',
        'deleted_at'
    ];

    /**
     * Get the Enterprize that owns the document.
     */
    public function enterprise()
    {
        return $this->belongsTo(Enterprise::class, 'enterprise_id');
    }
}

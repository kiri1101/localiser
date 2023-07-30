<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise_Critere extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'enterprise_id',
        'critere_id',
        'grade'
    ];
    protected $table = 'critere_entreprise';

    /**
     * Get the Enterprize that owns the document.
     */
    public function enterprise()
    {
        return $this->belongsTo(Enterprise::class, 'enterprise_id');
    }

    /**
     * Get the Critere that owns the document.
     */
    public function critere()
    {
        return $this->belongsTo(Critere::class, 'critere_id');
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [

        'name',

        'short_description_fr',
        'short_description_en',
        'description_fr',
        'description_en',
        'entreprise_id',
        'image_path',
        'logo_path',
        'promoteur_image',
        'chiffre_affaire',
        'portefeuille',
        'part_marche_national',
        'part_marche_cemac',
        'part_marche_international',
        'secteur_id',
        'promoteur',

        'added_by',
        'status',
        'deleted_at',];

    public function enterprise()
    {
        return $this->belongsTo(Enterprise::class, 'entreprise_id');
    }

    public function secteur()
    {
        return $this->belongsTo(SecteurActivite::class, 'secteur_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enterprise extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'raison_social',
        'carte_contribuable',
        'registre_commerce',
        'statut_juridique',
        'type_entreprise',
        'chiffres_affaires',
        'capital',

        'description',
        'slogan',
        'services',
        'produits',
        'nombre_employees',
        'note_moyennes',
        'secteur_activite',
        'nombre_commentaire',
        'status_localizeur',
        'SecteurActivite_id',
        'banner_image',
        'logo',
        'photo_path',
        'photo_path2',
        'photo_path3',
        'photo_path4',
        'photo_path5',
        'photo_path6',
        'photo_path7',
        'photo_path8',
        'photo_path9',
        'photo_path10',
        'photo_path11',
        'photo_path12',
        'photo_path13',
        'photo_path14',
        'photo_path15',
        'top_10',
        'top_30',
        'top_50',
        'top_100',
        'display',
        'number_comments',
        'number_visits',
        'number_likes',
        'rating',
        'short_description',

        'social_media_facebook',
        'social_media_linkedin',
        'social_media_whatsapp',
        'social_media_twitter',
        'social_media_instagram',

        'localisation_pays_id',
        'localisation_ville_id',
        'localisation_street_id',
        'localisation_adresse',
        'localisation_bp',
        'localisation_tel',
        'localisation_tel_2',
        'localisation_email',
        'localisation_fax',
        'localisation_siteweb'
        ,'deleted_at'
    ];

    /**
     * Get the documents for the enterprise.
     */
    public function documents()
    {
        return $this->hasMany(Document::class, 'enterprise_id');
    }

    /**
     * Get the documents for the enterprise.
     */
    public function critere_grade()
    {
        return $this->hasMany(Entreprise_Critere::class, 'enterprise_id');
    }

    /**
     * Get the Enterprize that owns the document.
     */
    public function secteur()
    {
        return $this->belongsTo(SecteurActivite::class, 'SecteurActivite_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'localisation_pays_id');
    }

    public function town()
    {
        return $this->belongsTo(Town::class, 'localisation_ville_id');
    }

    public function street()
    {
        return $this->belongsTo(Street::class, 'localisation_street_id');
    }

    public function comments()
    {
        return $this->hasMany(Commentaire::class, 'enterprise_id');
    }


}

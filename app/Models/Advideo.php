<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Advideo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [

        'name_en',
        'name_fr',
        'short_description_fr',
        'short_description_en',
        'description_fr',
        'description_en', 'youtube_link',
        'image_path',
        'company_id',
        'added_by',
        'status',
        'deleted_at',];

    public function enterprise()
    {
        return $this->belongsTo(Enterprise::class, 'company_id');
    }
}

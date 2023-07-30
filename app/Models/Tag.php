<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'code_name',
        'name_en',
        'name_fr',
        'description_en',
        'description_fr',
        'short_description_en',
        'short_description_fr',
        'link_en',
        'link_fr',
        'added_by',
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_tags');
    }
}

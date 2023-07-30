<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
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
        'title_en',
        'title_fr',
        'description_en',
        'description_fr',
        'short_description_en',
        'short_description_fr',
        'link_en',
        'link_fr',
        'summary_fr',
        'summary_en',
        'number_visits',
        'number_like',
        'number_dislike',
        'author',
        'status',
        'banner',
        'category_id',
        'added_by',
        'address',
        'phonenumber',
        'email',
        'enterprise_name',

    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post');
    }

    /**
     * The roles that belong to the user.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }
}

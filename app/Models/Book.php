<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [

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
        'image_path',
        'image_path2',
        'image_path3',
        'category_id',
        'added_by',
        'post_read_time',


    ];

    public function category()
    {
        return $this->belongsTo(BookCategory::class, 'category_id');
    }

    public function subscribers()
    {
        return $this->hasMany(SubscriberBook::class, 'book_id');
    }

    public function tags()
    {
        return $this->belongsToMany(BookTag::class, 'tag_books');
    }
}

<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

/**
 * Post
 *
 * @mixin Eloquent
 */

class Post extends Model
{
    //
    protected $fillable = [
        'title',
        'content',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'image',
        'category_id',
        'type_id',
        'status',
        'slug'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function type()
    {
      return $this->belongsTo(Type::class);
    }

}



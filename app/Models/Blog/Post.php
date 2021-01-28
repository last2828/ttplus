<?php

namespace App\Models\Blog;

use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Post
 *
 * @mixin Eloquent
 */

class Post extends Model
{
    use SoftDeletes;

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

    public function type()
    {
      return $this->belongsTo(PostType::class);
    }

}



<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

/**
 * Post
 *
 * @mixin Eloquent
 */

class Category extends Model
{
    //
    use NodeTrait;
    protected $fillable = [
        'name',
        'parent_id',
        'content',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'image',
        'category_id',
        'status',
        'slug'
    ];

    public function posts()
    {
        return $this->belongsToMany(
            Post::class
        );
    }
}

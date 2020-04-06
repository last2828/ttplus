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
    protected $fillable = ['title', 'content', 'meta_title', 'meta_keywords', 'meta_description', 'image', 'category_id', 'status', 'slug'];

}

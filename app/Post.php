<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'content', 'meta_title', 'meta_keywords', 'meta_description', 'image', 'category_id', 'status'];

    public static function add($fields)
    {
        $post = new self;
        $post->fill($fields);
        $post->save();

    }
}

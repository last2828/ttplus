<?php

namespace App\Models\Blog;

use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Post
 *
 * @mixin Eloquent
 *
 * @property string         $title
 * @property string         $content
 * @property string         $meta_title
 * @property string         $meta_keywords
 * @property string         $meta_description
 * @property string         $image
 * @property string         $slug
 * @property boolean        $status
 * @property PostType       $type
 */

class Post extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'image',
        'type_id',
        'status',
        'slug'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
      return $this->belongsTo(PostType::class);
    }

}



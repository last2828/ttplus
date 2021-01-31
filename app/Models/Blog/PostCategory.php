<?php
//
//namespace App\Models\Blog;
//
//use Eloquent;
//use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;
//use Kalnoy\Nestedset\NodeTrait;
//
///**
// * Post
// *
// * @mixin Eloquent
// *
// * @property string         $name
// * @property string         $content
// * @property string         $meta_title
// * @property string         $meta_description
// * @property string         $image
// * @property string         $slug
// * @property boolean        $status
// * @property NodeTrait      $parent
// */
//
//class PostCategory extends Model
//{
//    use NodeTrait;
//    use SoftDeletes;
//
//    /**
//     * @var array
//     */
//    protected $fillable = [
//        'name',
//        'parent_id',
//        'content',
//        'meta_title',
//        'meta_keywords',
//        'meta_description',
//        'image',
//        'status',
//        'slug'
//    ];
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
//     */
//    public function posts()
//    {
//        return $this->belongsToMany(
//            Post::class
//        );
//    }
//}

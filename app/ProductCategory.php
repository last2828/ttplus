<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Eloquent;

/**
 *
 * @mixin Eloquent
 */

class ProductCategory extends Model
{
    use NodeTrait;
    protected $fillable = [
        'name',
        'content',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'parent_id',
        'slug',
        'status',
        'image'
    ];

    public function groups()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }
}
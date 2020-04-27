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
        'name_ru',
        'content',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'parent_id',
        'slug',
        'status',
        'image'
    ];

    public function group()
    {
        return $this->hasMany(
            Group::class,
            'category_id',
            'id'
        );
    }
}
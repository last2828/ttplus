<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

/**
 * Product
 *
 * @mixin Eloquent
 */

class Product extends Model
{
    protected $fillable = [
        'name',
        'content',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'model',
        'category_id',
        'slug',
        'image',
        'status'
    ];

    public function category()
    {
        return $this->belongsTo(
            ProductCategory::class
        );
    }

    public function attribute()
    {
        return $this->belongsToMany(
            Attribute::class,
            'product_attributes',
            'product_id',
            'attribute_id'
        );
    }

    public function group()
    {
        return $this->belongsToMany(
            Group::class,
            'product_groups',
            'product_id',
            'group_id'
        );
    }
}

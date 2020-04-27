<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Attribute
 *
 * @mixin \Eloquent
 */
class Attribute extends Model
{
    protected $fillable = ['name'];

    public function product()
    {
        return $this->belongsToMany(
            Product::class,
            'product_attributes',
            'attribute_id',
            'product_id'
        );
    }

    public function productAttributes()
    {
        return $this->hasMany(
            ProductAttribute::class
        );
    }
}

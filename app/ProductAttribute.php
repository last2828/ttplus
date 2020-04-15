<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

/**
 *
 * @mixin Eloquent
 */

class ProductAttribute extends Model
{
    protected $fillable = ['product_id', 'attribute_id', 'value'];

    public function attribute()
    {
        return $this->belongsTo(
            Attribute::class,
            'attribute_id',
            'id'
            );
    }
}

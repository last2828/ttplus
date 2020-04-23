<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

/**
 *
 * @mixin Eloquent
 */


class ProductGroup extends Model
{
    protected $fillable = ['product_id', 'group_id'];

    public function group()
    {
        return $this->belongsTo(
            Group::class,
            'group_id',
            'id'
        );
    }
}

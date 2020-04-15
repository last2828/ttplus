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
}

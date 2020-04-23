<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Group
 *
 * @mixin \Eloquent
 */
class Group extends Model
{
    protected $fillable = ['name'];

    public function product()
    {
        return $this->belongsToMany(
            Product::class,
            'product_groups',
            'group_id',
            'product_id'
        );
    }

    public function productGroups()
    {
        return $this->hasMany(ProductGroup::class);
    }
}

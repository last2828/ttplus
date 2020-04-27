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
    protected $fillable = [
        'name',
        'category_id',
        'slug',
        ];

    public function product()
    {
        return $this->hasMany(
            Product::class
        );
    }

    public function category()
    {
        return $this->hasOne(
            ProductCategory::class,
            'id',
            'category_id'
        );
    }
}

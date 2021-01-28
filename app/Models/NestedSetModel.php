<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

/**
 * App\NestedSetModel
 * @mixin \Eloquent
 */
class NestedSetModel extends Model
{
    use NodeTrait;
    protected $fillable = ['name', 'parent_id'];

    public static function add($fields)
    {
        $category = new self;
        $category->fill($fields);
        $category::create($fields);
    }

}
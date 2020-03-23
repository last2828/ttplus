<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

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
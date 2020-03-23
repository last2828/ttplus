<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'category_id'];
    //

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public static function add($fields)
    {
//        dd($fields);
        $product = new self;
        $product->fill($fields);
        $product->save();
        return $product;
    }
}

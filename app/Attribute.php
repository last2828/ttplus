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

    public static function deleteAttribute($id)
    {
        //check - if current attribute not exist in any product delete from all tables
        if(empty(ProductAttribute::where('attribute_id', $id)->get()))
        {
            self::destroy($id);
            ProductAttribute::where('attribute_id', $id)->delete();
            return true;
        }
        //else return error
        else
        {
            return 'Данная характеристика добавлена к существующим товарам';
        }
    }
}

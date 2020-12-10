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
    protected $fillable = ['name', 'units'];

    public function products()
    {
        return $this->belongsToMany(
            Product::class,
            'product_attributes'
        );
    }

    public static function deleteAttribute($id)
    {
        //check - if current attribute not exist in any product delete from all tables
        if(!(empty(ProductAttribute::where('attribute_id', $id))))
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

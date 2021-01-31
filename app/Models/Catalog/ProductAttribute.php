<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Attribute
 *
 * @mixin \Eloquent
 *
 * @property string $name
 * @property string $units
 */
class ProductAttribute extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = ['name', 'units'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class,'product_product_attributes');
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

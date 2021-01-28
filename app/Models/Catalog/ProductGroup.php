<?php

namespace App\Models\Catalog;

use App\Models\AppHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Group
 *
 * @mixin \Eloquent
 */
class ProductGroup extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'category_id',
        'slug',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id', 'id');
    }

    public static function storeGroup($fields)
    {
        //check slug and transliterate 'name' if slug = null
        $fields = AppHelper::checkSlug($fields);

        //save group in db
        self::create($fields);

        return true;
    }

    public static function updateGroup($fields, $id)
    {
        //check slug and transliterate 'name' if slug = null
        $fields = AppHelper::checkSlug($fields);

        //update group in db
        self::find($id)->update($fields);

        return true;
    }

}

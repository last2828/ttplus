<?php

namespace App\Models\Catalog;

use App\Models\AppHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;
use Eloquent;

/**
 *
 * @mixin Eloquent
 */

class ProductCategory extends Model
{
    use NodeTrait;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'name_ru',
        'content',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'parent_id',
        'slug',
        'status',
        'image'
    ];

    public function groups()
    {
        return $this->hasMany(
            ProductGroup::class,
            'category_id',
            'id'
        );
    }

    public static function storeProductCategory($fields)
    {
        //check slug and transliterate 'name' if slug = null
        $fields = AppHelper::checkSlug($fields);

        if(empty($fields->parent_id)){
            $fields['parent_id'] = '0';
        }

        //create new product with fields
        self::create($fields);

        return true;
    }

    public static function updateProductCategory($fields, $id)
    {
        //check slug and transliterate 'name' if slug = null
        $fields = AppHelper::checkSlug($fields);

        if(empty($fields->parent_id)){
            $fields['parent_id'] = '0';
        }
        //find and update product in db
        $product = self::find($id);
        $product->update($fields);

        return true;
    }
}
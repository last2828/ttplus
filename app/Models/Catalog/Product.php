<?php

namespace App\Models\Catalog;

use App\Models\AppHelper;
use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Route;

/**
 * Product
 *
 * @mixin Eloquent
 *
 * @property string             $name
 * @property string             $content
 * @property string             $meta_title
 * @property string             $meta_keywords
 * @property string             $meta_description
 * @property string             $model
 * @property ProductCategory    $category
 * @property ProductGroup       $group
 * @property string             $slug
 * @property string             $image
 * @property boolean            $status
 */

class Product extends Model
{

    use SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'content',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'model',
        'category_id',
        'group_id',
        'slug',
        'image',
        'status'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group()
    {
        return $this->belongsTo(ProductGroup::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function attributes()
    {
        return $this->belongsToMany(ProductAttribute::class,'product_product_attributes')->withPivot('value');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id', 'id');
    }

    public static function getProductComponents()
    {
        //get all components for product creating
        $groups = ProductGroup::all();
        $attributes = ProductAttribute::all();
        $categories = ProductCategory::with('children')->get();

        //get route for check crud
        $route = Route::currentRouteName();

        //return product components and route
        return compact(['groups', 'attributes', 'categories', 'route']);
    }

    public static function storeProduct($fields)
    {
        //check slug and transliterate 'name' if slug = null
        $fields = AppHelper::checkSlug($fields);

        //create new product with fields
        $product = self::create($fields);

        $attributes = $product->prepareAttributes($fields);

        if($attributes)
        {
            $product->attachAttributes($attributes);
            return true;
        }

        return true;
    }

    public static function getCurrentProduct($id)
    {
        //find this product
        $product = self::with('attributes')->find($id);

        //return product with components and route
        return compact('product');
    }

    public static function updateProduct($fields, $id)
    {
        //check slug and transliterate 'name' if slug = null
        $fields = AppHelper::checkSlug($fields);

        //find and update product in db
        $product = self::find($id);
        $product->update($fields);

        $attributes = $product->prepareAttributes($fields);

        if($attributes)
        {
            $product->attributes()->detach();
            $product->attachAttributes($attributes);
            return true;
        }

        return true;
    }

    public static function deleteProduct($id)
    {
        $product = self::find($id);
        $product->attributes()->detach();
        $product->destroy($id);

        return redirect()->back();
    }


    public function attachAttributes($attributes)
    {
        foreach($attributes as $attribute) {
            self::attributes()->attach($attribute['attribute_id'], array('value' => $attribute['value']));
        }

        return true;
    }

    public function prepareAttributes($fields)
    {
        $new = $this->checkNewAttributes($fields);
        $old = $this->checkOldAttributes($fields);

        switch(true) {
            case ($new == true && $old == true):
                return $attributes = array_merge($new, $old);
                break;
            case $new == false && $old  == true:
                return $old;
                break;
            case $new == true && $old  == false:
                return $new;
                break;
        }

        return false;
    }

    public function checkNewAttributes($fields)
    {
        if(isset($fields['attributes'])) {
            return $fields['attributes'];
        }

        return false;
    }

    public function checkOldAttributes($fields)
    {
        if(isset($fields['attributes_old'])) {
            return $fields['attributes_old'];
        }

        return false;
    }

}

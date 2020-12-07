<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;

/**
 * Product
 *
 * @mixin Eloquent
 */

class Product extends Model
{

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

    public function group()
    {
        return $this->hasOne(
            Group::class,
            'id',
            'group_id'
        );
    }

    public function attribute()
    {
        return $this->belongsToMany(
            Attribute::class,
            'product_attributes',
            'product_id',
            'attribute_id'
        );
    }

    public function productAttribute()
    {
        return $this->belongsTo(ProductAttribute::class, 'id', 'product_id');
    }

    public static function getAllProducts()
    {
        //get all products from db
        $products = self::all();

        //add 'group' fields in products array
        foreach($products as $product){
            $product['group_name'] = $product->group['name'];
        }

        //return all products
        return compact('products');
    }

    public static function getProductComponents()
    {
        //get all components for product creating
        $groups = Group::all();
        $attributes = Attribute::all();

        //get route for check crud
        $route = Route::currentRouteName();

        //return product components and route
        return compact(['groups', 'attributes', 'route']);
    }

    public static function storeProduct($fields)
    {
        //check slug and transliterate 'name' if slug = null
        $fields = AppHelper::checkSlug($fields);

        //create new product with fields
        $product = self::create($fields);

        //check attributes and save if they exist
        self::checkAttributes($fields, $product->id);

        return true;
    }

    public static function getCurrentProduct($id)
    {
        //find this product
        $product = self::find($id);

        //get current product attributes
        $productAttributes = ProductAttribute::where('product_id', $id)->with('attribute')->get();

        //return product with components and route
        return compact(['product', 'productAttributes']);
    }

    public static function updateProduct($fields, $id)
    {
        //check slug and transliterate 'name' if slug = null
        $fields = AppHelper::checkSlug($fields);

        //find and update product in db
        self::find($id)->update($fields);

        //check attributes and save or change if they exist
        self::checkAttributes($fields, $id);

        return true;
    }

    public static function deleteProduct($id)
    {
        //remove product from table 'products'
        self::destroy($id);

        //remove product attributes from table 'product_attributes'
        ProductAttribute::where('product_id', $id)->delete();
    }

    public static function checkAttributes($fields, $id)
    {
        //save product attributes if they exist
        if(!empty($fields['attributes']))
            foreach($fields['attributes'] as $key => $attributesFields)
            {
                $attributesFields['product_id'] = $id;
                ProductAttribute::create($attributesFields);
            }

        //update values for old product attributes if they exist
        if(!empty($fields['attributes_old'])) {
            foreach($fields['attributes_old'] as $key => $attributesFields) {

                $attributesFields['product_id'] = $id;

                ProductAttribute::find($attributesFields['id'])->update($attributesFields);
            }
        }

        return true;
    }

}

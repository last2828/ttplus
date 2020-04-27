<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\Types\Self_;
use Transliterate;

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

        //get route for check this crud
        $route = Route::currentRouteName();

        //return product components and route
        return compact(['groups', 'attributes', 'route']);
    }

    public static function storeProduct($fields)
    {
        //if 'slug' was not filled => transliterate 'name' to fill 'slug'
        if($fields['slug'] == null)
        {
            $fields['slug'] = Transliterate::slugify($fields['name']);
        }

        $product = self::create($fields);

//        $product = new self;
//        $product->checkSlug($fields);
//        $product->create($fields);

        //save product attributes if they exist
        if(!empty($fields['attributes']))
            foreach($fields['attributes'] as $key => $attributesFields)
            {
                $attributesFields['product_id'] = $product->id;
                ProductAttribute::create($attributesFields);
            }
    }

    public static function getCurrentProductComponents($id)
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
        //if 'slug' was not filled => transliterate 'name' to fill 'slug'
        if($fields['slug'] == null)
        {
            $fields['slug'] = Transliterate::slugify($fields['name']);
        }

        //update values for old product attributes if they exist
        if(!empty($fields['attributes_old'])) {
            foreach($fields['attributes_old'] as $key => $attributesFields) {

                $attributesFields['product_id'] = $id;

                ProductAttribute::find($attributesFields['id'])->update($attributesFields);
            }
        }

        //save new product attributes if they exist
        if(!empty($fields['attributes'])){
            foreach($fields['attributes'] as $key => $attributesFields) {

                $attributesFields['product_id'] = $id;

                ProductAttribute::create($attributesFields);
            }
        }

        //update product in db
        $product = self::find($id);
        $product->update($fields);
    }

    public static function deleteProduct($id)
    {
        //remove product from table 'products'
        self::destroy($id);

        //remove product attributes from table 'product_attributes'
        ProductAttribute::where('product_id', $id)->delete();
    }

    public function checkSlug($fields)
    {
        //if 'slug' was not filled => transliterate 'name' to fill 'slug'
        if($fields['slug'] == null)
        {
            $fields['slug'] = Transliterate::slugify($fields['name']);
        }

        return $fields;
    }
}

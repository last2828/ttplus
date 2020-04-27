<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
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
        $products = Product::all();

        //add 'group' fields in products array
        foreach($products as $product){
            $product['group_name'] = $product->group['name'];
        }

        //display product catalog
        return view('admin.product.catalog', compact('products'));
    }

    public static function createProduct()
    {
        //get components for product creating
        $groups = Group::all();
        $attributes = Attribute::all();

        //get route for check this crud
        $route = Route::currentRouteName();

        //display create form with components
        return view('admin.product.create', compact(['groups', 'attributes', 'route']));
    }

    public static function storeProduct($fields)
    {

        //if 'slug' was not filled => transliterate 'name' to fill 'slug'
        if($fields['slug'] == null)
        {
            $fields['slug'] = Transliterate::slugify($fields['name']);
        }

        //save product in db
        $product = Product::create($fields);

        //save product attributes if they exist
        if(!empty($fields['attributes']))
            foreach($fields['attributes'] as $key => $attributesFields)
            {
                $attributesFields['product_id'] = $product->id;
                ProductAttribute::create($attributesFields);
            }

        //back to the product catalog
        return redirect()->route('products.index');
    }

    public static function editProduct($id)
    {
        //find this product
        $product = Product::find($id);

        //get components for product updating
        $groups = Group::all();
        $attributes = Attribute::all();
        $productAttributes = ProductAttribute::where('product_id', $id)->with('attribute')->get();

        //get route for check this crud
        $route = Route::currentRouteName();

        //display update form with components
        return view('admin.product.edit', compact(['product', 'groups', 'attributes', 'productAttributes', 'route']));
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
        $product = Product::find($id);
        $product->update($fields);

        //back to the product catalog
        return redirect()->route('products.index');
    }

    public static function deleteProduct($id)
    {
        //remove product from table 'products'
        Product::destroy($id);

        //remove product attributes from table 'product_attributes'
        ProductAttribute::where('product_id', $id)->delete();

        //back to the product catalog
        return redirect()->back();
    }

}

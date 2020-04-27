<?php

namespace App\Http\Controllers\admin\catalog;

use App\Group;
use App\Product;
use App\Attribute;
use Transliterate;
use App\ProductCategory;
use App\ProductAttribute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\ProductValidator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        foreach($products as $product){
            $product['category_name'] = $product->category['name'];
            $product['group_name'] = $product->group['name'];
        }
        return view(
            'admin.product.catalog',
            [
                'products' => $products,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(
          'admin.product.create',
          [
//              'categories' => ProductCategory::all(),
              'groups' => Group::all(),
              'attributes' => Attribute::all(),
              'route' => Route::currentRouteName()
          ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProductValidator $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductValidator $request)
    {
        $fields = $request->toArray();

        if($fields['slug'] == null)
        {
            $fields['slug'] = Transliterate::slugify($fields['name']);
        }
        dd($fields['attributes']);
        $product = Product::create($fields);
        if(!empty($fields['attributes']))
            foreach($fields['attributes'] as $key => $attributesFields)
            {
                    $attributesFields['product_id'] = $product->id;
                    ProductAttribute::create($attributesFields);
            }

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view(
            'admin.product.edit',
            [
                'product' => Product::find($id),
                'route' => Route::currentRouteName(),
//                'categories' => ProductCategory::all(),
                'groups' => Group::all(),
                'attributes' => Attribute::all(),
                'productAttributes' => ProductAttribute::where('product_id', $id)->with('attribute')->get(),
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProductValidator $request
     * @return \Illuminate\Http\Response
     */
    public function update(ProductValidator $request, $id)
    {
        $fields = $request->toArray();

        // check slug
        if($fields['slug'] == null)
        {
            $fields['slug'] = Transliterate::slugify($fields['name']);
        }

        // updating attributes fields in db
        if(!empty($fields['attributes_old'])) {
            foreach($fields['attributes_old'] as $key => $attributesFields) {

                $attributesFields['product_id'] = $id;

                ProductAttribute::find($attributesFields['id'])->update($attributesFields);
            }
        }

        if(!empty($fields['attributes'])){
            foreach($fields['attributes'] as $key => $attributesFields) {

                $attributesFields['product_id'] = $id;

                ProductAttribute::create($attributesFields);
            }
        }

        // updating product fields in db
        $product = Product::find($id);
        $product->update($fields);
        return redirect()->route('products.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        ProductAttribute::where('product_id', $id)->delete();
        return redirect()->back();
    }
}

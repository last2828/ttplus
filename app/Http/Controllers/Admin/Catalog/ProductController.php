<?php

namespace App\Http\Controllers\admin\catalog;

use App\Attribute;
use App\Group;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;
use Transliterate;

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
        }
        return view(
            'admin.product.catalog',
            [
                'products' => $products
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
          'admin.product.create-product',
          [
              'categories' => ProductCategory::all(),
              'groups' => Group::all(),
              'attributes' => Attribute::all()
          ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->toArray();

        if($fields['slug'])
        {
            $fields['slug'] = Transliterate::slugify($fields['slug']);
        }else{
            $fields['slug'] = Transliterate::slugify($fields['name']);
        }

        if($fields['category_id'] == 'null')
        {
            $fields['category_id'] = null;
        }

        if($fields['group_id'] == 'null')
        {
            $fields['group_id'] = null;
        }

        Product::create($fields);
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
            'admin.product.edit-product',
            [
                'product' => Product::find($id),
                'categories' => ProductCategory::all(),
                'groups' => Group::all(),
                'attributes' => Attribute::all()
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fields = $request->toArray();

        if($fields['slug'])
        {
            $fields['slug'] = Transliterate::slugify($fields['slug']);
        }else{
            $fields['slug'] = Transliterate::slugify($fields['name']);
        }

        if($fields['category_id'] == 'null')
        {
            $fields['category_id'] = null;
        }
        if($fields['group_id'] == 'null')
        {
            $fields['group_id'] = null;
        }

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
        return redirect()->back();
    }
}

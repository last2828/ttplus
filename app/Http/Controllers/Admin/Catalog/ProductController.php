<?php

namespace App\Http\Controllers\admin\catalog;

use App\Attribute;
use App\Group;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductAttribute;
use App\ProductCategory;
use App\ProductGroup;
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

        $product = Product::create($fields);

        if($product['group_id'] != null){
            $groupFields = [
                'product_id' => $product->id,
                'group_id' => $fields['group_id']
            ];
            ProductGroup::create($groupFields);
        }


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
            'admin.product.edit-product',
            [
                'product' => Product::find($id),
                'categories' => ProductCategory::all(),
                'groups' => Group::all(),
                'attributes' => Attribute::all(),
                'productAttributes' => ProductAttribute::where('product_id', $id)->with('attribute')->get()
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

        $allAttrubites = array_merge($fields['attributes_old'], $fields['attributes']);
        return $allAttrubites;

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

        // $data = [
        //     'product_id' => $fields['id'],
        //     'group_id' => $fields['group_id']
        // ];

        // ProductGroup::where(
        //     ['product_id', 'group_id'],
        //     [$data['product_id'], $data['group_id']]
        // )->create($data);

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

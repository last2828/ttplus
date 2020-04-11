<?php

namespace App\Http\Controllers\admin\catalog;

use App\Attribute;
use App\Group;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductCategory;
use ElForastero\Transliterate\Map;
use ElForastero\Transliterate\Transliterator;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'admin.product.catalog',
            [
                'products' => Product::all()
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
              'categories' => ProductCategory::all()
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

        $translit = new Transliterator(Map::LANG_RU, Map::GOST_7_79_2000);

        if($fields['slug'])
        {
            $fields['slug'] = $translit->slugify($fields['slug']);
        }else{
            $fields['slug'] = $translit->slugify($fields['name']);
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
        $product = Product::find($id);
        return view(
            'admin.product.edit-product',
            [
                'product' => $product,
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

        $translit = new Transliterator(Map::LANG_RU, Map::GOST_7_79_2000);
        if($fields['slug'])
        {
            $fields['slug'] = $translit->slugify($fields['slug']);
        }else{
            $fields['slug'] = $translit->slugify($fields['name']);
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

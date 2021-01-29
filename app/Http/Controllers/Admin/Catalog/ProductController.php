<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Requests\Catalog\ProductUpdateRequest;
use App\Models\Catalog\Product;
use App\Http\Requests\Catalog\ProductStoreRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::getAllProducts();

        return view('admin.catalog.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $components = Product::getProductComponents();

        return view('admin.catalog.products.create', $components);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProductStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
        $fields = $request->toArray();
        Product::storeProduct($fields);

        return redirect()->route('admin.catalog.products.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $currentProduct = Product::getCurrentProduct($id);
        $components = Product::getProductComponents();

        return view('admin.catalog.products.edit', $currentProduct, $components);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProductUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, $id)
    {
        $fields = $request->toArray();
        Product::updateProduct($fields, $id);

        return redirect()->route('admin.catalog.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::deleteProduct($id);

        return redirect()->back();
    }
}

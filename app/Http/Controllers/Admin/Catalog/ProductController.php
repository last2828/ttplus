<?php

namespace App\Http\Controllers\admin\catalog;

use App\Product;
use App\Http\Controllers\Controller;
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
        //get all products
        $products = Product::getAllProducts();

        //display catalog with products
        return view('admin.product.catalog', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //get all components for create product
        $components = Product::getProductComponents();

        //display create form with components
        return view('admin.product.create', $components);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProductValidator $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductValidator $request)
    {
        //convert data from object to array after validation
        $fields = $request->toArray();

        //save new product
        Product::storeProduct($fields);

        //back to the product catalog
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
        //get current product components
        $currentProduct = Product::getCurrentProductComponents($id);

        //get all components for update product
        $components = Product::getProductComponents();

        //display update form with components
        return view('admin.product.edit', $currentProduct, $components);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProductValidator $request
     * @return \Illuminate\Http\Response
     */
    public function update(ProductValidator $request, $id)
    {
        //convert data from object to array after validation
        $fields = $request->toArray();

        //update current product
        Product::updateProduct($fields, $id);

        //back to the product catalog
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
        //delete current product
        Product::deleteProduct($id);

        //back to the product catalog
        return redirect()->back();
    }
}

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
        return Product::getAllProducts();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Product::createProduct();
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

        return Product::storeProduct($fields);
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
        return Product::editProduct($id);
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

        return Product::updateProduct($fields, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Product::deleteProduct($id);
    }
}

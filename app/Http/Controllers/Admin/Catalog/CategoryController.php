<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Requests\Catalog\ProductCategoryStoreRequest;
use App\Http\Requests\Catalog\ProductCategoryUpdateRequest;
use App\Models\Catalog\ProductCategory;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ProductCategory::all();

        return view('admin.catalog.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategory::all();

        return view('admin.catalog.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProductCategoryStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCategoryStoreRequest $request)
    {
        $fields = $request->toArray();
        ProductCategory::storeProductCategory($fields);

        return redirect()->route('admin.catalog.product_categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = ProductCategory::all();
        $category = ProductCategory::find($id);

        return view('admin.catalog.categories.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProductCategoryUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductCategoryUpdateRequest $request, $id)
    {
        $fields = $request->toArray();
        ProductCategory::updateProductCategory($fields, $id);

        return redirect()->route('admin.catalog.product_categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductCategory::destroy($id);

        return redirect()->back();
    }
}
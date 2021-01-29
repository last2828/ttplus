<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Models\Catalog\Product;
use App\Http\Requests\Catalog\ProductStoreRequest;
use App\Http\Requests\Catalog\ProductUpdateRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::getAllProducts();

        return view('admin.catalog.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $components = Product::getProductComponents();

        return view('admin.catalog.products.create', $components);
    }

    /**
     * Store a newly created product in storage.
     *
     * @param  ProductStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductStoreRequest $request)
    {
        $fields = $request->toArray();
        Product::storeProduct($fields);

        return redirect()->route('admin.catalog.products.index');
    }

    /**
     * Show the form for editing the product.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $currentProduct = Product::getCurrentProduct($id);
        $components = Product::getProductComponents();

        return view('admin.catalog.products.edit', $currentProduct, $components);
    }

    /**
     * Update the product in storage.
     *
     * @param  ProductUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProductUpdateRequest $request, $id)
    {
        $fields = $request->toArray();
        Product::updateProduct($fields, $id);

        return redirect()->route('admin.catalog.products.index');
    }

    /**
     * Remove the product from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Product::deleteProduct($id);

        return redirect()->back();
    }
}

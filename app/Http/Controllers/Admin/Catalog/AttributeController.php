<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Requests\Catalog\ProductAttributeRequest;
use App\Models\Catalog\ProductAttribute;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributes = ProductAttribute::all();

        return view('admin.catalog.attributes.index', compact('attributes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.catalog.attributes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProductAttributeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductAttributeRequest $request)
    {
        $request->validated();
        $fields = $request->toArray();
        ProductAttribute::create($fields);

        return redirect()->route('admin.catalog.attributes.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attribute = ProductAttribute::find($id);

        return view('admin.catalog.attributes.edit', compact('attribute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProductAttributeRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductAttributeRequest $request, $id)
    {
        $fields = $request->toArray();
        ProductAttribute::find($id)->update($fields);

        return redirect()->route('admin.catalog.attributes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductAttribute::deleteAttribute($id);

        return redirect()->back();
    }
}

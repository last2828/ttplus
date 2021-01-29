<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Requests\Catalog\ProductGroupStoreRequest;
use App\Http\Requests\Catalog\ProductGroupUpdateRequest;
use App\Models\Catalog\ProductCategory;
use App\Models\Catalog\ProductGroup;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = ProductGroup::all();

        return view('admin.catalog.groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategory::all();

        return view('admin.catalog.groups.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProductGroupStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductGroupStoreRequest $request)
    {
        $fields = $request->toArray();
        ProductGroup::storeGroup($fields);

        return redirect()->route('admin.catalog.groups.index');
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
        $group = ProductGroup::find($id);

        return view('admin.catalog.groups.edit', compact('categories', 'group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProductGroupUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductGroupUpdateRequest $request, $id)
    {
        $fields = $request->toArray();
        ProductGroup::updateGroup($fields, $id);

        return redirect()->route('admin.catalog.groups.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductGroup::destroy($id);

        return redirect()->back();
    }
}

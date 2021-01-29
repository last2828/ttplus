<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Requests\Catalog\ProductGroupStoreRequest;
use App\Http\Requests\Catalog\ProductGroupUpdateRequest;
use App\Models\Catalog\ProductCategory;
use App\Models\Catalog\ProductGroup;

class GroupController extends Controller
{
    /**
     * Display a listing of the product groups.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $groups = ProductGroup::all();

        return view('admin.catalog.groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new product group.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = ProductCategory::all();

        return view('admin.catalog.groups.create', compact('categories'));
    }

    /**
     * Store a newly created product group in storage.
     *
     * @param  ProductGroupStoreRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductGroupStoreRequest $request)
    {
        $fields = $request->toArray();
        ProductGroup::storeGroup($fields);

        return redirect()->route('admin.catalog.groups.index');
    }

    /**
     * Show the form for editing the specified product group.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $categories = ProductCategory::all();
        $group = ProductGroup::find($id);

        return view('admin.catalog.groups.edit', compact('categories', 'group'));
    }

    /**
     * Update the specified product group in storage.
     *
     * @param  ProductGroupUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProductGroupUpdateRequest $request, $id)
    {
        $fields = $request->toArray();
        ProductGroup::updateGroup($fields, $id);

        return redirect()->route('admin.catalog.groups.index');
    }

    /**
     * Remove the specified product group from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        ProductGroup::destroy($id);

        return redirect()->back();
    }
}

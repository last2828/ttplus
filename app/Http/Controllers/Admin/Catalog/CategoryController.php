<?php

namespace App\Http\Controllers\admin\catalog;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryValidator;
use App\ProductCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all categories
        $categories = ProductCategory::all();

        //display category catalog
        return view('admin.category.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //get components for create category
        $categories = ProductCategory::all();

        //display create form with components
        return view('admin.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CategoryValidator $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryValidator $request)
    {
        //convert data from object to array after validation
        $fields = $request->toArray();

        //save new category
        ProductCategory::storeProductCategory($fields);

        //back to the category catalog
        return redirect()->route('product_categories.index');
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
        //get components for update category
        $categories = ProductCategory::all();

        //find current category
        $category = ProductCategory::find($id);

        //display update form with components
        return view('admin.category.edit', compact(['category', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CategoryValidator  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryValidator $request, $id)
    {
        //convert data from object to array after validation
        $fields = $request->toArray();

        //update current category
        ProductCategory::updateProductCategory($fields, $id);

        //back to the category catalog
        return redirect()->route('product_categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete category
        ProductCategory::destroy($id);

        //back to the category catalog
        return redirect()->back();
    }

}
<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Requests\AttributeValidator;
use App\Models\Catalog\ProductAttribute;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all groups
        $attributes = ProductAttribute::all();

        //display attribute catalog
        return view('admin.attribute.attributes', compact('attributes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(
          'admin.attribute.create'
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AttributeValidator  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AttributeValidator $request)
    {
        //convert data from object to array after validation
        $request->validated();
        $fields = $request->toArray();

        //save new attribute
        ProductAttribute::create($fields);

        //back to the attribute catalog
        return redirect()->route('attributes.index');
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
        //find current attribute
        $attribute = ProductAttribute::find($id);

        //display update form with components
        return view('admin.attribute.edit', compact('attribute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AttributeValidator  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AttributeValidator $request, $id)
    {
        //convert data from object to array after validation
        $fields = $request->toArray();

        //find and update current attribute
        ProductAttribute::find($id)->update($fields);

        //back to the attribute catalog
        return redirect()->route('attributes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete attribute
        ProductAttribute::deleteAttribute($id);

        //back to the attribute catalog
        return redirect()->back();
    }
}

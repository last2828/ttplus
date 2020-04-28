<?php

namespace App\Http\Controllers\admin\catalog;

use App\Attribute;
use App\Http\Controllers\Controller;
use App\Http\Requests\AttributeValidator;
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
        $attributes = Attribute::all();

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
        //display create form
        return view('admin.attribute.create');
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
        Attribute::create($fields);

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
        $attribute = Attribute::find($id);

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
        Attribute::find($id)->update($fields);

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
        Attribute::deleteAttribute($id);

        //back to the attribute catalog
        return redirect()->back();
    }
}

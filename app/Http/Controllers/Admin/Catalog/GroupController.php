<?php

namespace App\Http\Controllers\admin\catalog;

use App\Group;
use App\Http\Controllers\Controller;
use App\ProductCategory;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all groups
        $groups = Group::all();

        //display group catalog
        return view('admin.group.groups', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //get components for create group
        $categories = ProductCategory::all();

        //display create form with components
        return view('admin.group.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //convert data from object to array after validation
        $fields = $request->toArray();

        //save new group
        Group::storeGroup($fields);

        //back to the group catalog
        return redirect()->route('groups.index');
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
        //get components for update group
        $categories = ProductCategory::all();

        //find current group
        $group = Group::find($id);

        //display update form with components
        return view('admin.group.edit', compact(['categories', 'group']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //convert data from object to array after validation
        $fields = $request->toArray();

        //find and update current group
        Group::updateGroup($fields, $id);

        //back to the group catalog
        return redirect()->route('groups.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete group
        Group::destroy($id);

        //back to the group catalog
        return redirect()->back();
    }
}

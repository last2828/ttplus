<?php

namespace App\Http\Controllers\admin\catalog;

use App\Category;
use App\CategoryGroup;
use App\Group;
use App\Http\Controllers\Controller;
use App\ProductCategory;
use Illuminate\Http\Request;
use Transliterate;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Group::getAllGroups();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Group::createGroup();
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

        return Group::storeGroup($fields);
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
        return view(
            'admin.group.edit-group',
            [
                'group' => Group::find($id),
                'categories' => ProductCategory::all(),
            ]
        );
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
        $fields = $request->toArray();

        // check slug
        if($fields['slug'] == null)
        {
            $fields['slug'] = Transliterate::slugify($fields['name']);
        }

        $group = Group::find($id);
        $group->update($fields);
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
        Group::destroy($id);
        return redirect()->back();
    }
}

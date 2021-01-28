<?php

namespace App\Http\Controllers\Admin\Blog;

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
//        return view(
//            'admin.blog.categories',
//            [
//                'categories' => PostCategory::all()
//            ]
//        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view(
//            'admin.blog.create-category',
//            [
//                'categories' => PostCategory::all()
//            ]
//        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        $fields = $request->toArray();
//
//        if($fields['slug'])
//        {
//            $fields['slug'] = Transliterate::slugify($fields['slug']);
//        }else{
//            $fields['slug'] = Transliterate::slugify($fields['name']);
//        }
//
//        if($fields['parent_id'] == 'null')
//        {
//            $fields['parent_id'] = null;
//        }
//
//        PostCategory::create($fields);
//        return redirect()->route('categories.index');

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
//        return view(
//            'admin.blog.edit-category',
//            [
//                'category' => PostCategory::find($id),
//                'categories' => PostCategory::all()
//            ]
//        );

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
//        $fields = $request->toArray();
//
//        if($fields['slug'])
//        {
//            $fields['slug'] = Transliterate::slugify($fields['slug']);
//        }else{
//            $fields['slug'] = Transliterate::slugify($fields['name']);
//        }
//
//        if($fields['parent_id'] == 'null')
//        {
//            $fields['parent_id'] = null;
//        }
//
//        $category = PostCategory::find($id);
//        $category->update($fields);
//        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        PostCategory::destroy($id);
//        return redirect()->back();
    }
}

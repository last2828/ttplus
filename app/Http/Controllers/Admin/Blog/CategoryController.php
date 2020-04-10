<?php

namespace App\Http\Controllers\admin\blog;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use ElForastero\Transliterate\Map;
use ElForastero\Transliterate\Transliterator;
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
        return view('admin.blog.categories', ['categories' => Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create-category', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $fields = $request->toArray();
        $translit = new Transliterator(Map::LANG_RU, Map::GOST_7_79_2000);

        if($fields['slug'])
        {
            $fields['slug'] = $translit->slugify($fields['slug']);
        }else{
            $fields['slug'] = $translit->slugify($fields['name']);
        }

        if($fields['parent_id'] == 'null')
        {
            $fields['parent_id'] = null;
        }

        Category::create($fields);
        return redirect()->route('categories.index');

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
        $category = Category::find($id);
        return view('admin.blog.edit-category', ['category' => $category, 'categories' => Category::all()]);

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
        $translit = new Transliterator(Map::LANG_RU, Map::GOST_7_79_2000);

        if($fields['slug'])
        {
            $fields['slug'] = $translit->slugify($fields['slug']);
        }else{
            $fields['slug'] = $translit->slugify($fields['name']);
        }

        if($fields['parent_id'] == 'null')
        {
            $fields['parent_id'] = null;
        }

        $category = Category::find($id);
        $category->update($fields);
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->back();
    }
}

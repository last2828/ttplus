<?php

namespace App\Http\Controllers\admin\catalog;

use App\Http\Controllers\Controller;
use App\ProductCategory;
use Illuminate\Http\Request;
use Transliterate;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ProductCategory::with('parent')->get();
        foreach($categories as $category){
            if (isset($category->parent['name'])) {
                $category['parent_name'] = $category->parent['name'];
            }
        }
        return view('admin.category.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(
          'admin.category.create-category',
          [
              'categories' => ProductCategory::all()
          ]
        );
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

        if($fields['slug'])
        {
            $fields['slug'] = Transliterate::slugify($fields['slug']);
        }else{
            $fields['slug'] = Transliterate::slugify($fields['name']);
        }

        if($fields['parent_id'] == 'null')
        {
            $fields['parent_id'] = null;
        }

        ProductCategory::create($fields);
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
        return view(
            'admin.category.edit-category',
            [
                'category' => ProductCategory::find($id),
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

        if($fields['slug'])
        {
            $fields['slug'] = Transliterate::slugify($fields['slug']);
        }else{
            $fields['slug'] = Transliterate::slugify($fields['name']);
        }

        if($fields['parent_id'] == 'null')
        {
            $fields['parent_id'] = null;
        }

        $category = ProductCategory::find($id);
        $category->update($fields);
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
        ProductCategory::destroy($id);
        return redirect()->back();
    }

}
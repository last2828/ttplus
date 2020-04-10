<?php

namespace App\Http\Controllers\admin\blog;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use ElForastero\Transliterate\Map;
use Illuminate\Http\Request;
use ElForastero\Transliterate\Transliterator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        foreach($posts as $post){
            $post['category_name'] = $post->category['name'];
        }

        return view(
            'admin.blog.posts',
            [
                'posts' => $posts
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(
            'admin.blog.create-post',
            [
                'categories' => Category::all()
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
        $translit = new Transliterator(Map::LANG_RU, Map::GOST_7_79_2000);

        if($fields['slug'])
        {
            $fields['slug'] = $translit->slugify($fields['slug']);
        }else{
            $fields['slug'] = $translit->slugify($fields['title']);
        }

        if($fields['category_id'] == 'null')
        {
            $fields['category_id'] = null;
        }

        Post::create($fields);
        return redirect()->route('posts.index');
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
        $post = Post::find($id);
        return view(
            'admin.blog.edit-post',
            [
                'post' => $post,
                'categories' => Category::all()
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
        $translit = new Transliterator(Map::LANG_RU, Map::GOST_7_79_2000);

        if($fields['slug'])
        {
            $fields['slug'] = $translit->slugify($fields['slug']);
        }else{
            $fields['slug'] = $translit->slugify($fields['title']);
        }

        if($fields['category_id'] == 'null')
        {
            $fields['category_id'] = null;
        }

        $post = Post::find($id);
        $post->update($fields);
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\admin\blog;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Type;
use Illuminate\Http\Request;
use Transliterate;

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

        return view('admin.blog.posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $types = Type::all();

      return view('admin.blog.create-post', compact('types'));
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
            $fields['slug'] = Transliterate::slugify($fields['title']);
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
      $post = Post::with('type')->find($id);
      $types = Type::all();

      return view('admin.blog.edit-post', compact(['post', 'types']));
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
            $fields['slug'] = Transliterate::slugify($fields['title']);
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

<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Requests\Blog\PostStoreRequest;
use App\Http\Requests\Blog\PostUpdateRequest;
use App\Models\Blog\Post;
use App\Models\Blog\PostType;
use Transliterate;

class PostController extends Controller
{
    /**
     * Display a listing of the posts.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::all();

        return view('admin.blog.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
      $types = PostType::all();

      return view('admin.blog.posts.create', compact('types'));
    }

    /**
     * Store a newly created post in storage.
     *
     * @param  PostStoreRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostStoreRequest $request)
    {
        $fields = $request->toArray();

        if($fields['slug'])
        {
            $fields['slug'] = Transliterate::slugify($fields['slug']);
        }else{
            $fields['slug'] = Transliterate::slugify($fields['title']);
        }

        Post::create($fields);
        return redirect()->route('admin.blog.posts.index');
    }

    /**
     * Show the form for editing the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
      $post = Post::with('type')->find($id);
      $types = PostType::all();

      return view('admin.blog.posts.edit', compact('post', 'types'));
    }

    /**
     * Update the specified post in storage.
     *
     * @param  PostUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PostUpdateRequest $request, $id)
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
        return redirect()->route('admin.blog.posts.index');
    }

    /**
     * Remove the specified post from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->back();
    }
}

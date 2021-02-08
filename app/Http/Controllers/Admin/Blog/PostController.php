<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Requests\Blog\PostStoreRequest;
use App\Http\Requests\Blog\PostUpdateRequest;
use App\Repositories\Blog\PostRepository;
use App\Repositories\Blog\PostTypeRepository;
use App\Models\Blog\Post;

class PostController extends BaseController
{
    /**
     * @var PostRepository
     */
    protected $postRepository;

    /**
     * @var PostTypeRepository
     */
    protected $postTypeRepository;

    /**
     * PostController constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->postRepository = app(PostRepository::class);
        $this->postTypeRepository = app(PostTypeRepository::class);
    }

    /**
     * Display a listing of the posts.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = $this->postRepository->getAllForAdminList();

        return view('admin.blog.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $types = $this->postTypeRepository->getAllForSelect();

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
        $post = $this->postRepository->getOnyForEditById($id);
        $types = $this->postTypeRepository->getAllForSelect();

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
        Post::find($id)->update($fields);

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

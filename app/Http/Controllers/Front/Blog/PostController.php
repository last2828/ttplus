<?php

namespace App\Http\Controllers\Front\Blog;

use App\Http\Controllers\Front\BaseController;
use App\Repositories\Blog\PostRepository;
use Request;

class PostController extends BaseController
{
    /**
     * @var PostRepository
     */
    private $postRepository;

    /**
     * PostController constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->postRepository = app(PostRepository::class);
    }

    /**
     * Get all posts by type for blog index page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $type = Request::get('type') ? Request::get('type') : 2;
        $posts = $this->postRepository->getAllForBlogByType($type, 8);

        return view('front.blog.index', compact('posts'));
    }

    /**
     * Show one post by id with below and above posts
     *
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {
        $post = $this->postRepository->getOneBySlug($slug);
        $abovePost = $this->postRepository->getAboveById($post->id);
        $belowPost = $this->postRepository->getBelowById($post->id);

        return view('front.blog.post', compact('post', 'belowPost', 'abovePost'));
    }
}

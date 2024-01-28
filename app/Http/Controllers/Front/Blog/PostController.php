<?php

namespace App\Http\Controllers\Front\Blog;

use App\Http\Controllers\Front\BaseController;
use App\Repositories\Blog\PostRepository;
use App\Services\MetaTagsService;
use Request;

class PostController extends BaseController
{
    /**
     * @var PostRepository
     */
    private $postRepository;

    /**
     * PostController constructor.
     * @param MetaTagsService $meta
     */
    public function __construct(MetaTagsService $meta)
    {
        parent::__construct($meta);

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

        $tags = [
            'title' => 'News',
            'keywords' => 'News',
            'description' => 'News'
        ];
        $meta = $this->meta->getMetaTags($tags['title'], $tags['keywords'], $tags['description']);

        return view('front.blog.index', compact('posts', 'meta'));
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
        $meta = $this->meta->getMetaTags($post->meta_title, $post->meta_keywords, $post->meta_description);

        return view('front.blog.post', compact('post', 'belowPost', 'abovePost', 'meta'));
    }
}

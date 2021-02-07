<?php

namespace App\Http\Controllers\Front\Blog;

use App\Http\Controllers\Front\BaseController;
use App\Repositories\Blog\PostRepository;
use Butschster\Head\Contracts\MetaTags\MetaInterface;
use Request;

class PostController extends BaseController
{
    /**
     * @var PostRepository
     */
    private $postRepository;

    /**
     * PostController constructor.
     * @param MetaInterface $meta
     */
    public function __construct(MetaInterface $meta)
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

        $meta = $this->meta->setTitle('Новости компании TTplus')
                            ->setKeywords('Новости компании TTplus')
                            ->setDescription('Новости компании TTplus');

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

        $meta = $this->meta->setTitle($post->meta_title)
                            ->setKeywords($post->meta_keywords)
                            ->setDescription($post->meta_description);

        return view('front.blog.post', compact('post', 'belowPost', 'abovePost', 'meta'));
    }
}

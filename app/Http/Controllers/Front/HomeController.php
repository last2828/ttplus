<?php

namespace App\Http\Controllers\Front;

use App\Models\PageField;
use App\Repositories\Blog\PostRepository;
use App\Services\MetaTagsService;

class HomeController extends BaseController
{
    /**
     * HomeController constructor.
     * @param MetaTagsService $meta
     */
    public function __construct(MetaTagsService $meta)
    {
        parent::__construct($meta);
    }

    /**
     * Show index page
     *
     * @param PostRepository $postRepository
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(PostRepository $postRepository)
    {
        $page = PageField::where('key', 'home')->first();
        $meta = $this->meta->getMetaTags($page->meta_title, $page->meta_keywords, $page->meta_description);
        $posts = $postRepository->getForIndexPage(4);

        return view('front.pages.home', compact('posts', 'meta'));
    }

    /**
     * Show about page
     * @param string $key
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function page($key)
    {
        $page = PageField::where('key', $key)->first();
        $meta = $this->meta->getMetaTags($page->meta_title, $page->meta_keywords, $page->meta_description);

        return view('front.pages.' . $page->key, compact('page','meta'));
    }
}

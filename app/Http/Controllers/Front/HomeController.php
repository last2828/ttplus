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
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        $page = PageField::where('key', 'about')->first();
        $meta = $this->meta->getMetaTags($page->meta_title, $page->meta_keywords, $page->meta_description);

        return view('front.pages.about', compact('page','meta'));
    }

    /**
     * Show contact page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        $page = PageField::where('key', 'contact')->first();
        $meta = $this->meta->getMetaTags($page->meta_title, $page->meta_keywords, $page->meta_description);

        return view('front.pages.contact', compact('page', 'meta'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dunkermotoren()
    {
        $page = PageField::where('key', 'dunkermotoren')->first();
        $meta = $this->meta->getMetaTags($page->meta_title, $page->meta_keywords, $page->meta_description);

        return view('front.pages.dunkermotoren', compact('meta'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function jianghai()
    {
        $page = PageField::where('key', 'jianghai')->first();
        $meta = $this->meta->getMetaTags($page->meta_title, $page->meta_keywords, $page->meta_description);

        return view('front.pages.jianghai', compact('meta'));
    }
}

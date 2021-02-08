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
        $tags = [
            'title' => 'Главная страница',
            'keywords' => 'Главная страница',
            'description' => 'Главная страница',
        ];
        $meta = $this->meta->getMetaTags($tags['title'], $tags['keywords'], $tags['description']);
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
        $meta = $this->meta->getMetaTags($page->meta_title, $page->meta->keywords, $page->meta->description);

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
        $meta = $this->meta->getMetaTags($page->meta_title, $page->meta->keywords, $page->meta->description);

        return view('front.pages.contact', compact('page', 'meta'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dunkermotoren()
    {
        $tags = [
            'title' => 'Информация о производителе Dunkermotoren',
            'keywords' => 'Информация о производителе Dunkermotoren',
            'description' => 'Информация о производителе Dunkermotoren'
        ];
        $meta = $this->meta->getMetaTags($tags['title'], $tags['keywords'], $tags['description']);

        return view('front.pages.dunkermotoren', compact('meta'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function jianghai()
    {
        $tags = [
            'title' => 'Информация о производителе Jianghai',
            'keywords' => 'Информация о производителе Jianghai',
            'description' => 'Информация о производителе Jianghai'
        ];
        $meta = $this->meta->getMetaTags($tags['title'], $tags['keywords'], $tags['description']);

        return view('front.pages.jianghai', compact('meta'));
    }
}

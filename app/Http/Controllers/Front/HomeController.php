<?php

namespace App\Http\Controllers\Front;

use App\Models\PageField;
use App\Repositories\Blog\PostRepository;

class HomeController extends BaseController
{

    /**
     * Show index page
     *
     * @param PostRepository $postRepository
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(PostRepository $postRepository)
    {
        $posts = $postRepository->getForIndexPage(4);

        return view('front.pages.home', compact('posts'));
    }

    /**
     * Show about page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        $data = PageField::where('key', 'about')->first();

        return view('front.pages.about', compact('data'));
    }

    /**
     * Show contact page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        $data = PageField::where('key', 'contact')->first();

        return view('front.pages.contact', compact('data'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dunkermotoren()
    {
        return view('front.pages.dunkermotoren');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function jianghai()
    {
        return view('front.pages.jianghai');
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Models\PageField;
use App\Repositories\Blog\PostRepository;
use Butschster\Head\Contracts\MetaTags\MetaInterface;

class HomeController extends BaseController
{
    /**
     * HomeController constructor.
     * @param MetaInterface $meta
     */
    public function __construct(MetaInterface $meta)
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
        $meta = $this->meta->setTitle('Компания TTplus')
                            ->setKeywords('Компания TTplus')
                            ->setDescription('Компания TTplus');

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
        $meta = $this->meta->setTitle('Информация о компании TTplus')
                            ->setKeywords('Информация о компании TTplus')
                            ->setDescription('Информация о компании TTplus');

        $data = PageField::where('key', 'about')->first();

        return view('front.pages.about', compact('data','meta'));
    }

    /**
     * Show contact page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        $meta = $this->meta->setTitle('Контактная информация компании TTplus')
                            ->setKeywords('Контактная информация компании TTplus')
                            ->setDescription('Контактная информация компании TTplus');

        $data = PageField::where('key', 'contact')->first();

        return view('front.pages.contact', compact('data', 'meta'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dunkermotoren()
    {
        $meta = $this->meta->setTitle('Информация о производителе Dunkermotoren')
                            ->setKeywords('Информация о производителе Dunkermotoren')
                            ->setDescription('Информация о производителе Dunkermotoren');

        return view('front.pages.dunkermotoren', compact('meta'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function jianghai()
    {
        $meta = $this->meta->setTitle('Информация о производителе Jianghai')
                            ->setKeywords('Информация о производителе Jianghai')
                            ->setDescription('Информация о производителе Jianghai');

        return view('front.pages.jianghai', compact('meta'));
    }
}

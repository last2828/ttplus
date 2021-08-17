<?php

namespace App\Http\Controllers\Front;

use App\Document;
use App\Models\PageField;
use App\Repositories\Blog\PostRepository;
use App\Services\MetaTagsService;
use Illuminate\Http\Request;

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
        if($page->meta_title & $page->meta_keywords & $page->meta_description) {
            $meta = $this->meta->getMetaTags($page->meta_title, $page->meta_keywords, $page->meta_description);
        }else{
            $meta = [];
        }
        $posts = $postRepository->getForIndexPage(4);

        return view('front.pages.home', compact('page','posts', 'meta'));
    }

    /**
     * Show about page
     * @param Request $request
     * @param string $key
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function page(Request $request, $key)
    {
        $page = PageField::where('key', $key)->first();
        $meta = $this->meta->getMetaTags($page->meta_title, $page->meta_keywords, $page->meta_description);

        if($request->query('limit') == 'all') {
            $awards = Document::where('type', 'award')->get();
            $shows = Document::where('type', 'show')->get();
            $licenses = Document::where('type', 'license')->get();
        } else {
            $awards = Document::where('type', 'award')->paginate(3);
            $shows = Document::where('type', 'show')->paginate(3);
            $licenses = Document::where('type', 'license')->paginate(3);
        }

        return view('front.pages.' . $page->key, compact('page','meta', 'awards', 'shows', 'licenses'));
    }
}

<?php

namespace App\Http\Controllers\Front\Blog;

use App\Http\Controllers\Front\BaseController;
use App\Models\Blog\Post;
use Illuminate\Http\Request;

class NewsController extends BaseController
{
    public function index()
    {
        $postsDocument = Post::where('type_id', '3')->get();
        $postsVideo = Post::where('type_id', '2')->get();
        $postsArticle = Post::where('type_id', '1')->get();

        return view('front.pages.news.index', compact(['postsDocument', 'postsVideo', 'postsArticle']));
    }
}

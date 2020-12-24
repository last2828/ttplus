<?php

namespace App\Http\Controllers\Front\News;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $postsDocument = Post::where('type_id', '3')->get();
        $postsVideo = Post::where('type_id', '2')->get();
        $postsArticle = Post::where('type_id', '1')->get();

        return view('front.pages.news.index', compact(['postsDocument', 'postsVideo', 'postsArticle']));
    }
}

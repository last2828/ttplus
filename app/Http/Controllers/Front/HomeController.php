<?php

namespace App\Http\Controllers\Front;

use App\Models\Blog\Post;

class HomeController extends BaseController
{
    public function index()
    {
      $posts = Post::limit(4)->get();
      return view('front.pages.home', compact('posts'));
    }
}

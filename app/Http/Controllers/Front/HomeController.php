<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      $posts = Post::limit(4)->get();
      return view('front.pages.home', compact('posts'));
    }
}

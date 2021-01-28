<?php

namespace App\Http\Controllers\Front\News;

use App\Http\Controllers\Front\BaseController;
use App\Models\Blog\Post;
use Illuminate\Http\Request;

class ArticleController extends BaseController
{
    public function index($slug)
    {
      $post = Post::where('slug', $slug)->first();

      $abovePost = Post::where('id', '>', $post->id)
        ->orderBy('id', 'asc')
        ->first();

      if(empty($abovePost))
      {
        $abovePost = Post::first();
      }

      $belowPost = Post::where('id', '<', $post->id)
        ->orderBy('id', 'desc')
        ->first();

      if(empty($belowPost))
      {
        $belowPost = Post::orderBy('id', 'desc')->first();
      }

      return view('front.pages.news.article', compact(['post', 'abovePost', 'belowPost']));
    }
}

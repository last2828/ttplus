<?php

namespace App\Http\Controllers\Front\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('front.pages.news.index');
    }
}

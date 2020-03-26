<?php

namespace App\Http\Controllers\admin\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.blog.blog');
    }

    public function add()
    {
        return view('admin.blog.create_article');
    }
}

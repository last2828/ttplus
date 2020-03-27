<?php

namespace App\Http\Controllers\admin\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function index()
    {
        return view('admin.blog.categories');
    }

    public function add()
    {
        return view('admin.blog.create-category');
    }
}

<?php

namespace App\Http\Controllers\admin\catalog;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAll()
    {
        return view('admin.category.categories');
    }

    public function add()
    {
        return view('admin.category.create_category');
    }
}

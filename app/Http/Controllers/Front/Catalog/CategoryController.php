<?php

namespace App\Http\Controllers\Front\Catalog;

use App\ProductGroup;
use App\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index($category)
    {
        $products = ProductCategory::where('slug', $category)->with('products')->get();
        return view('front.pages.catalog.category', compact('products'));
    }
    public function dunkermotoren()
    {
        return view('front.pages.catalog.category');
    }
    public function jianghai()
    {
        return view('front.pages.catalog.category');
    }
}

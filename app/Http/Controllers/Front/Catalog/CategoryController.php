<?php

namespace App\Http\Controllers\Front\Catalog;

use App\ProductGroup;
use App\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public $dunker = '';
    public $jianghai = '';

    public function __construct()
    {
        //Get tree of categories
        $this->dunker = ProductCategory::where('name', 'dunkermotoren')->with('children')->first();
        $this->jianghai = ProductCategory::where('name', 'jianghai')->with('children')->first();
    }

    public function index($category, $group = null)
    {
        $categories = ProductCategory::where('slug', $category)->with('group.product')->get();
        $dunker = $this->dunker;
        $jianghai = $this->jianghai;
        return view('front.pages.catalog.category', compact(['categories', 'dunker']));
    }
    public function dunkermotoren()
    {
        $dunker = $this->dunker;
        $jianghai = $this->jianghai;
        $categories = ProductCategory::where('name', 'dunkermotoren')->with('children.group.product.productAttribute.attribute')->first()['children'];
        return view('front.pages.catalog.category', compact(['dunker', 'jianghai', 'categories']));
    }
    public function jianghai()
    {
        $dunker = $this->dunker;
        $jianghai = $this->jianghai;
        return view('front.pages.catalog.category', compact(['dunker', 'jianghai']));
    }
}

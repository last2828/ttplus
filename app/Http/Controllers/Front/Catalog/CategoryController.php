<?php

namespace App\Http\Controllers\Front\Catalog;

use App\Http\Controllers\Front\BaseController;
use App\Models\Catalog\Product;
use App\Models\Catalog\ProductCategory;
use App\Models\Catalog\ProductGroup;
use Illuminate\Support\Facades\Route;

class CategoryController extends BaseController
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
        $dunker = $this->dunker;
        $jianghai = $this->jianghai;

        $categories = ProductCategory::where('slug', $category)->with(['parent', 'groups.products'])->get();
        $route = Route::currentRouteName();

        if ($group) {

            $group = ProductGroup::where('slug', $group)->first();
            $products = Product::where('group_id', $group['id'])->get();
            return view('front.pages.catalog.category', compact(['categories', 'dunker', 'jianghai', 'route', 'group', 'products']));

        }
      $category = ProductCategory::where('slug', $category)->first();
      $products = Product::where('category_id', $category->id)->get();

      return view('front.pages.catalog.category', compact(['categories', 'dunker', 'jianghai', 'route', 'products']));
    }

    public function dunkermotoren()
    {
        $dunker = $this->dunker;
        $jianghai = $this->jianghai;
        $categories = ProductCategory::where('name', 'dunkermotoren')->with('children.groups.products.attributes')->first();
        $route = Route::currentRouteName();
        return view('front.pages.catalog.category', compact(['dunker', 'jianghai', 'categories', 'route']));
    }

    public function jianghai()
    {
        $dunker = $this->dunker;
        $jianghai = $this->jianghai;
        $categories = ProductCategory::where('name', 'jianghai')->with('children.groups.products.attributes')->first();
        $route = Route::currentRouteName();
        return view('front.pages.catalog.category', compact(['dunker', 'jianghai', 'categories', 'route']));
    }
}

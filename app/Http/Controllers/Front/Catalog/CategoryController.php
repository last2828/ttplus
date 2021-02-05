<?php

namespace App\Http\Controllers\Front\Catalog;

use App\Http\Controllers\Front\BaseController;
use App\Models\Catalog\Product;
use App\Models\Catalog\ProductCategory;
use App\Models\Catalog\ProductGroup;
use App\Repositories\Catalog\ProductCategoryRepository;
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


    public function index(ProductCategoryRepository $productCategoryRepository, $category, $group = null)
    {
        $categoriesAside = $productCategoryRepository->getAllCategoriesForAside();

        if ($group) {
            $group = ProductGroup::where('slug', $group)->with(['category', 'products'])->first();
            return view('front.catalog.category', compact('categoriesAside', 'group'));
        }

        $category = ProductCategory::where('slug', $category)->with(['groups', 'products'])->first();
        return view('front.catalog.category', compact('categoriesAside', 'category'));

        $route = Route::currentRouteName();
    }

    public function dunkermotoren()
    {
        $categoriesAside = $productCategoryRepository->getAllCategoriesForAside();

        $categories = ProductCategory::where('name', 'dunkermotoren')->with('children.groups.products.attributes')->first();
        $route = Route::currentRouteName();
        return view('front.catalog.category', compact(['dunker', 'jianghai', 'categories', 'route']));
    }

    public function jianghai()
    {
        $categoriesAside = $productCategoryRepository->getAllCategoriesForAside();

        $categories = ProductCategory::where('name', 'jianghai')->with('children.groups.products.attributes')->first();
        $route = Route::currentRouteName();
        return view('front.catalog.category', compact(['dunker', 'jianghai', 'categories', 'route']));
    }
}

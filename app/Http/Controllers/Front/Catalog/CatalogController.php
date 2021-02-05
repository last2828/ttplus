<?php

namespace App\Http\Controllers\Front\Catalog;

use App\Http\Controllers\Front\BaseController;
use App\Models\Catalog\Product;
use App\Repositories\Catalog\ProductCategoryRepository;

class CatalogController extends BaseController
{
    /**
     * @param ProductCategoryRepository $productCategoryRepository
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ProductCategoryRepository $productCategoryRepository)
    {
        $dunkermotorenSubCategories = $productCategoryRepository
                                        ->getSubCategoriesByParentName('Dunkermotoren');

        $jianghaiSubCategories = $productCategoryRepository
                                        ->getSubCategoriesByParentName('Jianghai');

        return view('front.catalog.index',
            compact('dunkermotorenSubCategories', 'jianghaiSubCategories'));
    }

    public function dunker($category, $group, $product)
    {
        $product = Product::with(['group.category.parent', 'attributes'])->where('slug', $product)->first();
        $route = \Route::currentRouteName();

        return view('front.catalog.product', compact('product', 'route'));
    }

    public function jianghai($category, $product)
    {
        $product = Product::with(['category.parent', 'attributes'])->where('slug', $product)->first();
        $route = \Route::currentRouteName();

        return view('front.catalog.product', compact('product', 'route'));
    }
}

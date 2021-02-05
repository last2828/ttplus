<?php

namespace App\Http\Controllers\Front\Catalog;

use App\Http\Controllers\Front\BaseController;
use App\Repositories\Catalog\ProductCategoryRepository;
use App\Repositories\Catalog\ProductGroupRepository;
use App\Repositories\Catalog\ProductRepository;

class CatalogController extends BaseController
{
    /**
     * @var ProductCategoryRepository
     */
    private $productCategoryRepository;

    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * @var ProductGroupRepository
     */
    private $productGroupRepository;

    /**
     * CategoryController constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->productCategoryRepository = app(ProductCategoryRepository::class);
        $this->productRepository = app(ProductRepository::class);
        $this->productGroupRepository = app(ProductGroupRepository::class);
    }

    /**
     * Show catalog index page with categories three
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $dunkermotorenSubCategories = $this->productCategoryRepository
                                        ->getSubCategoriesByParentName('Dunkermotoren');

        $jianghaiSubCategories = $this->productCategoryRepository
                                        ->getSubCategoriesByParentName('Jianghai');

        return view('front.catalog.index',
            compact('dunkermotorenSubCategories', 'jianghaiSubCategories'));
    }

    /**
     * Get product by slug
     *
     * @param $productSlug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showProduct($productSlug)
    {
        $product = $this->productRepository->getOneBySlug($productSlug);

        return view('front.catalog.product', compact('product'));
    }

    /**
     * Show categories list by main category
     *
     * @param $categorySlug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function mainCategoryList($categorySlug)
    {
        $categoriesAside = $this->productCategoryRepository->getAllCategoriesForAside();
        $category = $this->productCategoryRepository->getOneMainBySlug($categorySlug);
        $subCategories = $category->children()->paginate(7);

        return view('front.catalog.maincategory', compact('categoriesAside', 'category', 'subCategories'));
    }

    /**
     * Show products list by sub category
     *
     * @param $categorySlug
     * @param null $groupSlug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function subCategoryList($categorySlug, $groupSlug = null)
    {
        $categoriesAside = $this->productCategoryRepository->getAllCategoriesForAside();

        if ($categoriesAside) {
            if ($groupSlug) {
                $group = $this->productGroupRepository->getOneSubBySlug($groupSlug);
                $products = $group->products()->paginate(7);

                if ($group and $products) {
                    return view('front.catalog.subcategory', compact('categoriesAside', 'group', 'products'));
                }

                return abort(404);
            }

            $category = $this->productCategoryRepository->getOneSubBySlug($categorySlug);
            $groups = $category->groups()->paginate(4);

            if ($category and $groups) {
                return view('front.catalog.subcategory', compact('categoriesAside', 'category', 'groups'));
            }

            return abort(404);
        }

        return abort(404);
    }
}

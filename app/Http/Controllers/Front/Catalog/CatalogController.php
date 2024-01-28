<?php

namespace App\Http\Controllers\Front\Catalog;

use App\Filters\ProductFilter;
use App\Models\Catalog\Product;
use App\Models\Catalog\ProductAttribute;
use App\Repositories\Catalog\ProductCategoryRepository;
use App\Repositories\Catalog\ProductGroupRepository;
use App\Repositories\Catalog\ProductRepository;
use App\Services\MetaTagsService;

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
     * CatalogController constructor.
     * @param MetaTagsService $meta
     */
    public function __construct(MetaTagsService $meta)
    {
        parent::__construct($meta);

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
        $tags = [
            'title' => 'Catalog Dunkermotoren и Jianghai',
            'keywords' => 'Catalog Dunkermotoren и Jianghai',
            'description' => 'Catalog Dunkermotoren и Jianghai'
        ];
        $meta = $this->meta->getMetaTags($tags['title'], $tags['keywords'], $tags['description']);

        $dunkermotorenSubCategories = $this->productCategoryRepository
                                        ->getSubCategoriesByParentName('Dunkermotoren');

        $jianghaiSubCategories = $this->productCategoryRepository
                                        ->getSubCategoriesByParentName('Jianghai');

        return view('front.catalog.index',
            compact('dunkermotorenSubCategories', 'jianghaiSubCategories', 'meta'));
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
        $meta = $this->meta->getMetaTags($product->meta_title, $product->meta_keywords, $product->meta_description);

        return view('front.catalog.product', compact('product', 'meta'));
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
        $meta = $this->meta->getMetaTags($category->meta_title, $category->meta_keywords, $category->meta_description);

        return view('front.catalog.maincategory',
            compact('categoriesAside', 'category', 'subCategories', 'meta'));
    }

    /**
     * Show products list by sub category
     *
     * @param $categorySlug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function subCategoryList($categorySlug, ProductFilter $filters)
    {
        $categoriesAside = $this->productCategoryRepository->getAllCategoriesForAside();
        $category = $this->productCategoryRepository->getOneSubBySlug($categorySlug);
        $groups = $category->groups()->paginate(4);
        $attributes = ProductAttribute::with('products')->take(5)->get();

        if ($filters->filters()) {
            $products = Product::filter($filters)->paginate(7);
        } else {
            $products = $category->products()->paginate(7);
        }

        $meta = $this->meta->getMetaTags($category->meta_title, $category->meta_keywords, $category->meta_description);

        return view('front.catalog.subcategory',
            compact('categoriesAside', 'category', 'groups', 'meta','attributes'));
    }

    /**
     * Show products list by sub group
     * @param ProductFilter $filters
     * @param $groupSlug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function subGroupList($groupSlug, ProductFilter $filters)
    {
        $categoriesAside = $this->productCategoryRepository->getAllCategoriesForAside();
        $group = $this->productGroupRepository->getOneSubBySlug($groupSlug);
        $attributes = ProductAttribute::with('products')->take(5)->get();

//        if ($filters->filters()) {
//            $products = Product::filter($filters)->paginate(7);
//        } else {
            $products = $group->products()->paginate(7);
//        }

        $meta = $this->meta->getMetaTags($group->meta_title, $group->meta_keywords, $group->meta_description);

        return view('front.catalog.subcategory',
                compact('categoriesAside', 'group', 'products', 'meta', 'attributes'));
    }

    /**
     * Фильтруем продукты по входящим параметрам
     *
     * @param ProductFilter $filters
     * @return mixed
     */
    public function filterProduct(ProductFilter $filters)
    {
        $result = Product::filter($filters)->get();
        dd($result);
        return $result;
    }
}

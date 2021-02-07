<?php

namespace App\Http\Controllers\Front\Catalog;

use App\Repositories\Catalog\ProductCategoryRepository;
use App\Repositories\Catalog\ProductGroupRepository;
use App\Repositories\Catalog\ProductRepository;
use Butschster\Head\Contracts\MetaTags\MetaInterface;

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
     * @param MetaInterface $meta
     */
    public function __construct(MetaInterface $meta)
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
        $meta = $this->meta->setTitle('Каталог Dunkermotoren и Jianghai')
                            ->setKeywords('Каталог Dunkermotoren и Jianghai')
                            ->setDescription('Каталог Dunkermotoren и Jianghai');

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

        $meta = $this->meta->setTitle($product->meta_title)
                            ->setKeywords($product->meta_keywords)
                            ->setDescription($product->meta_description);

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


        $meta = $this->meta->setTitle($category->meta_title)
                            ->setKeywords($category->meta_keywords)
                            ->setDescription($category->meta_description);

        return view('front.catalog.maincategory',
            compact('categoriesAside', 'category', 'subCategories', 'meta'));
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

                $meta = $this->meta->setTitle($group->meta_title)
                                    ->setKeywords($group->meta_keywords)
                                    ->setDescription($group->meta_description);

                if ($group and $products) {
                    return view('front.catalog.subcategory',
                        compact('categoriesAside', 'group', 'products', 'meta'));
                }

                return abort(404);
            }

            $category = $this->productCategoryRepository->getOneSubBySlug($categorySlug);
            $groups = $category->groups()->paginate(4);

            $meta = $this->meta->setTitle($category->meta_title)
                                ->setKeywords($category->meta_keywords)
                                ->setDescription($category->meta_description);

            if ($category and $groups) {
                return view('front.catalog.subcategory',
                    compact('categoriesAside', 'category', 'groups', 'meta'));
            }

            return abort(404);
        }

        return abort(404);
    }
}

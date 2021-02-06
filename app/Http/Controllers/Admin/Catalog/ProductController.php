<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Models\Catalog\Product;
use App\Http\Requests\Catalog\ProductStoreRequest;
use App\Http\Requests\Catalog\ProductUpdateRequest;
use App\Models\Catalog\ProductAttribute;
use App\Repositories\Catalog\ProductAttributeRepository;
use App\Repositories\Catalog\ProductCategoryRepository;
use App\Repositories\Catalog\ProductGroupRepository;
use App\Repositories\Catalog\ProductRepository;
use Illuminate\Support\Facades\Route;

class ProductController extends BaseController
{
    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * @var ProductCategoryRepository
     */
    private $productCategoryRepository;

    /**
     * @var ProductGroupRepository
     */
    private $productGroupRepository;

    /**
     * @var ProductAttributeRepository
     */
    private $productAttributeRepository;

    /**
     * ProductController constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->productRepository = app(ProductRepository::class);
        $this->productCategoryRepository = app(ProductCategoryRepository::class);
        $this->productGroupRepository = app(ProductGroupRepository::class);
        $this->productAttributeRepository = app(ProductAttributeRepository::class);
    }

    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = $this->productRepository->getAllCatalogForAdmin();

        return view('admin.catalog.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        // Получаем нужные параметры для создания нового продукта
        $selectGroups = $this->productGroupRepository->getAllForSelect();
        $selectCategories = $this->productCategoryRepository->getAllForSelect();
        $selectAttributes = $this->productAttributeRepository->getAllForSelect();

        return view('admin.catalog.products.create',
            compact('selectGroups', 'selectCategories', 'selectAttributes'));
    }

    /**
     * Store a newly created product in storage.
     *
     * @param  ProductStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductStoreRequest $request)
    {
        $fields = $request->toArray();
        Product::storeProduct($fields);

        return redirect()->route('admin.catalog.products.index');
    }

    /**
     * Show the form for editing the product.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $product = $this->productRepository->getEditByIdForAdmin($id);

        // Получаем нужные параметры для обновления продукта
        $selectGroups = $this->productGroupRepository->getAllForSelect();
        $selectCategories = $this->productCategoryRepository->getAllForSelect();
        $selectAttributes = $this->productAttributeRepository->getAllForSelect();

        return view('admin.catalog.products.edit',
            compact('product', 'selectGroups', 'selectCategories', 'selectAttributes'));
    }

    /**
     * Update the product in storage.
     *
     * @param  ProductUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProductUpdateRequest $request, $id)
    {
        $fields = $request->toArray();
        Product::updateProduct($fields, $id);

        return redirect()->route('admin.catalog.products.index');
    }

    /**
     * Remove the product from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Product::deleteProduct($id);

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Requests\Catalog\ProductCategoryStoreRequest;
use App\Http\Requests\Catalog\ProductCategoryUpdateRequest;
use App\Models\Catalog\ProductCategory;
use App\Repositories\Catalog\ProductCategoryRepository;

class CategoryController extends BaseController
{
    /**
     * @var ProductCategoryRepository
     */
    private $productCategoryRepository;

    /**
     * CategoryController constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->productCategoryRepository = app(ProductCategoryRepository::class);
    }

    /**
     * Display a listing of the product categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->productCategoryRepository->getAllForAdminList();

        return view('admin.catalog.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new product category.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selectCategories = $this->productCategoryRepository->getAllForSelect();;

        return view('admin.catalog.categories.create', compact('selectCategories'));
    }

    /**
     * Store a newly created product category in storage.
     *
     * @param  ProductCategoryStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductCategoryStoreRequest $request)
    {
        $fields = $request->toArray();
        ProductCategory::create($fields);

        return redirect()->route('admin.catalog.product_categories.index');
    }

    /**
     * Show the form for editing the specified product category.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $selectCategories = $this->productCategoryRepository->getAllForSelect();
        $category = $this->productCategoryRepository->getEditByIdForAdmin($id);

        return view('admin.catalog.categories.edit', compact('category', 'selectCategories'));
    }

    /**
     * Update the specified product category in storage.
     *
     * @param  ProductCategoryUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProductCategoryUpdateRequest $request, $id)
    {
        $fields = $request->toArray();
        ProductCategory::find($id)->update($fields);

        return redirect()->route('admin.catalog.product_categories.index');
    }

    /**
     * Remove the specified product category from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        ProductCategory::destroy($id);

        return redirect()->back();
    }
}
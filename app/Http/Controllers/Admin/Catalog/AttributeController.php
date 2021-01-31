<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Requests\Catalog\ProductAttributeRequest;
use App\Models\Catalog\ProductAttribute;
use App\Repositories\Catalog\ProductAttributeRepository;

class AttributeController extends BaseController
{
    /**
     * @var ProductAttributeRepository
     */
    private $productAttributeRepository;

    /**
     * AttributeController constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->productAttributeRepository = app(ProductAttributeRepository::class);
    }

    /**
     * Display a listing of the product attributes.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $attributes = $this->productAttributeRepository->getAllForAdminList();

        return view('admin.catalog.attributes.index', compact('attributes'));
    }

    /**
     * Show the form for creating a new product attribute.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.catalog.attributes.create');
    }

    /**
     * Store a newly created product attribute in storage.
     *
     * @param  ProductAttributeRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductAttributeRequest $request)
    {
        $request->validated();
        $fields = $request->toArray();
        ProductAttribute::create($fields);

        return redirect()->route('admin.catalog.attributes.index');
    }

    /**
     * Show the form for editing the specified product attribute.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $attribute = $this->productAttributeRepository->getEditByIdForAdmin($id);

        return view('admin.catalog.attributes.edit', compact('attribute'));
    }

    /**
     * Update the specified product attribute in storage.
     *
     * @param  ProductAttributeRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProductAttributeRequest $request, $id)
    {
        $fields = $request->toArray();
        ProductAttribute::find($id)->update($fields);

        return redirect()->route('admin.catalog.attributes.index');
    }

    /**
     * Remove the specified product attribute from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        ProductAttribute::deleteAttribute($id);

        return redirect()->back();
    }
}

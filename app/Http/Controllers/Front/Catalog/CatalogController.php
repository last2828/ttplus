<?php

namespace App\Http\Controllers\Front\Catalog;

use App\Http\Controllers\Front\BaseController;
use App\Models\Catalog\ProductCategory;
use Illuminate\Http\Request;

class CatalogController extends BaseController
{
    public function index()
    {
        $dunkermotoren = ProductCategory::where('name', 'Dunkermotoren')->with('children')->first()->toArray()['children'];
        $jianghai = ProductCategory::where('name', 'Jianghai')->with('children')->first()->toArray()['children'];
        return view('front.pages.catalog.index', compact(['dunkermotoren', 'jianghai']));
    }
}

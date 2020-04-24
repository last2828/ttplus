<?php

namespace App\Http\Controllers\Front\Catalog;

use App\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatalogController extends Controller
{
    public function index()
    {
        $dunkermotoren = ProductCategory::where('parent_id', 1)->get()->toArray();
        return view('front.pages.catalog.index', compact('dunkermotoren'));
    }
}

<?php

namespace App\Http\Controllers\Front\Catalog;

use App\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatalogController extends Controller
{
    public function index()
    {
        $dunkermotoren = ProductCategory::where('name', 'Dunkermotoren')->with('children')->first()->toArray()['children'];
        $jianghai = ProductCategory::where('name', 'Jianghai')->with('children')->first()->toArray()['children'];
        return view('front.pages.catalog.index', compact(['dunkermotoren', 'jianghai']));
    }
}

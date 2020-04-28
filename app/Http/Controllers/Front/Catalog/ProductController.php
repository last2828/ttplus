<?php

namespace App\Http\Controllers\Front\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($product)
    {
        return view('front.pages.catalog.product');
    }
}

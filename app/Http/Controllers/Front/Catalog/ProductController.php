<?php

namespace App\Http\Controllers\Front\Catalog;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($category, $group, $product)
    {
      $product = Product::with(['group.category', 'attributes'])->where('slug', $product)->first();

      return view('front.pages.catalog.product', compact('product'));
    }
}

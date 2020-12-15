<?php

namespace App\Http\Controllers\Front\Catalog;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ProductController extends Controller
{
  public function dunker($category, $group, $product)
  {
    $product = Product::with(['group.category.parent', 'attributes'])->where('slug', $product)->first();
    $route = Route::currentRouteName();

    return view('front.pages.catalog.product', compact(['product', 'route']));
  }

  public function jianghai($category, $product)
  {
    $product = Product::with(['category.parent', 'attributes'])->where('slug', $product)->first();
    $route = Route::currentRouteName();

    return view('front.pages.catalog.product', compact(['product', 'route']));
  }
}

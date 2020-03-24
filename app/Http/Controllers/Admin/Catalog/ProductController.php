<?php

namespace App\Http\Controllers\admin\catalog;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAll()
    {
        return view('admin.product.catalog', ['products' => Product::all()]);
    }

    public function create()
    {
        return view('admin.product.create_product');
    }
}

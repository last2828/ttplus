<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index()
    {
      dd('23');
        return view('form',
            ['categories' => Category::all()
        ]);
    }

    public static function add(Request $require)
    {
        $fields = $require->toArray();
        Product::add($fields);
        return view('form',['categories' => Category::all()
        ]);
    }
}

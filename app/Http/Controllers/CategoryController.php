<?php

namespace App\Http\Controllers;

use Category;
use App\NestedSetModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return view('form_cat',
            ['categories' => NestedSetModel::all()
        ]);
    }

    public static function add(Request $require)
    {
        $fields = $require->toArray();
        NestedSetModel::add($fields);
    }
}

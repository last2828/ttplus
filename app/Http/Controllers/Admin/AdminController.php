<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class AdminController extends BaseController
{
    public static function index()
    {
        return redirect()->route('admin.catalog.products.index');
    }
}



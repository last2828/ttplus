<?php

namespace App\Http\Controllers\Front\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        return view('front.pages.catalog.index');
    }
}
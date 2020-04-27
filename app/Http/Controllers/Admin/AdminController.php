<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use function Composer\Autoload\includeFile;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public static function index()
    {
        return redirect()->route('products.index');
//        return view('vendor/unisharp/laravel-filemanager/src/views/demo');
        // return PartialView('../vendor/unisharp/laravel-filemanager/src/views/demo');
    }
}

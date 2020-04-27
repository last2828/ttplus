<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use function Composer\Autoload\includeFile;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public static function index()
    {
        return view('admin.dashboard');
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\PageField;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        return view('front.pages.about', [
            'about' => PageField::where('key', 'about')->first(),
        ]);
    }
    public function style()
    {
        return PageField::where('key', 'about_css')->first()['value'];
    }
}

<?php

namespace App\Http\Controllers\Front\InfoPages;

use App\Http\Controllers\Front\BaseController;
use App\Models\PageField;
use Illuminate\Http\Request;

class AboutController extends BaseController
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

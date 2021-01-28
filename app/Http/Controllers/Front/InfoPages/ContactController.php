<?php

namespace App\Http\Controllers\Front\InfoPages;

use App\Http\Controllers\Front\BaseController;
use App\Models\PageField;
use Illuminate\Http\Request;

class ContactController extends BaseController
{
    public function index()
    {
        return view('front.pages.contact', ['contact' => PageField::where('key', 'contact')->first()]);
    }
}

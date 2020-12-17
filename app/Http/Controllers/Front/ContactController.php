<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\PageField;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('front.pages.contact', ['contact' => PageField::where('key', 'contact')->first()]);
    }
}

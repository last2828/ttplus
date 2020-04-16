<?php

namespace App\Http\Controllers\Admin;

use App\PageField;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        return view('admin.pages.about.index', [
            'html' => PageField::where('key', 'about_html')->first(),
            'css' => PageField::where('key', 'about_css')->first()
        ]);
    }
    public function update(Request $request)
    {
        $fields = $request->all();

        PageField::where('key', 'about_html')->update([
            'value' => $fields['html']
        ]);
        PageField::where('key', 'about_css')->update([
            'value' => $fields['css']
        ]);
        return redirect()->route('about.index');
    }
}

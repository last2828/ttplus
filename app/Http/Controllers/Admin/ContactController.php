<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\PageField;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
      return view('admin.pages.contact', [
        'contact' => PageField::where('key', 'contact')->first()
      ]);
    }

  public function update(Request $request)
  {

    $fields = $request->except(['_token', '_method']);

    PageField::where('key', 'contact')->update($fields);

    return redirect()->route('contact.index');
  }
}

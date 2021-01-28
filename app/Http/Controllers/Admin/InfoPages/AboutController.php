<?php

namespace App\Http\Controllers\Admin\InfoPages;

use App\Models\PageField;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('admin.pages.about', [
            'about' => PageField::where('key', 'about')->first()
        ]);
    }

    public function update(Request $request)
    {
        $fields = $request->except(['_token', '_method']);


          if (empty($fields['awards'])) {
            $fields['awards'] = [
              ['image' => null]
            ];
          }

          if (empty($fields['licenses'])) {
            $fields['licenses'] = [
              ['image' => null]
            ];
          }

          if (empty($fields['shows'])) {
            $fields['shows'] = [
              ['image' => null]
            ];
          }

        PageField::where('key', 'about')->update($fields);

        return redirect()->route('about.index');
    }
}

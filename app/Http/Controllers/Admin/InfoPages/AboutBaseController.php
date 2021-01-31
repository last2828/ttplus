<?php

namespace App\Http\Controllers\Admin\InfoPages;

use App\Models\PageField;
use Illuminate\Http\Request;

class AboutBaseController extends BaseController
{
    /**
     * Show the form for editing content for about page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.pages.about', [
            'about' => PageField::where('key', 'about')->first()
        ]);
    }

    /**
     * Update about page in storage
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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

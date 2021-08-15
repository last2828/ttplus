<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageField;
use Illuminate\Http\Request;

class PageController extends BaseController
{
    /**
     * @param $key
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($key)
    {
        $page = PageField::where('key', $key)->first();

        return view('admin.pages.' . $key, compact('page'));
    }

    /**
     * @param Request $request
     * @param $key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $key)
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

        PageField::where('key', $key)->update($fields);

        return redirect()->route('admin.info_pages.index', $key);
    }
}

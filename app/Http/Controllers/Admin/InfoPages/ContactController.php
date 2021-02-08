<?php

namespace App\Http\Controllers\Admin\InfoPages;

use App\Models\PageField;
use Illuminate\Http\Request;

class ContactController extends BaseController
{
    /**
     * Show the form for editing content for contact page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $page = PageField::where('key', 'contact')->first();

        return view('admin.pages.contact', compact('page'));
    }

    /**
     * Update contact page in storage
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $fields = $request->except(['_token', '_method']);

        PageField::where('key', 'contact')->update($fields);

        return redirect()->route('admin.info_pages.contact.index');
    }
}

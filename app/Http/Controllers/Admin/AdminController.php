<?php

namespace App\Http\Controllers\Admin;

class AdminController extends BaseController
{
    /**
     * Redirect to catalog of products in admin panel
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public static function index()
    {
        return redirect()->route('admin.catalog.products.index');
    }
}



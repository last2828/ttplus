<?php

namespace App\Http\Controllers\admin\catalog;

use App\Attribute;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    public function getAll()
    {
        return view('admin.attribute.attributes');
    }

    public function add()
    {
        return view('admin.attribute.create_attribute');
    }
}

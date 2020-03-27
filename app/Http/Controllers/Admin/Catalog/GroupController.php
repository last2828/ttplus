<?php

namespace App\Http\Controllers\admin\catalog;

use App\Group;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function getAll()
    {
        return view('admin.group.groups');
    }

    public function add()
    {
        return view('admin.group.create-group');
    }
}

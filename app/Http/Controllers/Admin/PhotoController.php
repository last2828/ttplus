<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        $files = Storage::disk('public')->files('uploads');
        $newFiles = [];
        foreach ($files as $file) {
            array_push($newFiles, Storage::url($file));
        }
        return $newFiles;
    }
    public function upload(Request $request)
    {
        $name = $request->file('file')->getClientOriginalName();
        $pathName = $request->file('file')->storeAs('uploads', $name);
        return Storage::url($pathName);
    }
    public function delete($id)
    {
        Storage::disk('public')->delete('/uploads/' . $id);
    }
}

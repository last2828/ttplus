<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use function Composer\Autoload\includeFile;
use Illuminate\Http\Request;

class PhotoController extends BaseController
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

    public static function manager()
    {
        return view('admin.file-manager');
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ImageUploadRequest;
use Illuminate\Support\Facades\Storage;
use function Composer\Autoload\includeFile;

class ImageController extends BaseController
{
    /**
     * @return array
     */
    public function index()
    {
        $files = Storage::disk('public')->files('uploads');
        $newFiles = [];
        foreach ($files as $file) {
            array_push($newFiles, Storage::url($file));
        }
        return $newFiles;
    }

    /**
     * Upload new image file in storage
     *
     * @param ImageUploadRequest $request
     * @return string
     */
    public function upload(ImageUploadRequest $request)
    {
        $name = $request->file('file')->getClientOriginalName();
        $pathName = $request->file('file')->storeAs('uploads', $name);
        $pathToFile = Storage::url($pathName);

        return $pathToFile;
    }

    /**
     * Delete file from storage
     *
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        $result = Storage::disk('public')->delete('/uploads/' . $id);

        return $result;
    }

    /**
     * Show file-manager view for working with media files system
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function manager()
    {
        return view('admin.file-manager');
    }

}

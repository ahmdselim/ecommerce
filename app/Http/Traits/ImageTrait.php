<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\File;

trait ImageTrait
{
    protected function uploadImage($image, $path, $oldImage = null)
    {
        if (isset($image)) {
            $this->removeImage($oldImage);
            $newImageName = time() . '_' . $image->hashName();
            $image->move($path, $newImageName);

            return $newImageName;
        }
        return $oldImage;
    }


    protected function removeImage($path)
    {
        if (isset($path) && File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }
}

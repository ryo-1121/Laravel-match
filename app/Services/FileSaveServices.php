<?php

namespace App\Services;

use Intervention\Image\Facades\Image;

class FileSaveServices
{
  public static function fileSave($imageFile, $user, $i)
  {
    $list = FileUploadServices::fileUpload($imageFile);
    list($extension, $fileNameToStore, $fileData) = $list;

    $data_url = CheckExtensionServices::checkExtension($fileData, $extension);
    $image = Image::make($data_url);
    $image->resize(400, 400)->save(storage_path() . '/app/public/images/' . $fileNameToStore);

    $img_name = 'img_name'.$i;
    $user->$img_name = $fileNameToStore;
  }
}
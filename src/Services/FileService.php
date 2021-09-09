<?php

namespace Baxruzismailov\Filemanager\Services;

class FileService
{

    public static function  fileSize($patUrl)
    {

        $bytes = filesize(public_path($patUrl));

        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        else
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }

        return $bytes;
    }

    public static function fileExtension($fileUrl)
    {
        $fileExtension = pathinfo($fileUrl, PATHINFO_EXTENSION);
        $fileName = public_path('vendor/file-manager-bi/images/extensions/'.$fileExtension.'.png');
        $name = '';
        if(file_exists($fileName)){
            $name = asset('vendor/file-manager-bi/images/extensions/'.$fileExtension.'.png');
        }else{
            $name = asset('vendor/file-manager-bi/images/extensions/file.png');
        }

        return $name;
    }

    public static function imageSize($fileUrl)
    {
        $filepath  = public_path($fileUrl);
        $imageSize = list($width, $height) = getimagesize($filepath);
        return $imageSize;
    }

}

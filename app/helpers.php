<?php

use Illuminate\Support\Facades\File;

if (!function_exists('imageConvert')) {

    function imageConvert($url, $fileName, $extension)
    {
        if ($extension == 'png') {
            $im = imagecreatefrompng($url . $fileName);
            imagepalettetotruecolor($im);
            imagealphablending($im, true);
            imagesavealpha($im, true);
            imagewebp($im, $url . $fileName . '.webp', 30);
            File::delete($url . $fileName);

        } else {
            $im = imagecreatefromjpeg($url . $fileName);
            imagewebp($im, $url . $fileName . '.webp', 30);
            File::delete($url . $fileName);
        }
    }

}

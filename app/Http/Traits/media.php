<?php

namespace App\Http\Traits;

use function PHPUnit\Framework\fileExists;
use  Image;
trait media
{

    public function uploadMedia($image, $path, $h, $w)
    {
        $classifiedImg = $image;
        $filename = time() . rand(1, 200) . '.webp';
        $image = Image::make($classifiedImg)->encode('webp', 90)->resize($h, $w)->save(public_path($path  . $filename));
        return $filename;
    }
    public function deleteMedia($oldImageProduct, $path)
    {
        $oldImage = public_path("images//$path//" . $oldImageProduct);
        if (file_exists($oldImage)) {
            unlink($oldImage);
        }
    }

    public function uploadManyMedia($image, $path, $count, $h, $w)
    {
        $classifiedImg = $image;
        $filename = time() . rand(1, 200) . $count . '.webp';
        $image = Image::make($classifiedImg)->encode('webp', 90)->resize($h, $w)->save(public_path($path  . $filename));
        return $filename;
    }

    public function uploadfiles($file, $path)
    {

        $fileName = time() .  '.' . $file->extension();
        $file->move(public_path('pdfs//' . $path), $fileName);
        return $fileName;
    }
    
}

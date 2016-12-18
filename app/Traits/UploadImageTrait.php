<?php
namespace App\Traits;

use App\Model\ST_Product_Images;
use Image;

trait UploadImageTrait {

  public function uploadTraits($request, $type)
  {
    switch($type)
    {
      case 'product' :
        $path   = 'images/products/';
        $width  = 620;
        $height = 260;
        break;
      case 'variant' :
        $path   = 'images/variant/';
        $width  = 60;
        $height = 60;
        break;
    }

    $imageName = $type . '-' . rand(1, 900) . time() . '.jpg';
    Image::make($request->file('pic'))->resize($width, $height)->save($path . $imageName);

    if($type == 'product')
      (new ST_Product_Images)->createImages($imageName, $request->input('keyGenerate'));
    elseif($type == 'variant')
      session()->put(['variantImage' => $imageName]);

    return json_encode(['status' => 'File was uploaded successfuly!']);
  }

}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ST_Product_Images extends Model
{
  protected $dates = ['deleted_at'];
  protected $table = 'st_product_images';
  protected $fillable = ['image', 'fk_pd_id', 'fk_pd_code'];

  public function createImages($images, $product_code)
  {
    ST_Product_Images::create([
      'image'      => $images,
      'fk_pd_code' => $product_code,
    ]);
  }

  public static function getImage($pid)
  {
    return ST_Product_Images::where('fk_pd_id', $pid)->limit(1)->get(['image'])->toArray();
  }
}

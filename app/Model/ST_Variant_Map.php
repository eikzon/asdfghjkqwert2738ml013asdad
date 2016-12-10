<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ST_Variant_Map extends Model
{
  protected $table    = 'st_variant_map';
  protected $fillable = ['fk_vr_id', 'fk_pd_id'];

  // public function index(int $id)
  // {
  //   $variantsProduct = ST_Variant_Map::where('fk_product_id', $id);
  //   return $variantsProduct->toArray();
  // }
}

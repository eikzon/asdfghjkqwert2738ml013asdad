<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\ST_Product_Images;
use App\Model\ST_Variant_Map;

class ST_Product extends Model
{
  use SoftDeletes;

  protected $dates    = ['deleted_at'];
  protected $table    = 'st_product';
  protected $fillable = ['pd_code', 'pd_name', 'pd_short_desc', 'pd_long_desc', 'pd_price', 'pd_discount', 'pd_price_discount', 'pd_badge', 'pd_status', 'pd_stock', 'fk_group_id'];

  public $count = 0;

  private $prefix = 'pd_';

  public function index($conditions = [])
  {
    if(!empty($conditions['status']))
      $products = ST_Product::where('pd_status', 1)->orwhere('pd_status', 2)->get();
    else
      $products = ST_Product::all();

    $this->count = $products->count();
    return $products->toArray();
  }

  public function store($request)
  {
    $result = ST_Product::create([
      'pd_code'           => $request->input('code'),
      'pd_name'           => $request->input('name'),
      'pd_short_desc'     => $request->input('short_desc'),
      'pd_long_desc'      => $request->input('long_desc'),
      'pd_price'          => $request->input('price'),
      'pd_discount'       => $request->input('discount'),
      'pd_price_discount' => $request->input('price_discount'),
      'pd_badge'          => $request->input('badge'),
      'pd_status'         => $request->input('status'),
      'pd_stock'          => $request->input('stock'),
      'fk_group_id'       => $request->input('group')
    ]);

    if($request->has('variant.*') && $result)
    {
      foreach($request->input('variant.*') as $variant)
      {
        ST_Variant_Map::create([
          'fk_vr_id' => $variant,
          'fk_pd_id' => $result->id,
        ]);
      }
    }

    return $result;
  }

  public static function show(int $id)
  {
    $resultProduct = self::find($id);
    if(!empty($resultProduct))
      return $resultProduct->toArray();

    return false;
  }

  public function edit(int $id_product)
  {
    $product = ST_Product::where('id', $id_product)->first();

    if(empty($product))
      return false;

    $variantsMap       = ST_Variant_Map::all()->where('fk_pd_id', $id_product);
    $variantsMapResult = !empty($variantsMap) ? $variantsMap->toArray() : NULL;

    return ['product'     => $product->toArray(),
            'variantsMap' => $variantsMapResult];
  }

  public function updatePD($request)
  {
    $product = ST_Product::find($request->input('id'));
    $result  = $this->conditionSQL($product, $request);

    if($request->has('variant.*') && $result)
    {
      $variantsMap = ST_Variant_Map::where('fk_pd_id', $request->input('id'))->get();
      if(!empty($variantsMap))
        foreach($variantsMap as $variant)
          ST_Variant_Map::destroy($variant['id']);

      foreach($request->input('variant.*') as $variant)
      {
        ST_Variant_Map::create([
          'fk_vr_id' => $variant,
          'fk_pd_id' => $request->input('id'),
        ]);
      }
    }

    if($result)
      return true;

    return false;
  }

  private function conditionSQL($product, $request)
  {
    $product->pd_name           = $request->input('name');
    $product->pd_short_desc     = $request->input('short_desc');
    $product->pd_long_desc      = $request->input('long_desc');
    $product->pd_price          = $request->input('price');
    $product->pd_discount       = $request->input('discount');
    $product->pd_price_discount = $request->input('price_discount');
    $product->pd_badge          = $request->input('badge');
    $product->pd_status         = $request->input('status');
    $product->pd_stock          = $request->input('stock');
    $product->fk_group_id       = $request->input('group');
    $updateProduct              = $product->save();

    return true;
    // $updateImages  = ST_Product_Images::sequence($request->input('image[]'), $request->input('id'));
    // $updateVariant = ST_Variant_Map::sequence($request->input('variant[]'), $request->input('id'));
    // foreach($request->input('variant[]') as $variant)
    //   $variant->
    // return ($updateVariant === true && $updateProduct === true);
  }

  public function count()
  {
    return $this->count;
  }

  // public function variants()
  // {
  //   return $this->hasMany(ST_Variant_Map::class, 'fk_pd_id');
  // }
}

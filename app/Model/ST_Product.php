<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\ST_Product_Images;
use App\Model\ST_Variant_Map;

class ST_Product extends Model
{
  use SoftDeletes;

  public $memberId = [];

  protected $dates    = ['deleted_at'];
  protected $table    = 'st_product';
  protected $fillable = ['pd_code', 'pd_name', 'pd_short_desc', 'pd_long_desc', 'pd_price', 'pd_discount', 'pd_price_discount', 'pd_badge', 'pd_status', 'pd_stock', 'fk_group_id', 'fk_category_id'];

  public function index($conditions = [])
  {
    $perPage = !empty($conditions['perPage']) ? $conditions['perPage'] : NULL;

    if(!empty($conditions['status']))
    {
      $products = ST_Product::with('images')->with('sku')->where('pd_status', 1)->orwhere('pd_status', 2)->orderBy('id', 'desc');
      if($perPage)
        $products = $products->paginate($perPage);
      else
        $products = $products->get();
    }
    else
      $products = ST_Product::with('images')->orderBy('id', 'desc')->paginate($perPage);

    return $products;
  }

  public function outOfStock()
  {
    return ST_Product::with('images')
                      ->where([['pd_stock', '<', 50], ['pd_status', '>', 0]])
                      ->orderBy('id', 'desc')
                      ->get();
  }

  public function relatedItems($id)
  {
    $products = ST_Product::with('images')
                  ->with('sku')
                  ->where('id', '!=', $id)
                  ->where('pd_status', 1)
                  ->orwhere('pd_status', 2)
                  ->get();

    return $products;
  }

  public function store($request, $images = [])
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
      'fk_group_id'       => $request->input('group'),
      'fk_category_id'    => $request->input('category')
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

    $this->updateIdImages($request->input('code'), $result->id);

    return $result;
  }

  public function show($id)
  {
    $resultProduct = self::with('images')->with('sku')->find($id);

    if(!empty($resultProduct))
      return $resultProduct->toArray();

    return false;
  }

  public function edit($id_product)
  {
    $product = ST_Product::with('images')->find($id_product);

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

    $this->updateIdImages($request->input('code'), $request->input('id'));

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

  public function updateIdImages($code, $id)
  {
    ST_Product_Images::where('fk_pd_code', $code)->update(['fk_pd_id' => $id]);
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
    $product->fk_category_id    = $request->input('category');
    $updateProduct              = $product->save();

    if($updateProduct)
      return true;

    return false;
  }

  public function list($categoryId)
  {
    $products = ST_Product::with('images')
                  ->with('sku')
                  ->where([
                      ['fk_category_id', '=', $categoryId],
                      ['pd_status', '>', 0]
                    ])
                  ->orderBy('id', 'desc')
                  ->get();
    return $products;
  }

  public function variants()
  {
    return $this->hasMany(ST_Variant_Map::class, 'fk_pd_id', '');
  }

  public function images()
  {
    return $this->hasMany(ST_Product_Images::class, 'fk_pd_id');
  }

  public function sku()
  {
    return $this->hasOne(ST_Product_Group::class, 'id', 'fk_group_id');
  }
}

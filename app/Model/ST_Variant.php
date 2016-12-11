<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ST_Variant extends Model
{
  protected $table    = 'st_variant';
  protected $fillable = ['vr_name', 'vr_text', 'vr_type'];

  public $count = 0;

  public function index()
  {
    return ST_Variant::orderBy('id', 'desc')->paginate(config('website.common.perPage.siteControl'));
  }

  public function getType()
  {
    $variantsResult = ST_Variant::all();
    if(!empty($variantsResult))
    {
      $results['text']   = $variantsResult->where('vr_type', 1);
      $results['images'] = $variantsResult->where('vr_type', 2);
    }
    else
    {
      $results['images'] = [];
      $results['text']   = [];
    }

    return $results;
  }

  public function store($request)
  {
    $result = ST_Variant::create([
      'vr_name' => $request->input('name'),
      'vr_text' => $request->input('text'),
      'vr_type' => $request->input('type')
    ]);

    return $result;
  }

  public function edit($id_product)
  {
    $variant = ST_Variant::where('id', $id_product)->first();

    if(empty($variant))
      return false;

    return ['variant' => $variant];
  }

  public function updateVariant($request)
  {
    $variant = ST_Variant::find($request->input('id'));
    $result  = $this->conditionSQL($variant, $request);

    if($result)
      return true;

    return false;
  }

  private function conditionSQL($variant, $request)
  {
    $variant->vr_name = $request->input('name');
    $variant->vr_text = $request->input('text');
    $variant->vr_type = $request->input('type');
    $updateVariant    = $variant->save();

    if($updateVariant)
      return true;

    return false;
  }
}

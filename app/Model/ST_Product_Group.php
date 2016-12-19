<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\ST_Product;
use App\Model\ST_Variant;
use App\Model\ST_Variant_Map;

class ST_Product_Group extends Model
{
  protected $table    = 'st_product_group';
  protected $fillable = ['pg_name', 'pg_status', 'pg_display_id'];

  public $count = 0;

  public function index($conditions = [])
  {
    $perPage = !empty($conditions['perPage']) ? $conditions['perPage'] : 0;

    if(!empty($conditions['status']))
      $groups = ST_Product_Group::where('pg_status', 1)->orderBy('id', 'desc')->get();
    else
      $groups = ST_Product_Group::orderBy('id', 'desc')->paginate($perPage);

    return $groups;
  }


  public function productList(array $condition = [])
  {
    $productLists = (new ST_Product)->index($condition);
    if(!empty($productLists))
      return $productLists;

    return [];
  }

  public function store($request)
  {
    $result = ST_Product_Group::create([
      'pg_name'   => $request->input('name'),
      'pg_status' => $request->input('status')
    ]);

    return $result;
  }

  public function edit($id_product)
  {
    $group = ST_Product_Group::where('id', $id_product)->first();

    if(empty($group))
      return false;

    return ['group' => $group];
  }

  public function updateVariant($request)
  {
    $group = ST_Product_Group::find($request->input('id'));
    $result  = $this->conditionSQL($group, $request);

    if($result)
      return true;

    return false;
  }

  private function conditionSQL($group, $request)
  {
    $group->pg_name   = $request->input('name');
    $group->pg_status = $request->input('status');
    $updateGroup      = $group->save();

    if($updateGroup)
      return true;

    return false;
  }

  public function variantsOption($groupId)
  {
    $result = self::with(['products' => function ($query){
      $query->join('st_variant_map', 'fk_pd_id', '=', 'st_product.id')
            ->join('st_variant', 'st_variant.id', '=', 'fk_vr_id')
            ->where('vr_type', 1);
    }])->where('st_product_group.id', $groupId)
       ->get()->toArray();

    return $result;
  }

  public function products()
  {
    return $this->hasMany(ST_Product::class, 'fk_group_id');
  }

  public function variantsMap()
  {
    return $this->hasOne(ST_Variant_Map::class, 'fk_pd_id');
  }

  public function variantsMaps()
  {
    return $this->hasManyThrough(
            ST_Variant_Map::class, ST_Product::class,
            'id', 'fk_pd_id', 'st_product_group.id'
           );
     // return $this->hasManyThrough(
     //        ST_Variant::class, ST_Variant_Map::class, ST_Product::class,
     //        'st_variant.id', 'fk_pd_id', 'st_product.id', 'st_product_group.id'
     //       );
  }
}

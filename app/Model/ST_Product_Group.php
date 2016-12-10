<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\ST_Product;

class ST_Product_Group extends Model
{
  protected $table    = 'st_product_group';
  protected $fillable = ['pg_name', 'pg_status', 'pg_display_id'];

  public $count = 0;

  public function index($conditions = [])
  {
    $perPage = !empty($conditions['perPage']) ? $conditions['perPage'] : '';

    if(!empty($conditions['status']))
      $groups = ST_Product_Group::where('pg_status', 1)->orderBy('id', 'desc')->get();
    else
      $groups = ST_Product_Group::orderBy('id', 'desc')->paginate($perPage);

    return $groups;
  }


  public function productList(array $condition = [])
  {
    // $productLists = ST_Product_Group::all()->join('ST_Product', 'pg_display_id', 'ST_Product.id');
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

  public function edit(int $id_product)
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

  public function products()
  {
    return $this->hasMany(ST_Product::class, 'fk_group_id');
  }
}

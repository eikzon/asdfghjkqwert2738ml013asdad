<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ST_Product_Group extends Model
{
  protected $table    = 'st_product_group';
  protected $fillable = ['pg_name', 'pg_status', 'pg_display_id'];

  public $count = 0;

  public function index()
  {
    $groups      = ST_Product_Group::all();
    $this->count = $groups->count();
    return $groups->toArray();
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
    $group->pg_status = $request->input('type');
    $updateGroup      = $group->save();

    if($updateGroup)
      return true;

    return false;
  }

  public function count()
  {
    return $this->count;
  }
}

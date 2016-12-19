<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ST_Category extends Model
{
  protected $dates    = ['deleted_at'];
  protected $table    = 'st_category';
  protected $fillable = ['ct_name', 'ct_image', 'ct_status', 'ct_description'];

  public function index($conditions = [])
  {
    // $perPage = !empty($conditions['perPage']) ? $conditions['perPage'] : 0;

    // if(!empty($conditions['status']))
    // else
      // $categories = ST_Category::orderBy('id', 'desc')->paginate($perPage);

    return ST_Category::orderBy('id', 'desc')->get();
  }

  public function show()
  {
    return ST_Category::where('ct_status', 1)->orderBy('id', 'desc')->get();
  }

  public static function getDetail($id)
  {
    return self::find($id);
  }

  public function edit($id_category)
  {
    $category = ST_Category::where('id', $id_category)->first();

    if(empty($category))
      return false;

    return ['category' => $category];
  }

  public function updateCategory($request, $image = '')
  {
    $category = ST_Category::find($request->input('id'));
    $result   = $this->conditionSQL($category, $request, $image);

    if($result)
      return true;

    return false;
  }

  private function conditionSQL($category, $request, $image)
  {
    if(!empty($image))
      $category->ct_image = $image;

    $category->ct_name        = $request->input('name');
    $category->ct_status      = $request->input('status');
    $category->ct_description = $request->input('description');
    $updateCategory           = $category->save();

    if($updateCategory)
      return true;

    return false;
  }
}

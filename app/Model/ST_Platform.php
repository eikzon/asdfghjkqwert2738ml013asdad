<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use Image;

class ST_Platform extends Model
{
  protected $dates    = ['deleted_at'];
  protected $table    = 'st_platform';
  protected $fillable = [
                          'pt_g_1_title', 'pt_g_1_description',
                          'pt_image_1_1', 'head_1_1', 'group_1_1',
                          'pt_image_1_2', 'head_1_2', 'group_1_2',
                          'pt_image_1_3', 'head_1_3', 'group_1_3',
                          'pt_g_2_title', 'pt_g_2_description',
                          'pt_image_2_1', 'head_2_1', 'group_2_1',
                          'pt_image_2_2', 'head_2_2', 'group_2_2',
                          'pt_image_2_3', 'head_2_3', 'group_2_3',
                          'pt_g_3_title', 'pt_g_3_description',
                          'pt_image_3_1', 'head_3_1', 'group_3_1',
                          'pt_image_3_2', 'head_3_2', 'group_3_2',
                          'pt_image_3_3', 'head_3_3', 'group_3_3',
                          'pt_g_4_title', 'pt_g_4_description',
                          'pt_image_4_1', 'head_4_1', 'group_4_1',
                          'pt_image_4_2', 'head_4_2', 'group_4_2',
                          'pt_image_4_3', 'head_4_3', 'group_4_3',
                          'pt_g_5_title', 'pt_g_5_description',
                          'pt_image_5_1', 'head_5_1', 'group_5_1',
                          'pt_image_5_2', 'head_5_2', 'group_5_2',
                          'pt_image_5_3', 'head_5_3', 'group_5_3',
                          'pt_g_6_title', 'pt_g_6_description',
                          'pt_image_6_1', 'head_6_1', 'group_6_1',
                          'pt_image_6_2', 'head_6_2', 'group_6_2',
                          'pt_image_6_3', 'head_6_3', 'group_6_3'
                        ];

  public function edit($id)
  {
    return ST_Platform::find($id);
  }

  public function show($id)
  {
    $result['detail'] = ST_Platform::find($id);

    $result['first'][] = $result['detail']->group_1_1;
    $result['first'][] = $result['detail']->group_1_2;
    $result['first'][] = $result['detail']->group_1_3;

    $result['second'][] = $result['detail']->group_2_1;
    $result['second'][] = $result['detail']->group_2_2;
    $result['second'][] = $result['detail']->group_2_3;

    $result['third'][] = $result['detail']->group_3_1;
    $result['third'][] = $result['detail']->group_3_2;
    $result['third'][] = $result['detail']->group_3_3;

    $result['fourth'][] = $result['detail']->group_4_1;
    $result['fourth'][] = $result['detail']->group_4_2;
    $result['fourth'][] = $result['detail']->group_4_3;

    $result['fifth'][] = $result['detail']->group_5_1;
    $result['fifth'][] = $result['detail']->group_5_2;
    $result['fifth'][] = $result['detail']->group_5_3;

    $result['sixth'][] = $result['detail']->group_6_1;
    $result['sixth'][] = $result['detail']->group_6_2;
    $result['sixth'][] = $result['detail']->group_6_3;

    return $result;
  }

  public function updatePlatform($request)
  {
    $platform = self::find(1);
    $platform->pt_g_1_title       = $request->input('pt_g_1_title');
    $platform->pt_g_1_description = $request->input('pt_g_1_description');
    if($request->file('pt_image_1_1'))
      $platform->pt_image_1_1       = $this->uploadImage($request->file('pt_image_1_1'));
    $platform->head_1_1           = $request->input('head_1_1');
    $platform->group_1_1          = $request->input('group_1_1');
    if($request->file('pt_image_1_2'))
      $platform->pt_image_1_2       = $this->uploadImage($request->file('pt_image_1_2'));
    $platform->head_1_2           = $request->input('head_1_2');
    $platform->group_1_2          = $request->input('group_1_2');
    if($request->file('pt_image_1_3'))
      $platform->pt_image_1_3       = $this->uploadImage($request->file('pt_image_1_3'));
    $platform->head_1_3           = $request->input('head_1_3');
    $platform->group_1_3          = $request->input('group_1_3');

    $platform->pt_g_2_title       = $request->input('pt_g_2_title');
    $platform->pt_g_2_description = $request->input('pt_g_2_description');
    if($request->file('pt_image_2_1'))
      $platform->pt_image_2_1       = $this->uploadImage($request->file('pt_image_2_1'));
    $platform->head_2_1           = $request->input('head_2_1');
    $platform->group_2_1          = $request->input('group_2_1');
    if($request->file('pt_image_2_2'))
      $platform->pt_image_2_2       = $this->uploadImage($request->file('pt_image_2_2'));
    $platform->head_2_2           = $request->input('head_2_2');
    $platform->group_2_2          = $request->input('group_2_2');
    if($request->file('pt_image_2_3'))
      $platform->pt_image_2_3       = $this->uploadImage($request->file('pt_image_2_3'));
    $platform->head_2_3           = $request->input('head_2_3');
    $platform->group_2_3          = $request->input('group_2_3');

    $platform->pt_g_3_title       = $request->input('pt_g_3_title');
    $platform->pt_g_3_description = $request->input('pt_g_3_description');
    if($request->file('pt_image_3_1'))
      $platform->pt_image_3_1       = $this->uploadImage($request->file('pt_image_3_1'));
    $platform->head_3_1           = $request->input('head_3_1');
    $platform->group_3_1          = $request->input('group_3_1');
    if($request->file('pt_image_3_2'))
      $platform->pt_image_3_2       = $this->uploadImage($request->file('pt_image_3_2'));
    $platform->head_3_2           = $request->input('head_3_2');
    $platform->group_3_2          = $request->input('group_3_2');
    if($request->file('pt_image_3_3'))
      $platform->pt_image_3_3       = $this->uploadImage($request->file('pt_image_3_3'));
    $platform->head_3_3           = $request->input('head_3_3');
    $platform->group_3_3          = $request->input('group_3_3');

    $platform->pt_g_4_title       = $request->input('pt_g_4_title');
    $platform->pt_g_4_description = $request->input('pt_g_4_description');
    if($request->file('pt_image_4_1'))
      $platform->pt_image_4_1       = $this->uploadImage($request->file('pt_image_4_1'));
    $platform->head_4_1           = $request->input('head_4_1');
    $platform->group_4_1          = $request->input('group_4_1');
    if($request->file('pt_image_4_2'))
      $platform->pt_image_4_2       = $this->uploadImage($request->file('pt_image_4_2'));
    $platform->head_4_2           = $request->input('head_4_2');
    $platform->group_4_2          = $request->input('group_4_2');
    if($request->file('pt_image_4_3'))
      $platform->pt_image_4_3       = $this->uploadImage($request->file('pt_image_4_3'));
    $platform->head_4_3           = $request->input('head_4_3');
    $platform->group_4_3          = $request->input('group_4_3');

    $platform->pt_g_5_title       = $request->input('pt_g_5_title');
    $platform->pt_g_5_description = $request->input('pt_g_5_description');
    if($request->file('pt_image_5_1'))
      $platform->pt_image_5_1       = $this->uploadImage($request->file('pt_image_5_1'));
    $platform->head_5_1           = $request->input('head_5_1');
    $platform->group_5_1          = $request->input('group_5_1');
    if($request->file('pt_image_5_2'))
      $platform->pt_image_5_2       = $this->uploadImage($request->file('pt_image_5_2'));
    $platform->head_5_2           = $request->input('head_5_2');
    $platform->group_5_2          = $request->input('group_5_2');
    if($request->file('pt_image_5_3'))
      $platform->pt_image_5_3       = $this->uploadImage($request->file('pt_image_5_3'));
    $platform->head_5_3           = $request->input('head_5_3');
    $platform->group_5_3          = $request->input('group_5_3');

    $platform->pt_g_6_title       = $request->input('pt_g_6_title');
    $platform->pt_g_6_description = $request->input('pt_g_6_description');
    if($request->file('pt_image_6_1'))
      $platform->pt_image_6_1       = $this->uploadImage($request->file('pt_image_6_1'));
    $platform->head_6_1           = $request->input('head_6_1');
    $platform->group_6_1          = $request->input('group_6_1');
    if($request->file('pt_image_6_2'))
      $platform->pt_image_6_2       = $this->uploadImage($request->file('pt_image_6_2'));
    $platform->head_6_2           = $request->input('head_6_2');
    $platform->group_6_2          = $request->input('group_6_2');
    if($request->file('pt_image_6_3'))
      $platform->pt_image_6_3       = $this->uploadImage($request->file('pt_image_6_3'));
    $platform->head_6_3           = $request->input('head_6_3');
    $platform->group_6_3          = $request->input('group_6_3');

    $response                     = $platform->save();

    if($response)
      return true;

    return false;
  }

  private function uploadImage($image)
  {
    $imageName    = 'platform-' . rand(1, 900) . time() . '.jpg';
    $statusUpload = Image::make($image)->resize(340, 140)->save('images/platform/items/' . $imageName);

    if($statusUpload)
      return $imageName;
  }
}

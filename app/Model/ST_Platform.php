<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ST_Platform extends Model
{
  protected $dates    = ['deleted_at'];
  protected $table    = 'st_platform';
  protected $fillable = [
                          'pt_g_1_title', 'pt_g_1_description',
                          'pt_image_1_1', 'group_1_1',
                          'pt_image_1_2', 'group_1_2',
                          'pt_g_2_title', 'pt_g_2_description',
                          'pt_image_2_1', 'group_2_1',
                          'pt_image_2_2', 'group_2_2',
                          'pt_image_2_3', 'group_2_3',
                          'pt_g_3_title', 'pt_g_3_description',
                          'pt_image_3_1', 'group_3_1',
                          'pt_image_3_2', 'group_3_2',
                          'pt_image_3_2', 'group_3_2'
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

    $result['second'][] = $result['detail']->group_2_1;
    $result['second'][] = $result['detail']->group_2_2;
    $result['second'][] = $result['detail']->group_2_3;

    $result['third'][] = $result['detail']->group_3_1;
    $result['third'][] = $result['detail']->group_3_2;
    $result['third'][] = $result['detail']->group_3_3;

    return $result;
  }

  public function updatePlatform($request)
  {
    $platform = self::find(1);
    $platform->pt_g_1_title = $request->input('pt_g_1_title');
    $platform->pt_g_1_description = $request->input('pt_g_1_description');
    $platform->pt_image_1_1 = $request->input('pt_image_1_1');
    $platform->group_1_1 = $request->input('group_1_1');
    $platform->pt_image_1_2 = $request->input('pt_image_1_2');
    $platform->group_1_2 = $request->input('group_1_2');
    $platform->pt_g_2_title = $request->input('pt_g_2_title');
    $platform->pt_g_2_description = $request->input('pt_g_2_description');
    $platform->pt_image_2_1 = $request->input('pt_image_2_1');
    $platform->group_2_1 = $request->input('group_2_1');
    $platform->pt_image_2_2 = $request->input('pt_image_2_2');
    $platform->group_2_2 = $request->input('group_2_2');
    $platform->pt_image_2_3 = $request->input('pt_image_2_3');
    $platform->group_2_3 = $request->input('group_2_3');
    $platform->pt_g_3_title = $request->input('pt_g_3_title');
    $platform->pt_g_3_description = $request->input('pt_g_3_description');
    $platform->pt_image_3_1 = $request->input('pt_image_3_1');
    $platform->group_3_1 = $request->input('group_3_1');
    $platform->pt_image_3_2 = $request->input('pt_image_3_2');
    $platform->group_3_2 = $request->input('group_3_2');
    $platform->pt_image_3_3 = $request->input('pt_image_3_3');
    $platform->group_3_3 = $request->input('group_3_3');
    $response            = $platform->save();

    if($response)
      return true;

    return false;
  }
}

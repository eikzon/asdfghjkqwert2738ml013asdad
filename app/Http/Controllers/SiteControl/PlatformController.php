<?php

namespace App\Http\Controllers\SiteControl;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Model\ST_Platform;
use App\Model\ST_Product_Group;

use File;

class PlatformController extends Controller
{
  public function edit($id)
  {
    $result = (new ST_Platform)->edit($id);

    return view('pages.sitecontrol.platform.form', [
      'platform' => $result,
      'groups'   => (new ST_Product_Group)->index(['status' => true]),
    ]);
  }

  public function update(Request $request)
  {
    // $imageName = '';
    // if(!empty($request->file('image')))
    // {
    //   $imageName = 'category-' . rand(1, 900) . time() . '.' . $request->file('image')->getClientOriginalExtension();
    //   Image::make($request->file('image'))->resize(200, 150)->save('images/' . $imageName);
    // }

    if((new ST_Platform)->updatePlatform($request))
      return redirect()->route('sitecontrol.platform.edit', [config('website.platform.id'), 'update']);
  }

  public function destroyImage($key, $imageName)
  {
    File::delete($imageName);
    $platform       = ST_Platform::find(config('website.platform.id'));
    $platform->$key = '';
    $platform->save();

    return redirect()->route('sitecontrol.platform.edit', [config('website.platform.id')]);
  }

}

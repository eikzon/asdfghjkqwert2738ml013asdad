<?php

namespace App\Http\Controllers\SiteControl;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\ST_Variant;

class VariantController extends Controller
{
  private $st_variant = '';

  public function __construct()
  {
    $this->st_variant = new ST_Variant;
  }

  public function index()
  {
    return view('pages.sitecontrol.variant.home', [
      'variants' => $this->st_variant->index(),
    ]);
  }

  public function create()
  {
    return view('pages.sitecontrol.variant.form', [
      'variant' => null,
      'state'   => 'store'
    ]);
  }

  public function store(Request $request)
  {
    if($this->st_variant->store($request))
      return redirect()->route('sitecontrol.variant.index');
    else
      return redirect()->route('sitecontrol.variant.create');
  }

  public function edit(int $id)
  {
    if(!empty($id))
    {
      $result = $this->st_variant->edit($id);

      if(!$result)
        return redirect()->route('sitecontrol.variant.index');

      return view('pages.sitecontrol.variant.form', [
        'variant' => $result['variant'],
        'state'   => 'update'
      ]);
    }
    else
      return redirect()->route('sitecontrol.variant.index');
  }

  public function update(Request $request)
  {
    if($this->st_variant->updateVariant($request))
      return redirect()->route('sitecontrol.variant.index');
    else
      return redirect()->route('sitecontrol.variant.edit', ['id' => $request->input('id')]);
  }

  public function destroy(int $id)
  {
    ST_Variant::destroy($id);
    return redirect()->route('sitecontrol.variant.index');
  }
}

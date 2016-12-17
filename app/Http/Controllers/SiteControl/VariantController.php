<?php

namespace App\Http\Controllers\SiteControl;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\ST_Variant;

use App\Traits\UploadImageTrait;

class VariantController extends Controller
{
  use UploadImageTrait;
  private $st_variant = '';

  public function __construct()
  {
    parent::__construct();
    $this->st_variant = new ST_Variant;
  }

  public function index()
  {
    $variants = $this->st_variant->index();

    if($variants->currentPage() > $variants->lastPage())
      return redirect()->route('sitecontrol.variant.index');
    else
      return view('pages.sitecontrol.variant.home', [
        'variants' => $variants,
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
      return redirect()->route('sitecontrol.variant.index', 'create');
    else
      return redirect()->route('sitecontrol.variant.create');
  }

  public function edit($id)
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
      return redirect()->route('sitecontrol.variant.index', 'update');
    else
      return redirect()->route('sitecontrol.variant.edit', ['id' => $request->input('id')]);
  }

  public function uploadImages(Request $request)
  {
    if(!empty($request->file('pic')))
      return $this->uploadTraits($request, 'variant');
  }

  public function destroy($id)
  {
    ST_Variant::destroy($id);
    return redirect()->route('sitecontrol.variant.index', 'delete');
  }
}

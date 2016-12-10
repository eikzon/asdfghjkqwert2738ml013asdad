<?php

namespace App\Http\Controllers\SiteControl;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ST_Product;
use App\Model\ST_Product_Group;
use App\Model\ST_Variant;

class ProductController extends Controller
{
  private $st_product = '';

  public function __construct()
  {
    $this->st_product = new ST_Product;
  }

  public function index()
  {
    return view('pages.sitecontrol.product.home', [
      'products' => $this->st_product->index(),
    ]);
  }

  public function create()
  {
    return view('pages.sitecontrol.product.form', [
      'product'        => null,
      'groups'         => (new ST_Product_Group)->index(),
      'variantsResult' => (new ST_Variant)->getType(),
      'state'          => 'store'
    ]);
  }

  public function store(Request $request)
  {
    if($this->st_product->store($request))
      return redirect()->route('sitecontrol.product.index');
    else
      return redirect()->route('sitecontrol.product.create');
  }

  public function edit(int $id)
  {
    $variantsMap = [];
    if(!empty($id))
    {
      $result = $this->st_product->edit($id);

      if(!$result)
        return redirect()->route('sitecontrol.product.index');

      foreach($result['variantsMap'] as $variant)
        $variantsMap[$variant['fk_vr_id']] = true;

      return view('pages.sitecontrol.product.form', [
        'product'        => $result['product'],
        'variantsResult' => (new ST_Variant)->getType(),
        'variantsMap'    => $variantsMap,
        'groups'         => (new ST_Product_Group)->index(),
        'state'          => 'update'
      ]);
    }
    else
      return redirect()->route('sitecontrol.product.index');
  }

  public function update(Request $request)
  {
    if($this->st_product->updatePD($request))
      return redirect()->route('sitecontrol.product.index');
    else
      return redirect()->route('sitecontrol.product.edit', ['id' => $request->input('id')]);
  }

  public function destroy(int $id)
  {
    ST_Product::destroy($id);
    return redirect()->route('sitecontrol.product.index');
  }
}

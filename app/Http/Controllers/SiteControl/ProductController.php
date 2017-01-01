<?php

namespace App\Http\Controllers\SiteControl;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ST_Product;
use App\Model\ST_Product_Group;
use App\Model\ST_Variant;
use App\Model\ST_Category;
use App\Model\ST_Product_Images;

use App\Traits\UploadImageTrait;

use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
  use UploadImageTrait;
  private $st_product = '';

  public function __construct()
  {
    parent::__construct();
    $this->st_product = new ST_Product;
  }

  public function index()
  {
    $products = $this->st_product->index(['perPage' => config('website.common.perPage.siteControl')]);

    if(($products->currentPage() > $products->lastPage()) && $products->total())
      return redirect()->route('sitecontrol.product.index');
    else
      return view('pages.sitecontrol.product.home', [
        'products' => $products,
      ]);
  }

  public function create()
  {
    return view('pages.sitecontrol.product.form', [
      'product'        => null,
      'groups'         => (new ST_Product_Group)->index(['status' => true]),
      'categories'     => (new ST_Category)->show(),
      'variantsResult' => (new ST_Variant)->getType(),
      'state'          => 'store'
    ]);
  }

  public function store(Request $request)
  {
    if($this->st_product->store($request))
      return redirect()->route('sitecontrol.product.index', 'create');
    else
      return redirect()->route('sitecontrol.product.create');
  }

  public function edit($id)
  {
    $variantsMap = [];
    if(!empty($id))
    {
      $result = $this->st_product->edit($id);

      if(!$result)
        return redirect()->route('sitecontrol.product.index');

      if(!empty($result['variantsMap']))
        foreach($result['variantsMap'] as $variant)
          $variantsMap[$variant['fk_vr_id']] = true;

      return view('pages.sitecontrol.product.form', [
        'product'        => $result['product'],
        'variantsResult' => (new ST_Variant)->getType(),
        'variantsMap'    => $variantsMap,
        'groups'         => (new ST_Product_Group)->index(['status' => true]),
        'categories'     => (new ST_Category)->show(),
        'state'          => 'update'
      ]);
    }
    else
      return redirect()->route('sitecontrol.product.index');
  }

  public function update(Request $request)
  {
    if($this->st_product->updatePD($request))
      return redirect()->route('sitecontrol.product.index', 'update');
    else
      return redirect()->route('sitecontrol.product.edit', ['id' => $request->input('id')]);
  }

  public function destroy($id)
  {
    if(ST_Product::destroy($id))
      return response()->json(['status' => 'success']);

    return false;
    // redirect()->route('sitecontrol.product.index', 'delete');
  }

  public function uploadImages(Request $request)
  {
    if(!empty($request->file('pic')) && !empty($request->input('keyGenerate')))
      return $this->uploadTraits($request, 'product');
  }

  public function destroyImage($pid, $idImg)
  {
    ST_Product_Images::destroy($idImg);
    return redirect()->route('sitecontrol.product.edit', $pid);
  }
}

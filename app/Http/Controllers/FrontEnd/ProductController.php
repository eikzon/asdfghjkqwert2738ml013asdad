<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\ST_Product;
use App\Model\ST_Product_Group;
use App\Model\ST_Category;
use App\Model\ST_Wishlist;
use App\Model\ST_Platform;

class ProductController extends Controller
{
  public function index($id)
  {
    if($id == 1)
      return redirect()->route('platform_student', $id);

    $productLists = (new ST_Product)->listProduct($id);
    return view('pages.desktop.product.list',[
      'productLists' => $productLists,
      'category'     => ST_Category::getDetail($id)
    ]);
  }

  public function show($id)
  {
    $variants = [];
    $memberId = request()->session()->get('memberData')['id'];

    $productClass           = new ST_Product;
    $productClass->memberId = $memberId;

    $result = $productClass->show($id);
    if(!empty($result['fk_group_id']))
      $variants = (new ST_Product_Group)->variantsOption($result['fk_group_id']);

    $result['wishlist'] = (new ST_Wishlist)->get($id, $memberId);
    $relatedItems       = $productClass->relatedItems($id);

    // Increment View Product
    $incrementCount = ST_Product::find($id);
    $incrementCount->count_view += 1;
    $incrementCount->save();

    return view('pages.desktop.product.detail',[
      'product'      => $result,
      'relatedItems' => $relatedItems,
      'variants'     => $variants
    ]);
  }

  public function platform($categoryId)
  {
    $platformResult = (new ST_Platform)->show(1);

    $tab1 = $platformResult['first'];
    $tab2 = $platformResult['second'];
    $tab3 = $platformResult['third'];
    $tab4 = $platformResult['fourth'];
    $tab5 = $platformResult['fifth'];
    $tab6 = $platformResult['sixth'];

    $productClass = new ST_Product;

    $variantOptions[1] = $productClass->platFormCategory($tab1);
    $variantOptions[2] = $productClass->platFormCategory($tab2);
    $variantOptions[3] = $productClass->platFormCategory($tab3);
    $variantOptions[4] = $productClass->platFormCategory($tab4);
    $variantOptions[5] = $productClass->platFormCategory($tab5);
    $variantOptions[6] = $productClass->platFormCategory($tab6);

    // dd($variantOptions);

    return view('pages.desktop.platform.student',[
      'variantOptions' => $variantOptions,
      'platform'       => $platformResult['detail']
      // 'category'       => ST_Category::getDetail($categoryId)
    ]);
  }

  public function platformCompareVariant(Request $request)
  {
    $result = ST_Product::where([
                  ['size_vr_id', '=', $request->input('size')],
                  ['color_vr_id', '=', $request->input('color')],
                  ['pd_status', '=', 1]
                ])
                ->get(['id', 'pd_price', 'pd_price_discount'])
                ->toArray();
    if(!empty($result))
    {
      $response['status'] = true;
      $response['id']     = $result[0]['id'];
      $response['price']  = $result[0]['pd_price'] - $result[0]['pd_price_discount'];
    }
    else
    {
      $response['status'] = false;
    }

    return json_encode($response);
  }
}

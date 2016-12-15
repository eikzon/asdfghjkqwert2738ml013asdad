<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\ST_Product;
use App\Model\ST_Product_Group;
use App\Model\ST_Wishlist;

class ProductController extends Controller
{
  public function index($id)
  {
    $productLists = (new ST_Product)->list($id);
    return view('pages.desktop.product.list',[
      'productLists' => $productLists
    ]);
  }

  public function show(int $id)
  {
    $variants = [];
    $memberId = !empty(auth()->user()->id) ? auth()->user()->id : 1;

    $productClass           = new ST_Product;
    $productClass->memberId = $memberId;

    $result             = $productClass->show($id);
    if(!empty($result['fk_group_id']))
      $variants = (new ST_Product_Group)->variantsOption($result['fk_group_id']);

    $result['wishlist'] = (new ST_Wishlist)->get($id, $memberId);
    $relatedItems       = $productClass->relatedItems($id);

    return view('pages.desktop.product.detail',[
      'product'      => $result,
      'relatedItems' => $relatedItems,
      'variants'     => $variants
    ]);
  }
}

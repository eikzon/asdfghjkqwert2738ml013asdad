<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\ST_Product;
use App\Model\ST_Product_Group;

class ProductController extends Controller
{
  public function index()
  {
    $productLists = (new ST_Product_Group)->productList(['status' => true]);
    return view('pages.desktop.product.list',[
      'productLists' => $productLists
    ]);
  }

  public function show(int $id)
  {
    $result = ST_Product::show($id);
    return view('pages.desktop.product.detail',[
      'product' => $result
    ]);
  }
}

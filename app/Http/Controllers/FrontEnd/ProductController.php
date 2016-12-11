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
    $productLists = (new ST_Product)->index([
      'status'  => true
    ]);
    return view('pages.desktop.product.list',[
      'productLists' => $productLists
    ]);
  }

  public function show(int $id)
  {
    $memberId= !empty(auth()->user()->id) ? auth()->user()->id : '';
    $result = (new ST_Product)->show($id, $memberId);
    return view('pages.desktop.product.detail',[
      'product' => $result
    ]);
  }
}

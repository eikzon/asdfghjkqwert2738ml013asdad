<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

use App\Model\ST_Product;
use App\Model\ST_Product_Group;
use App\Model\ST_Variant;
use App\Model\ST_Order;
use App\Model\ST_Member;

class Controller extends BaseController
{
  use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

  public function __construct()
  {
    $product = (new ST_Product)->index()->total();
    $order = (new ST_Order)->now()->get()->count();
    $member = (new ST_Member)->now()->get()->count();
    $sku     = (new ST_Product_Group)->index()->total();
    $variant = (new ST_Variant)->index()->total();

    $allCount = [
      'product' => (!empty($product) ? $product : 0),
      'order'   => (!empty($order) ? $order : 0),
      'member'  => (!empty($member) ? $member : 0),
      'sku'     => (!empty($sku) ? $sku : 0),
      'variant' => (!empty($variant) ? $variant : 0),
    ];

    view()->share('count', $allCount);
  }
}

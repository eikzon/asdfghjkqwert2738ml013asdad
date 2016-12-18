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
use App\Model\ST_Category;
use App\Model\ST_StartDateCountsView;

class Controller extends BaseController
{
  use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

  public function __construct()
  {
    $product = (new ST_Product)->index()->total();
    $order   = (new ST_Order)->now()->get()->count();
    $member  = (new ST_Member)->now()->get()->count();
    $sku     = (new ST_Product_Group)->index()->total();
    $variant = (new ST_Variant)->index()->total();

    $allCount = [
      'product' => (!empty($product) ? $product : 0),
      'order'   => (!empty($order) ? $order : 0),
      'member'  => (!empty($member) ? $member : 0),
      'sku'     => (!empty($sku) ? $sku : 0),
      'variant' => (!empty($variant) ? $variant : 0),
    ];

    view()->share([
      'count'          => $allCount,
      'categoriesList' => (new ST_Category)->show()
    ]);

    $startDayofWeek = date('Y-m-d', strtotime('-' . date('w') . ' days'));
    if($startDayofWeek == date('Y-m-d'))
    {
      $responseDate = ST_StartDateCountsView::first();
      if($responseDate->startdate != $startDayofWeek)
      {
        ST_StartDateCountsView::truncate();
        $setDate = new ST_StartDateCountsView;
        $setDate->startdate = $startDayofWeek;
        $setDate->save();

        ST_Product::clearView();
      }
    }
  }
}

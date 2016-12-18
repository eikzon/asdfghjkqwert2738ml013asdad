<?php

namespace App\Http\Controllers\sitecontrol;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\ST_Product;
use App\Model\ST_Order;
use App\Model\ST_Member;

class HomeController extends Controller
{
  public function index()
  {
    $orders = ST_Order::orderBy('id', 'desc')->limit(5)->get();

    return view('pages.sitecontrol.dashboard', [
      'order'              => 0,
      'members'            => ST_Member::thisWeek()->get(),
      'productsOutOfStock' => (new ST_Product)->outOfStock(),
      'productsDescView'   => ST_Product::where([['pd_status', '!=', 0]])
                                          ->orderBy('count_view', 'desc')
                                          ->limit(3)
                                          ->get(),
      'ordersLatest'       => $orders
    ]);
  }
}

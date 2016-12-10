<?php

namespace App\Http\Controllers\SiteControl;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ST_Order;

class OrderController extends Controller
{
  public function index()
  {
    return view('pages.sitecontrol.order.home');
  }

  public function show(Request $request, $id)
  {
    $order = ST_Order::find($id);

    if(empty($order)) return redirect()->back();

    return view('pages.sitecontrol.order.show', [
      'order' => $order
    ]);
  }

  public function update()
  {
    // return view('pages.sitecontrol.product.create');
  }

  public function destroy()
  {
    // return view('pages.sitecontrol.product.create');
  }
}

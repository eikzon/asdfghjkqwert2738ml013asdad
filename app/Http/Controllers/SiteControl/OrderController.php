<?php

namespace App\Http\Controllers\SiteControl;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ST_Order;

class OrderController extends Controller
{
  public function index(Request $request)
  {
    $orders = ST_Order::byFilter(e($request->input('search')), e($request->input('status')))
                        ->orderBy('id', 'desc')
                        ->paginate(config('website.common.perPage.siteControl'));

    return view('pages.sitecontrol.order.home', [
      'orders' => $orders
    ]);
  }

  public function show(Request $request, $id)
  {
    $order = ST_Order::find($id);

    if(empty($order)) return redirect()->back();

    return view('pages.sitecontrol.order.show', [
      'order' => $order
    ]);
  }

  public function update(Request $request, $id)
  {
    $order = ST_Order::find($id);
    $order->update($request->all());

    return redirect()->route('sitecontrol.order.show', 'update');
  }

  public function destroy(Request $request, $id)
  {
    ST_Order::find($id)->delete();
    return redirect()->route('sitecontrol.order.index', 'delete');
  }
}

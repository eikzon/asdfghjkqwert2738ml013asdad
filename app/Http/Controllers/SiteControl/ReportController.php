<?php
namespace App\Http\Controllers\SiteControl;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\ST_Order;
use App\Model\ST_Product;

use Excel;
use File;

class ReportController extends Controller
{
  public $data = '';

  public function index()
  {
    File::deleteDirectory('./excel/exports', true);
    return view('pages.sitecontrol.report.home');
  }

  public function order(Request $request)
  {
    $condition = [
      'daterange' => $request->input('daterange'),
      'type'      => $request->input('type'),
      'status'    => $request->input('status')
    ];

    $this->data = ST_Order::byReport($condition)
                            ->orderBy('id', 'desc')
                            ->get();

    Excel::create('Order - Report ' . date('Y-m-d'), function($excel) use ($condition) {

      $excel->sheet('Excel sheet', function($sheet) use ($condition) {
        $sheet->loadView('pages.sitecontrol.report.order', [
          'orders'    => $this->data,
          'condition' => $condition
        ]);
      });
    })->store('xls', './excel/exports');

    return redirect('./excel/exports/Order - Report ' . date('Y-m-d') . '.xls');
  }

  public function product(Request $request)
  {
    $condition = [
      'daterange' => $request->input('daterange'),
      'type'      => $request->input('type')
    ];

    $this->data = ST_Product::byReport($condition)
                              ->with('category')
                              ->with('sku')
                              ->orderBy('id', 'desc')->get();

    Excel::create('Product - Report ' . date('Y-m-d'), function($excel) use ($condition) {

      $excel->sheet('Excel sheet', function($sheet) use ($condition) {
        $sheet->loadView('pages.sitecontrol.report.product', [
          'products'  => $this->data,
          'condition' => $condition
        ]);
      });
    })->store('xls', './excel/exports');

    return redirect('./excel/exports/Product - Report ' . date('Y-m-d') . '.xls');
  }

  public function sales(Request $request)
  {
    $data = [];
    $condition = [
      'daterange' => $request->input('daterange'),
      'type'      => $request->input('type'),
      'status'    => $request->input('status')
    ];

    $this->data = ST_Order::byReport($condition)
                            ->with('productLists')
                            ->orderBy('id', 'desc')
                            ->get();

    foreach($this->data as $products)
      foreach($products->productLists as $product)
      {
        if(!empty($product->od_product_id))
        {
          $data[$product->od_product_id]['quantity'][] = $product->od_quantity;
          $data[$product->od_product_id]['price'][]    = $product->od_price;
          $data[$product->od_product_id]['code'][0]    = $product->pd_code;
          $data[$product->od_product_id]['name'][0]    = $product->pd_name;
        }
      }

    $this->data = $data;

    Excel::create('Sales - Report ' . date('Y-m-d'), function($excel) use ($condition) {
      $excel->sheet('Excel sheet', function($sheet) use ($condition) {
        $sheet->loadView('pages.sitecontrol.report.sales', [
          'products'  => $this->data,
          'condition' => $condition
        ]);
      });
    })->store('xls', './excel/exports');

    return redirect('./excel/exports/Sales - Report ' . date('Y-m-d') . '.xls');
  }
}

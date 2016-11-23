<?php

namespace App\Http\Controllers\SiteControl;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
  public function index()
  {
    return view('pages.sitecontrol.order.home');
  }

  public function show()
  {
    return view('pages.sitecontrol.order.show');
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

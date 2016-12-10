<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
  public function index()
  {
    return view('pages.desktop.cart.basket');
  }

  public function shipping()
  {
    return view('pages.desktop.cart.shipping');
  }

  public function completePayment()
  {
    return view('pages.desktop.cart.complete');
  }

  public function errorPayment()
  {
    return view('pages.desktop.cart.not_complete');
  }
}

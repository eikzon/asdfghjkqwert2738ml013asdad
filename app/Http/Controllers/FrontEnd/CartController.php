<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\ST_Cart;
use App\Model\ST_Product;
use App\Model\ST_Product_Images;

class CartController extends Controller
{
  public function index(Request $request)
  {
    $carts         = ST_Cart::where('fk_member_id', $request->session()->get('memberData')['id'])->get();
    $productImages = ST_Product_Images::all();

    if($request->session()->has('memberData'))
    {
      return view('pages.desktop.cart.basket', [
        'carts' => $carts,
        'imageProduct' => $productImages
      ]);
    }
    else
    {
      return redirect(route('account_login'));
    }
  }

  public function addToCart(Request $request)
  {
    $product    = ST_Product::find($request->input('fk_product_id'));
    $cart       = new ST_Cart;
    $updateCart = ST_Cart::where('fk_member_id', $request->session()->get('memberData')['id'])
                           ->where('fk_product_id', $request->input('fk_product_id'));

    if(!empty($updateCart->first()->ct_quantity))
      $sumQuantity = $updateCart->first()->ct_quantity + $request->input('ct_quantity');
    else
      $sumQuantity = $request->input('ct_quantity');

    if(!empty($product))
    {
      if($sumQuantity <= $product->pd_stock)
      {
        if(empty($updateCart->first()))
        {
          $cart->create($request->all());
        }
        else
        {
          $requestData = ['ct_quantity' => $sumQuantity, 'fk_product_id' => $request->input('fk_product_id')];
          $updateCart->update($requestData);
        }
      }
      else
      {
        $request->session()->put('errorMsg', 'สินค้าไม่เพียงพอสำหรับความต้องการ');
      }
    }

    return redirect()->back();
  }

  public function updateCartItems(Request $request, $id)
  {
    $cart = ST_Cart::find($id);

    $cart->update($request->all());
  }

  public function deleteCartItems($id)
  {
    ST_Cart::find($id)->delete();
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

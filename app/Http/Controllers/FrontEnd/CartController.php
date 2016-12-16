<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\ST_Cart;
use App\Model\ST_Product;
use App\Model\ST_Product_Images;
use App\Model\ST_Order_Address;
use App\Model\ST_Member;

class CartController extends Controller
{
  public function index(Request $request)
  {
    $carts          = ST_Cart::where('fk_member_id', $request->session()->get('memberData')['id'])->get();
    $productImages  = ST_Product_Images::all();

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

  public function updateCartItems(Request $request)
  {
    $cart    = ST_Cart::find($request->input('id'));
    $product = ST_Product::find($request->input('fk_product_id'));

    if($request->input('quantity') <= $product->pd_stock)
    {
      $requestData = ['ct_quantity' => $request->input('quantity')];
      $cart->update($requestData);
    }

    return redirect()->back();
  }

  public function deleteCartItems($id)
  {
    ST_Cart::find($id)->delete();
  }

  public function shipping(Request $request)
  {
    $memberID = '';

    if($request->session()->has('memberData'))
    {
      $memberID = $request->session()->get('memberData');
      $member   = ST_Member::find($memberID)->first();

      return view('pages.desktop.cart.shipping', ['member' => $member]);
    }
    else
    {
      return redirect('/account/login');
    }
  }

  public function checkout(Request $request)
  {
    $reqAddress = [
                    'oa_first_name' => $request->input('oa_first_name'),
                    'oa_last_name' => $request->input('oa_last_name'),
                    'oa_tel' => $request->input('oa_tel'),
                    'oa_address' => $request->input('oa_address'),
                    'oa_province' => $request->input('oa_province'),
                    'oa_district' => $request->input('oa_district'),
                    'oa_sub_district' => $request->input('oa_sub_district'),
                    'oa_postcode' => $request->input('oa_postcode'),
                    'oa_isbilling_address' => !empty($request->input('oa_isbilling_address')) ? $request->input('oa_isbilling_address') : 0,
                    'oa_billign_address' => $request->input('oa_billign_address'),
                    'oa_tax_id' => $request->input('oa_tax_id')
                  ];

    $orderAddress  = new ST_Order_Address;
    $insertAddress = $orderAddress->create($reqAddress);
    $addressId     = $insertAddress->id;

    d($addressId);
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

<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
  public function index()
  {
    return view('pages.desktop.account.login');
  }
  public function profile()
  {
    return view('pages.desktop.account.profile');
  }
  public function create()
  {
    // register
    return view('pages.desktop.account.register');
  }
  public function store()
  {
    // create register
    return view('pages.desktop.account.register');
  }
  public function address()
  {
    return view('pages.desktop.account.address');
  }
  public function history()
  {
    return view('pages.desktop.account.history');
  }
  public function wishlist()
  {
    $wishlists = (new ST_Wishlist)->show();
    return view('pages.desktop.account.wishlist', ['wishlists' => $wishlists]);
  }
  public function destroy()
  {
    //logout
    // return view('pages.desktop.account.profile');
  }
  public function wishlistAdd($id)
  {
    $result = false;
    $result = (new ST_Wishlist)->store();
    return $result;
  }
  public function wishlistDestroy(int $id)
  {
    if(ST_Wishlist::destroy($id))
      return true;

    return false;
  }
}
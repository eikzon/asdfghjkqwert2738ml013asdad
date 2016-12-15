<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\ST_Wishlist;
use App\Model\ST_Order;
use App\Model\ST_Member;

use Mail;

class AccountController extends Controller
{

  public $user = '';

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
  public function login()
  {
    // register
    return view('pages.desktop.account.login');
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
  public function forgotPassword()
  {
    return view('pages.desktop.account.forgot_password');
  }
  public function forgotPasswordSend(Request $request)
  {
    $statusEmailSend = 'fail';

    if($request->has('email'))
    {
      $user = ST_Member::Email($request->input('email'))->get();

      if(!empty($user[0]))
      {
        $newPassword = rand(0, 99999);
        $response    = ST_Member::UpdatePassword($newPassword, $user[0]->id);

        if($response)
        {
          $this->user      = $user;
          Mail::send('pages.desktop.mail.forget_password', [
                  'user'     => $user,
                  'password' => $newPassword
                ], function ($m) {
                  $m->from('allwedes@all-we-design.com', 'Breaker Shoe, Your Shoe Style');
                  $m->to($this->user[0]->email,
                   "$this->user[0]->first_name $this->user[0]->last_name")
                    ->subject('Forget Password :: Breaker Shoe');
                });
          $statusEmailSend = 'success';
        }
        else
        {
          $statusEmailSend = 'unsuccess';
        }
      }
    }

    return redirect()->route('account_forgot_password', $statusEmailSend);
  }
  public function history()
  {
    $user = 1;
    $orders = ST_Order::ByMember($user)->get();
    return view('pages.desktop.account.history', ['orders' => $orders]);
  }
  public function historyDetail($id)
  {
    $user  = 1;
    $order = ST_Order::ByDetail($user, $id)->get();
    return view('pages.desktop.account.history_detail', ['order' => $order]);
  }
  public function wishlist()
  {
    // auth()->user()->id = 0;
    $wishlists = (new ST_Wishlist)->list(1);
    return view('pages.desktop.account.wishlist', ['wishlists' => $wishlists]);
  }

  // public function wishlistAdd()
  // {
  //   if(!empty(Auth::user()->id))
  //     return (new ST_Wishlist)->get(Auth::user()->id);

  //   return false;
  // }
  public function destroy()
  {
    Auth::logout();
    return view('pages.desktop.account.profile');
  }
  public function wishlistAdd($id)
  {
    (new ST_Wishlist)->store($id);

    return redirect()->route('product_detail', $id);
  }
  public function wishlistDestroy($pid, $id)
  {
    ST_Wishlist::destroy($id);
    if(!empty($pid))
      return redirect()->route('product_detail', $pid);
    else
      return redirect()->route('account_wishlist');
  }
}

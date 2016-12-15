<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\ST_Member;
use View;

use App\Model\ST_Wishlist;
use App\Model\ST_Order;

use Mail;

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
  public function login(Request $request)
  {
    if($request->session()->has('memberData'))
      return redirect('/');
    else
      return view('pages.desktop.account.login');
  }

  public function clientLogin(Request $request)
  {
    $member = ST_Member::where('email',e($request->input('email')))->get();

    if(!empty($member[0]))
    {
      if($member[0]->status == 1)
      {
        if(md5($request->input('email') . $request->input('password')) == $member[0]->password)
        {
          $setSession['id']         = $member[0]->id ;
          $setSession['email']      = $member[0]->email ;
          $setSession['first_name'] = $member[0]->first_name ;
          $setSession['last_name']  = $member[0]->last_name ;

          $request->session()->put('memberData', $setSession);

          return redirect('/');
        }
        else
        {
          $MessageShow = trans('รหัสผ่านไม่ถูกต้องกรุณาตรวจสอบและลองใหม่อีกครั้งค่ะ') ;
        }
      }
      else
      {
        $MessageShow = trans('Username ของคุณโดนระงับการใช้บริการ หรือ ยังไม่ได้ทำการ Activate กรุณาติดต่อเจ้าหน้าที่ค่ะ') ;
      }
    }
    else
    {
      $MessageShow = trans('ไม่พบ Username นี้ในระบบกรุณาตรวจสอบและลองใหม่อีกครั้งค่ะ') ;
    }

    return view('pages.desktop.account.login', [
      'messageError' => $MessageShow,
      'inputEmail'   => e($request->input('email'))
    ]);
  }

  public function clientLogout(Request $request)
  {
    $request->session()->forget('memberData');
    
    return redirect('/');
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
  public function forgotPasswordSend()
  {
    // Mail::send('pages.desktop.account.address', ['user' => 'this is a detail mannn'], function ($m) {
    //     $m->from('hello@app.com', 'Your Application');
    //     $m->to('inimz25@gmail.com', 'nongnae')->subject('Your Reminder!');
    // });

    $statusEmailSend = (true) ? 'success' : 'fail';
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

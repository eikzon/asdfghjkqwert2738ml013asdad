<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\ST_Member;
use View;

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
  public function history()
  {
    return view('pages.desktop.account.history');
  }
  public function wishlist()
  {
    $wishlists = (new ST_Wishlist)->show();
    return view('pages.desktop.account.wishlist', ['wishlists' => $wishlists]);
  }
  public function wishlistAdd()
  {
    if(!empty(Auth::user()->id))
      return (new ST_Wishlist)->get(Auth::user()->id);

    return false;
  }
  public function destroy()
  {
    Auth::logout();
    return view('pages.desktop.account.profile');
  }
  public function wishlistDestroy(int $id)
  {
    if(ST_Wishlist::destroy($id))
      return true;

    return false;
  }
}

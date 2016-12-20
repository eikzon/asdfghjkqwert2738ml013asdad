<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;

use App\Model\ST_Member;
use App\Model\ST_Wishlist;
use App\Model\ST_Order;
use View;
use Mail;

class AccountController extends Controller
{

  public $user = '';

  public function index()
  {
    return view('pages.desktop.account.login');
  }
  public function profile(Request $request)
  {
    $memberID = '';

    if($request->session()->has('memberData'))
    {
      $memberID = $request->session()->get('memberData');
      $member   = ST_Member::find($memberID)->first();

      return view('pages.desktop.account.profile', ['member' => $member]);
    }
    else
    {
      return redirect('/account/login');
    }
  }
  public function updateProfile(Request $request, $id)
  {
    $member      = ST_Member::find($id);
    $requestData = ['gender'       => $request->input('user-gender'),
                    'first_name'   => $request->input('user-name'),
                    'last_name'    => $request->input('user-lastname'),
                    'tel'          => $request->input('user-mobile'),
                    'notification' => $request->input('notification'),
                    'birthday'     => date('Y-m-d', strtotime($request->input('user-birthday')))
                   ];

    if($member->update($requestData))
      return view('pages.desktop.account.profile', ['member' => $member,
                                                    'messageShow' => 'แก้ไขข้อมูลสมาชิกสำเร็จ']);
    else
      return view('pages.desktop.account.profile', ['member' => $member,
                                                    'messageShow' => 'แก้ไขข้อมูลสมาชิกไม่สำเร็จ']);
  }
  public function changePassword(Request $request, $id)
  {
    $member          = ST_Member::find($id);
    $currentPassword = md5($member->email . $request->input('user-password'));
    $newPassword     = md5($member->email . $request->input('user-newpassword'));

    if($request->input('user-newpassword') != $request->input('user-newpassword-2')){
      return view('pages.desktop.account.profile', ['member' => $member,
                                                    'messageShow' => 'ยืนยันรหัสผ่านไม่ถูกต้องกรุณาตรวจสอบ']);
    }

    if($member->password == $currentPassword)
    {
      $requestData = ['password' => $newPassword];

      if($member->update($requestData))
        return view('pages.desktop.account.profile', ['member' => $member,
                                                      'messageShow' => 'แก้ไขรหัสผ่านสำเร็จ']);
      else
        return view('pages.desktop.account.profile', ['member' => $member,
                                                      'messageShow' => 'แก้ไขรหัสผ่านไม่สำเร็จ']);
    }
    else
    {
      return view('pages.desktop.account.profile', ['member' => $member,
                                                    'messageShow' => 'รหัสผ่านปัจจุบันไม่ถูกต้องกรุณาตรวจสอบและลองใหม่อีกครัง']);
    }
  }
  public function create()
  {
    // register
    return view('pages.desktop.account.register');
  }
  public function login(Request $request)
  {
    if($request->session()->has('memberData'))
      return redirect()->route('account_profile');
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

          return redirect()->route('account_profile');
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

  public function store(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'email' => 'unique:st_member,email'
    ]);

    if($validator->fails())
      return redirect()->route('account_create', 'wrong-email');

    if($request->has('password') && $request->input('password') == $request->input('repassword'))
    {
      $registerMember = new ST_Member;
      $registerMember->gender     = $request->input('gender');
      $registerMember->first_name = $request->input('firstname');
      $registerMember->last_name  = $request->input('lastname');
      $registerMember->email      = $request->input('email');
      $registerMember->tel        = $request->input('mobile');
      $registerMember->password   = md5($request->input('email') . $request->input('password'));
      $registerMember->birthday   = $request->input('birthday');
      $registerMember->status     = 1;

      $registerMember->shipping_address      = $request->input('address');
      $registerMember->shipping_province     = $request->input('province');
      $registerMember->shipping_district     = $request->input('city');
      $registerMember->shipping_sub_district = $request->input('district');
      $registerMember->shipping_postcode     = $request->input('postcode');
      $registerMember->notification          = !empty($request->input('subscribe')) ? $request->input('subscribe') : 0;

      if($registerMember->save())
        return redirect()->route('account_login', 'forLogin');
      else
        return redirect()->route('account_create', 'fail');
    }
    else
    {
      return redirect()->route('account_create', 'passwordWrong');
    }
  }
  public function address(Request $request)
  {
    $memberID = '';

    if($request->session()->has('memberData'))
    {
      $memberID = $request->session()->get('memberData');
      $member   = ST_Member::find($memberID)->first();

      return view('pages.desktop.account.address', ['member' => $member]);
    }
    else
    {
      return redirect('/account/login');
    }
  }
  public function updateShipping(Request $request, $id)
  {
    $member      = ST_Member::find($id);
    $requestData = ['shipping_address'      => $request->input('shipping_address'),
                    'shipping_province'     => $request->input('shipping_province'),
                    'shipping_district'     => $request->input('shipping_district'),
                    'shipping_sub_district' => $request->input('shipping_sub_district'),
                    'shipping_postcode'     => $request->input('shipping_postcode')
                   ];

    if($member->update($requestData))
      return view('pages.desktop.account.address', ['member'      => $member,
                                                    'messageShow' => 'แก้ไขข้อมูลสถานที่จัดส่งสำเร็จ']);
    else
      return view('pages.desktop.account.address', ['member'      => $member,
                                                    'messageShow' => 'แก้ไขข้อมูลสถานที่จัดส่งไม่สำเร็จ']);
  }
  public function updateBilling(Request $request, $id)
  {
    $member      = ST_Member::find($id);
    $requestData = ['billign_address' => $request->input('billign_address'),
                    'user_tax_Id'     => $request->input('user_tax_Id')
                   ];

    if($member->update($requestData))
      return view('pages.desktop.account.address', ['member'      => $member,
                                                    'messageShow' => 'แก้ไขข้อมูลที่อยู่ใบกำกับภาษีสำเร็จ']);
    else
      return view('pages.desktop.account.address', ['member'      => $member,
                                                    'messageShow' => 'แก้ไขข้อมูลสที่อยู่ใบกำกับภาษีสำเร็จ']);
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
        $newPassword = random_str(12);
        $response    = ST_Member::UpdatePassword($newPassword, $request->input('email'), $user[0]->id);

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
  public function history(Request $request)
  {
    $user   = request()->session()->get('memberData')['id'];
    $orders = ST_Order::ByMember($user)->get();

    if($request->session()->has('memberData'))
      return view('pages.desktop.account.history', ['orders' => $orders]);
    else
      return view('pages.desktop.account.login');
  }
  public function historyDetail($orderId, $type = '')
  {
    $user  = request()->session()->get('memberData')['id'];
    $order = ST_Order::ByDetail($user, $orderId)->get();
    if($order->isEmpty())
      return redirect()->route('account_history');

    return view('pages.desktop.account.history_detail', ['order' => $order]);
  }
  public function wishlist(Request $request)
  {
    // auth()->user()->id = 0;
    $wishlists = (new ST_Wishlist)->listAll(1);

    if($request->session()->has('memberData'))
      return view('pages.desktop.account.wishlist', ['wishlists' => $wishlists]);
    else
      return view('pages.desktop.account.login');
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

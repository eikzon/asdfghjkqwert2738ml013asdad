<?php

namespace App\Http\Controllers\SiteControl;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

class AccountController extends Controller
{
  public function index()
  {
    if(Auth::user())
      return redirect()->route('st-home');
    else
      return view('pages.sitecontrol.login');
  }

  public function store(Request $request)
  {
    $userdata = [
      'username' => $request->input('username'),
      'password' => $request->input('password')
    ];

    if (Auth::attempt($userdata))
      return redirect()->route('st-home');
    else
      return redirect()->route('sitecontrol.login.index', 'fail');
  }

  public function logout()
  {
    Auth::logout();
    return redirect()->route('sitecontrol.login.index');
  }
}

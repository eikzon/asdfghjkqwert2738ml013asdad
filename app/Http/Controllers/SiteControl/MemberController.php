<?php

namespace App\Http\Controllers\SiteControl;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
  public function index()
  {
    return view('pages.sitecontrol.member.home');
  }

  public function show()
  {
    return view('pages.sitecontrol.member.show');
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

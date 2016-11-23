<?php

namespace App\Http\Controllers\sitecontrol;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
  public function index()
  {
    return view('pages.sitecontrol.dashboard');
  }
}

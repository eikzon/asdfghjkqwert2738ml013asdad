<?php

namespace App\Http\Controllers\sitecontrol;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// use App\Model\ST_Product;

class HomeController extends Controller
{
  public function index()
  {
    return view('pages.sitecontrol.dashboard', [
      'order'  => 0,
      'member' => 0
    ]);
  }
}

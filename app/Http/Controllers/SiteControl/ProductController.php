<?php

namespace App\Http\Controllers\SiteControl;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
  public function index()
  {
    return view('pages.sitecontrol.product.home');
  }

  public function create()
  {
    return view('pages.sitecontrol.product.form');
  }

  public function store()
  {
    // return view('pages.sitecontrol.product.create');
  }

  public function edit()
  {
    return view('pages.sitecontrol.product.form');
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

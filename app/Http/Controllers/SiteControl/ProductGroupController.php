<?php

namespace App\Http\Controllers\SiteControl;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\ST_Product_Group;

class ProductGroupController extends Controller
{
  private $st_product_group = '';

  public function __construct()
  {
    $this->st_product_group = new ST_Product_Group;
  }

  public function index()
  {
    return view('pages.sitecontrol.group.home', [
      'groups' => $this->st_product_group->index(),
    ]);
  }

  public function create()
  {
    return view('pages.sitecontrol.group.form', [
      'group' => null,
      'state' => 'store'
    ]);
  }

  public function store(Request $request)
  {
    if($this->st_product_group->store($request))
      return redirect()->route('sitecontrol.group.index');
    else
      return redirect()->route('sitecontrol.group.create');
  }

  public function edit(int $id)
  {
    if(!empty($id))
    {
      $result = $this->st_product_group->edit($id);

      if(!$result)
        return redirect()->route('sitecontrol.group.index');

      return view('pages.sitecontrol.group.form', [
        'group' => $result['group'],
        'state' => 'update'
      ]);
    }
    else
      return redirect()->route('sitecontrol.group.index');
  }

  public function update(Request $request)
  {
    if($this->st_product_group->updategroup($request))
      return redirect()->route('sitecontrol.group.index');
    else
      return redirect()->route('sitecontrol.group.edit', ['id' => $request->input('id')]);
  }

  public function destroy(int $id)
  {
    ST_Product_Group::destroy($id);
    return redirect()->route('sitecontrol.group.index');
  }
}

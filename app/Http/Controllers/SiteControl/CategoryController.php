<?php

namespace App\Http\Controllers\SiteControl;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\ST_Category;

use Image;

class CategoryController extends Controller
{
  private $st_category = '';

  public function __construct()
  {
    parent::__construct();
    $this->st_category = new ST_Category;
  }

  public function index()
  {
    $category = $this->st_category->index();

    // if($category->currentPage() > $category->lastPage())
    //   return redirect()->route('sitecontrol.category.index');
    // else
      return view('pages.sitecontrol.category.home', [
        'categories' => $category,
      ]);
  }

  // public function create()
  // {
  //   return view('pages.sitecontrol.category.form', [
  //     'group' => null,
  //     'state' => 'store'
  //   ]);
  // }

  // public function store(Request $request)
  // {
  //   if($this->st_category->store($request))
  //     return redirect()->route('sitecontrol.category.index', 'create');
  //   else
  //     return redirect()->route('sitecontrol.category.create');
  // }

  public function edit($id)
  {
    if(!empty($id))
    {
      $result = $this->st_category->edit($id);

      if(!$result)
        return redirect()->route('sitecontrol.category.index');

      return view('pages.sitecontrol.category.form', [
        'category' => $result['category'],
        'state'    => 'update'
      ]);
    }
    else
      return redirect()->route('sitecontrol.category.index');
  }

  public function update(Request $request)
  {
    $imageName = '';
    if(!empty($request->file('image')))
      $imageName = 'category-' . rand(1, 900) . time() . '.' . $request->file('image')->getClientOriginalExtension();
      Image::make($request->file('image'))->resize(200, 150)->save('images/' . $imageName);

    if($this->st_category->updateCategory($request, $imageName))
      return redirect()->route('sitecontrol.category.index', 'update');
    else
      return redirect()->route('sitecontrol.category.edit', ['id' => $request->input('id')]);
  }
  // public function destroy($id)
  // {
  //   ST_Category::destroy($id);
  //   return redirect()->route('sitecontrol.category.index', 'delete');
  // }
}

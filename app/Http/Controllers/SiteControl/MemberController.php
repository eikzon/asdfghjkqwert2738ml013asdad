<?php

namespace App\Http\Controllers\SiteControl;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ST_Member;

class MemberController extends Controller
{
  public function index(Request $request)
  {
    $member = ST_Member::byFilter(e($request->input('search')), e($request->input('status')))
                        ->orderBy('id', 'desc')
                        ->paginate(config('website.common.perPage.siteControl'));

    return view('pages.sitecontrol.member.home', [
      'members' => $member
    ]);
  }

  public function detail(Request $request, $id)
  {
    $member = ST_Member::find($id);

    if(empty($member)) return redirect()->back();

    return view('pages.sitecontrol.member.show', [
      'member' => $member
    ]);
  }

  public function update(Request $request, $id)
  {
    $member = ST_Member::find($id);
    $member->update($request->all());
  }

  public function destroy(Request $request, $id)
  {
    if(ST_Member::destroy($id))
      return response()->json(['status' => 'success']);

    return false;
  }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ST_Wishlist extends Model
{
  protected $table = 'st_wishlist';

  public function index(int $pid)
  {
    $resultWishlist = ST_Wishlist::get('id')->where('fk_member_id', 1);
    return $resultWishlist->toArray();
  }

  public function get(int $pid, $memberId)
  {
    return ST_Wishlist::where('fk_member_id', $memberId)->where('fk_product_id', $pid)->has('id');
  }

  public function store(int $pid)
  {
    $result = ST_Wishlist::create([
      'fk_pd_id'     => $pid,
      'fk_member_id' => 1
    ]);

    return $result;
  }
}

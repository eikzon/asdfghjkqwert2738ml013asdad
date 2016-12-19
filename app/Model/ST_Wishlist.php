<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ST_Wishlist extends Model
{
  protected $table    = 'st_wishlist';
  protected $fillable = ['fk_product_id', 'fk_member_id'];

  public function index(int $pid)
  {
    $resultWishlist = ST_Wishlist::get('id')->where('fk_member_id', 1);
    return $resultWishlist->toArray();
  }

  public function get($pid, $memberId)
  {
    return ST_Wishlist::where('fk_member_id', $memberId)->where('fk_product_id', $pid)->first();
  }

  public function listAll($memberId = 0)
  {
    $products = ST_Wishlist::with('products')->with('images')->where('fk_member_id', $memberId)->get();

    if(!empty($products))
      return $products;

    return [];
  }

  public function store($pid)
  {
    $result = ST_Wishlist::create([
      'fk_product_id' => $pid,
      'fk_member_id'  => 1
    ]);

    return $result;
  }

  public function images()
  {
    return $this->hasMany(ST_Product_Images::class, 'fk_pd_id', 'fk_product_id')->limit(1);
  }

  public function products()
  {
    return $this->hasOne(ST_Product::class, 'id', 'fk_product_id');
  }
}

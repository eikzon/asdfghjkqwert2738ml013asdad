<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use App\Model\ST_Cart;
use App\Model\ST_Product;

class ST_Order_Detail extends Model
{
  public static $orders = [];

  protected $table      = 'st_order_detail';
  protected $fillable   = ['od_product_id',
                           'od_quantity',
                           'od_price',
                           'fk_st_order_id',
                          ];

  protected static function boot()
  {
    parent::boot();
    static::addGlobalScope('ST_Order_Detail', function(Builder $builder) {
      $builder->with('products');
    });

    ST_Order_Detail::created(function ($orderDetail) {
      $orderDetail->attributes = beforeSql($orderDetail->attributes);
    });

    ST_Order_Detail::saved(function ($orderDetail) {});
  }

  public function createOrderDetail($product, $orderId)
  {
    $productDetail = (new ST_Product)->show($product['fk_product_id']);
    $price         = !empty($productDetail['pd_price_discount']) ? $productDetail['pd_price_discount'] : $productDetail['pd_price'];

    ST_Order_Detail::create([
      'od_product_id'  => $product['fk_product_id'],
      'od_quantity'    => $product['ct_quantity'],
      'od_price'       => ($price * $product['ct_quantity']),
      'fk_st_order_id' => $orderId
    ]);
  }

  public function relateProduct($orderId)
  {
    return ST_Order_Detail::where('fk_st_order_id', $orderId)->get();
  }

  public function scopeNow($query)
  {
    return $query;
  }

  public function products()
  {
    return $this->hasOne(ST_Product::class, 'id', 'od_product_id');
  }
}

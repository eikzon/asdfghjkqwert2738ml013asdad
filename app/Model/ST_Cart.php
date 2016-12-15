<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class ST_Cart extends Model
{
  use SoftDeletes;

  public static $orders = [];

  protected $table      = 'st_cart';
  protected $dates      = ['deleted_at'];
  protected $softDelete = true;
  protected $fillable   = ['ct_token',
                           'fk_product_id',
                           'ct_quantity',
                           'ct_postcode',
                           'ct_discount',
                           'ct_total',
                           'ct_shipping',
                           'fk_member_id'
                          ];

  protected static function boot()
  {
    parent::boot();
    static::addGlobalScope('ST_Order', function(Builder $builder) {
      $builder->with('products');
    });

    ST_Cart::creating(function ($cart) {
      if(session()->has('memberData'))
        $cart->fk_member_id = session()->get('memberData')['id'];
      else
        $cart->fk_member_id = 0;

      $cart->attributes = beforeSql($cart->attributes);
    });

    ST_Cart::updating(function ($cart) {
      $cart->attributes = beforeSql($cart->attributes);
    });

    ST_Cart::created(function ($cart) {});

    ST_Cart::updated(function ($cart) {});

    ST_Cart::saved(function ($cart) {
    });

    ST_Cart::deleted(function ($cart) {});
  }

  public function scopeNow($query)
  {
    return $query;
  }

  public function products()
  {
    return $this->belongsTo(ST_Product::class, 'fk_product_id');
  }
}

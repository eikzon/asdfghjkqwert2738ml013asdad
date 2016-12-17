<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class ST_Order_History extends Model
{
  use SoftDeletes;

  protected $table      = 'st_order';
  protected $dates      = ['deleted_at'];
  protected $softDelete = true;
  protected $fillable   = ['od_price_discount',
                           'od_price_total',
                           'od_price_shipping',
                           'od_code',
                           'od_status',
                           'od_flow_status',
                           'fk_member_id',
                           'fk_quest_id',
                          ];

  protected static function boot()
  {
    parent::boot();
    static::addGlobalScope('ST_Order', function(Builder $builder) {
      $builder->with('productLists')
              ->with('orderAddress');
    });

    ST_Order::updating(function ($order) {
      $order->attributes = beforeSql($order->attributes);
    });

    ST_Order::created(function ($order) {});

    ST_Order::saved(function ($order) {});

    ST_Order::deleted(function ($order) {});
  }

  public function scopeNow($query)
  {
    return $query;
  }

  public function scopeByFilter($query, $search, $status)
  {
    if($search) $query->where('email', 'LIKE', '%'.$search.'%');
    if($status) $query->where('status', $status);
    return $query;
  }

  public function productLists()
  {
    return $this->hasMany(ST_Order_Detail::class, 'fk_st_order_id');
  }

  public function orderAddress()
  {
    return $this->hasMany(ST_Order_Address::class, 'fk_order_id');
  }
}

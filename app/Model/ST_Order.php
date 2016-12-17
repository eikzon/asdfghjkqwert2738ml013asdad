<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class ST_Order extends Model
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
                           'od_ems_track'
                          ];

  protected static function boot()
  {
    parent::boot();
    static::addGlobalScope('ST_Order', function(Builder $builder) {
      $builder->with(['productLists' => function ($query) {
                  $query->select('*')
                        ->join('st_product', 'id', '=', 'od_product_id');
                }])
              ->with('orderAddress')
              ->with('orderBilling')
              ->with('members');
    });

    ST_Order::updating(function ($order) {
      $order->attributes = beforeSql($order->attributes);
    });

    ST_Order::created(function ($order) {});

    ST_Order::saved(function ($order) {});

    ST_Order::deleted(function ($order) {});
  }

  public function createOrder($request)
  {
    $orderDetail = new ST_Order;
    $orderDetail->od_code         = date('Ymd') . sprintf('%06d', rand(10, 999999));
    $orderDetail->od_status       = 1;
    $orderDetail->fk_member_id    = request()->session()->get('memberData')['id'];
    $orderDetail->od_remark       = $request->input('order-remark');
    $orderDetail->od_payment_type = $request->input('paymentselect');
    $orderDetail->save();

    return ($orderDetail->id ?? false);
  }

  public function updateOrder($resultUpdate, $orderId)
  {
    return ST_Order::where('id', $orderId)->update($resultUpdate);
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

  public function scopeByMember($query, $memberId)
  {
    $query->where('fk_member_id', $memberId)->where('od_status', 1)->orwhere('od_status', 2)->orderBy('id', 'desc');
    return $query;
  }

  public function scopeByDetail($query, $memberId, $orderId)
  {
    $query->where('fk_member_id', $memberId)->where('id', $orderId)->where([['od_status', '!=', 0]]);
    return $query;
  }

  public function updatePayment($type, $id)
  {
    $order = ST_Order::find($id);
    $order->od_datetime_payment = date('Y-m-d H:i:s');
    $order->od_status           = ($type == 3) ? 1 : 2;

    if($order->save())
      return true;

    return false;
  }

  // relation
  public function members()
  {
    return $this->belongsTo(ST_Member::class, 'fk_member_id');
  }

  public function productLists()
  {
    return $this->hasMany(ST_Order_Detail::class, 'fk_st_order_id');
  }

  public function orderBilling()
  {
    return $this->hasMany(ST_Order_Address::class, 'fk_order_id')->where('oa_isbilling_address', 1);
  }

  public function orderAddress()
  {
    return $this->hasMany(ST_Order_Address::class, 'fk_order_id');
  }
}

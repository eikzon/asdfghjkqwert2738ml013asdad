<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

use Hash;

class ST_Member extends Model
{
  use SoftDeletes;

  public static $orders = [];

  protected $table      = 'st_member';
  protected $dates      = ['deleted_at'];
  protected $softDelete = true;
  protected $fillable   = ['gender',
                           'first_name',
                           'last_name',
                           'email',
                           'tel',
                           'password',
                           'birthday',
                           'notification',
                           'status',
                           'shipping_address',
                           'shipping_province',
                           'shipping_district',
                           'shipping_sub_district',
                           'shipping_postcode',
                           'billign_address',
                           'user_tax_Id'
                          ];

  protected static function boot()
  {
    parent::boot();
    static::addGlobalScope('ST_Member', function(Builder $builder) {
      $builder->with('orders');
    });

    ST_Member::updating(function ($member) {
      $member->attributes = beforeSql($member->attributes);
    });

    ST_Member::created(function ($member) {});

    ST_Member::saved(function ($member) {});

    ST_Member::deleted(function ($member) {});
  }

  public static function UpdatePassword($password, $email, $uid)
  {
    $user           = self::find($uid);
    $user->password = md5($email . $password);
    if($user->save())
      return true;

    return false;
  }

  public function orders()
  {
    return $this->hasMany(ST_Order_History::class, 'fk_member_id');
  }

  public function scopeNow($query)
  {
    return $query;
  }

  public function scopeThisWeek($query)
  {
    $day = date('w');
    $week_start = date('Y-m-d', strtotime('-'.$day.' days')) . ' 00:00:00';
    $week_end = date('Y-m-d', strtotime('+'.(6-$day).' days')) . ' 59:59:59';
    // dd($week_start . ' ' . $week_end);
    return $query->where([
                          ['created_at', '>=', $week_start],
                          ['created_at', '<=', $week_end],
                          ['status', '!=', 0],
                        ])
                 ->limit(5);
  }

  public function scopeEmail($query, $email)
  {
    return $query->where([
                          ['email', '=', $email],
                          ['status', '>', 0],
                        ]);
  }

  public function scopeByFilter($query, $search, $status)
  {
    if($search) $query->where('email', 'LIKE', '%'.$search.'%');
    if($status) $query->where('status', $status);
    return $query;
  }
}

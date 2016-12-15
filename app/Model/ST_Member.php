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
                           'status'
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

  public static function UpdatePassword($password, $uid)
  {
    $user           = self::find($uid);
    $user->password = Hash::make($password);
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

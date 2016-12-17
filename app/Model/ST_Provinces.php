<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class ST_Provinces extends Model
{
  use SoftDeletes;

  public static $orders = [];

  protected $table      = 'st_provinces';
  protected $dates      = ['deleted_at'];
  protected $softDelete = true;
  protected $fillable   = ['code',
                           'name_th',
                           'name_en',
                           'geography_id'
                          ];

  protected static function boot()
  {
    parent::boot();
    static::addGlobalScope('ST_Order', function(Builder $builder) {});
  }

  public function scopeNow($query)
  {
    return $query;
  }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class ST_Amphures extends Model
{
  use SoftDeletes;

  protected $table      = 'st_amphures';
  protected $dates      = ['deleted_at'];
  protected $softDelete = true;
  protected $fillable   = ['code',
                           'name_th',
                           'name_en',
                           'province_id'
                          ];

  protected static function boot()
  {
    parent::boot();
    static::addGlobalScope('ST_Amphures', function(Builder $builder) {});
  }

  public function scopeNow($query)
  {
    return $query;
  }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class ST_Districts extends Model
{
  use SoftDeletes;

  protected $table      = 'st_districts';
  protected $dates      = ['deleted_at'];
  protected $softDelete = true;
  protected $fillable   = ['zip_code',
                           'name_th',
                           'name_en',
                           'amphure_id'
                          ];

  protected static function boot()
  {
    parent::boot();
    static::addGlobalScope('ST_Districts', function(Builder $builder) {});
  }

  public function scopeNow($query)
  {
    return $query;
  }
}

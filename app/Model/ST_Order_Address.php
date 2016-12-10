<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ST_Order_Address extends Model
{
  public static $orders = [];

  protected $table    = 'st_order_address';
  protected $fillable = ['oa_address',
                         'oa_alley',
                         'oa_building',
                         'oa_district',
                         'oa_city',
                         'oa_province',
                         'oa_postcode',
                         'fk_order_id',
                        ];

  protected static function boot()
  {
    parent::boot();

    ST_Order_Address::created(function ($orderAddress) {
      $orderAddress->attributes = beforeSql($orderAddress->attributes);
    });

    ST_Order_Address::saved(function ($orderAddress) {});
  }

  public function scopeNow($query)
  {
    return $query;
  }
}

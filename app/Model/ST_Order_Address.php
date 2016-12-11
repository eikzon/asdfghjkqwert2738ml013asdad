<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ST_Order_Address extends Model
{
  public static $orders = [];

  protected $table    = 'st_order_shipping';
  protected $fillable = ['oa_first_name',
                         'oa_last_name',
                         'oa_tel',
                         'oa_address',
                         'oa_district',
                         'oa_province',
                         'oa_postcode',
                         'oa_isbilling_address',
                         'oa_billign_address',
                         'oa_tax_id',
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

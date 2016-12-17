<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldSubDistrict extends Migration
{
  public function up()
  {
    Schema::table('st_order_shipping', function($table){
      $table->string('oa_sub_district');
    });
  }

  public function down()
  {
    if(Schema::hasColumn('st_order_shipping', 'oa_sub_district'))
    {
      Schema::table('st_order_shipping', function($table){
        $table->dropColumn('oa_sub_district');
      });
    }
  }
}

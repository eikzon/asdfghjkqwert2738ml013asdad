<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldShippingMember extends Migration
{
  public function up()
  {
    Schema::table('st_member', function($table){
      $table->string('shipping_address');
      $table->string('shipping_province');
      $table->string('shipping_district');
      $table->string('shipping_sub_district');
      $table->string('shipping_postcode');
      $table->string('billign_address');
      $table->string('user_tax_Id');
    });
  }

  public function down()
  {
    if(Schema::hasColumn('st_member', 'shipping_address'))
    {
      Schema::table('st_member', function($table){
        $table->dropColumn('shipping_address');
        $table->dropColumn('shipping_province');
        $table->dropColumn('shipping_district');
        $table->dropColumn('shipping_sub_district');
        $table->dropColumn('shipping_postcode');
        $table->dropColumn('billign_address');
        $table->dropColumn('user_tax_Id');
      });
    }
  }
}

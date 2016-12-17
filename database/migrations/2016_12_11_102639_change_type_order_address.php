<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeTypeOrderAddress extends Migration
{
  public function up()
  {
    if(Schema::hasTable('st_order_address'))
      Schema::drop('st_order_address');

    Schema::create('st_order_shipping', function (Blueprint $table) {
      $table->increments('id');
      $table->string('oa_first_name');
      $table->string('oa_last_name');
      $table->string('oa_tel');
      $table->string('oa_address');
      $table->string('oa_province');
      $table->string('oa_district');
      $table->integer('oa_postcode');
      $table->integer('oa_isbilling_address');
      $table->text('oa_billign_address');
      $table->string('oa_tax_id');
      $table->integer('fk_order_id');
      $table->softDeletes();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::drop('st_order_shipping');
  }
}

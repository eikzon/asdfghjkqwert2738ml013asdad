<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StOrderDetail extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('st_order_detail', function(Blueprint $table)
    {
      $table->engine = 'InnoDB';
      $table->integer('od_product_id');
      $table->integer('od_quantity');
      $table->string('od_price', 72);
      $table->string('fk_st_order_id');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('st_order_detail');
  }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StOrder extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('st_order', function (Blueprint $table) {
      $table->increments('id');
      $table->float('od_price_discount');
      $table->float('od_price_total');
      $table->float('od_price_shipping');
      $table->integer('od_code');
      $table->tinyInteger('od_status');
      $table->tinyInteger('od_flow_status');
      $table->integer('fk_member_id');
      $table->integer('fk_quest_id');
      $table->softDeletes();
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
    Schema::dropIfExists('st_order');
  }
}

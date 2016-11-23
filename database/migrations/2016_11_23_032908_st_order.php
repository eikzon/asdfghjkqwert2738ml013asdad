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
      $table->increments('od_id');
      $table->float('od_price_discount');
      $table->float('od_price_total');
      $table->float('od_price_shipping');
      $table->integer('od_code', 1);
      $table->integer('od_status', 1);
      $table->integer('od_flow_status', 1);
      $table->integer('fk_member_id')->nullable();
      $table->integer('fk_quest_id')->nullable();
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StCart extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('st_cart', function (Blueprint $table) {
      $table->increments('id');
      $table->string('ct_token');
      $table->integer('fk_product_id');
      $table->integer('ct_quantity');
      $table->integer('ct_postcode');
      $table->float('ct_discount');
      $table->float('ct_total');
      $table->float('ct_shipping');
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
    Schema::dropIfExists('st_cart');
  }
}

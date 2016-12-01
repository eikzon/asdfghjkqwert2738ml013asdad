<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StOrderAddress extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('st_order_address', function (Blueprint $table) {
      $table->float('oa_address');
      $table->float('oa_alley')->nullable();
      $table->float('oa_building')->nullable();
      $table->text('oa_district');
      $table->text('oa_city');
      $table->text('oa_province');
      $table->float('oa_postcode');
      $table->integer('fk_order_id');
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
      //
  }
}

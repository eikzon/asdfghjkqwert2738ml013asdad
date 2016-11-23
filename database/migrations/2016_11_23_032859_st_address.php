<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StAddress extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('st_member_address', function (Blueprint $table) {
      $table->increments('md_id');
      $table->float('md_postcode');
      $table->float('md_address');
      $table->float('md_province');
      $table->integer('fk_member_id')->nullable();
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
    Schema::dropIfExists('st_member_address');
  }
}

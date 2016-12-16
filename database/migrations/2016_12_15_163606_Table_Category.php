<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableCategory extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('st_category', function(Blueprint $table)
    {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->string('ct_name');
      $table->string('ct_image');
      $table->tinyInteger('ct_status');
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
    Schema::drop('st_category');
  }
}

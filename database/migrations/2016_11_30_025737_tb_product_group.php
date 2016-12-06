<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbProductGroup extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('st_product_group', function(Blueprint $table)
    {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->string('pg_name', 100);
      $table->integer('pg_display_id');
      $table->tinyInteger('pg_status');
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
    Schema::drop('st_product_group');
  }
}

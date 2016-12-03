<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbWishlist extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('st_wishlist', function(Blueprint $table)
    {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->integer('fk_product_id');
      $table->integer('fk_member_id');
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
    Schema::drop('st_wishlist');
  }
}

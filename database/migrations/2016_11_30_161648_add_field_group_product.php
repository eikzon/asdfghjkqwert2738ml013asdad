<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldGroupProduct extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('st_product', function($table){
      $table->Integer('fk_group_id')->nullable();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    if(Schema::hasColumn('st_product', 'fk_group_id'))
    {
      Schema::table('st_product', function($table){
        $table->dropColumn('fk_group_id');
      });
    }
  }
}

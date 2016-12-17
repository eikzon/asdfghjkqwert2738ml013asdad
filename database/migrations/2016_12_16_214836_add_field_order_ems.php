<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldOrderEms extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('st_order', function($table){
      $table->string('od_ems_track');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    if(Schema::hasColumn('st_order', 'od_ems_track'))
    {
      Schema::table('st_order', function($table){
        $table->dropColumn('od_ems_track');
      });
    }
  }
}

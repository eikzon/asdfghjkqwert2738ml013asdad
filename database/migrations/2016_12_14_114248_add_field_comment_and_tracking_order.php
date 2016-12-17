<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldCommentAndTrackingOrder extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('st_order', function($table){
      $table->string('od_tracking');
      $table->mediumText('od_comment');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    if(Schema::hasColumn('st_order', ['od_tracking' ,'od_comment']))
    {
      Schema::table('st_order', function($table){
        $table->dropColumn('od_tracking');
        $table->dropColumn('od_comment');
      });
    }
  }
}

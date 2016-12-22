<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldRemark extends Migration
{
  public function up()
  {
    Schema::table('st_order', function($table){
      $table->string('od_remark')->nullable();
    });
  }

  public function down()
  {
    if(Schema::hasColumn('st_order', 'od_remark'))
    {
      Schema::table('st_order', function($table){
        $table->dropColumn('od_remark');
      });
    }
  }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldNotificationToMember extends Migration
{
  public function up()
  {
    Schema::table('st_member', function($table){
      $table->string('notification');
    });
  }

  public function down()
  {
    if(Schema::hasColumn('st_member', 'notification'))
    {
      Schema::table('st_member', function($table){
        $table->dropColumn('notification');
      });
    }
  }
}

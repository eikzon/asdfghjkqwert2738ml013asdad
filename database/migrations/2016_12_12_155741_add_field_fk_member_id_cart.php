<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldFkMemberIdCart extends Migration
{
  public function up()
  {
    Schema::table('st_cart', function($table){
      $table->integer('fk_member_id');
    });
  }

  public function down()
  {
    if(Schema::hasColumn('st_cart', 'fk_member_id'))
    {
      Schema::table('st_cart', function($table){
        $table->dropColumn('fk_member_id');
      });
    }
  }
}

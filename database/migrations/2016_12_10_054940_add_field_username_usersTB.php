<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldUsernameUsersTB extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('users', function($table){
      $table->string('username');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    if(Schema::hasColumn('users', 'username'))
    {
      Schema::table('users', function($table){
        $table->dropColumn('username');
      });
    }
  }
}

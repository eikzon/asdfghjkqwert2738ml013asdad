<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StMemberData extends Migration
{
  public function up()
  {
    Schema::create('st_member', function(Blueprint $table)
    {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->integer('gender');
      $table->string('first_name');
      $table->string('last_name');
      $table->string('email');
      $table->string('tel');
      $table->string('password');
      $table->date('birthday');
      $table->integer('status');
      $table->timestamps();
      $table->softDeletes();
    });
  }

  public function down()
  {
    Schema::drop('st_member');
  }
}

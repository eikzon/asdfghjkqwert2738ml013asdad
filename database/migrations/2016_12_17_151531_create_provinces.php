<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvinces extends Migration
{
  public function up()
  {
    Schema::create('st_provinces', function (Blueprint $table) {
      $table->increments('id');
      $table->string('code');
      $table->string('name_th');
      $table->string('name_en');
      $table->string('geography_id');
      $table->softDeletes();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::drop('st_provinces');
  }
}

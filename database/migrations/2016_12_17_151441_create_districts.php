<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistricts extends Migration
{
  public function up()
  {
    Schema::create('st_districts', function (Blueprint $table) {
      $table->increments('id');
      $table->string('zip_code');
      $table->string('name_th');
      $table->string('name_en');
      $table->string('amphure_id');
      $table->softDeletes();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::drop('st_districts');
  }
}

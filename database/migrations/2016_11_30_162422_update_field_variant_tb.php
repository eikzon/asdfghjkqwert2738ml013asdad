<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateFieldVariantTb extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    if(!Schema::hasColumn('st_variant', 'vr_type'))
    {
      Schema::table('st_variant', function($table){
        $table->tinyInteger('vr_type');
        $table->dropColumn('vr_image');
      });
    }
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {

  }
}

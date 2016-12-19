<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FieldVariantTbProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('st_product', function($table){
        $table->tinyInteger('size_vr_id');
        $table->tinyInteger('color_vr_id');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      if(Schema::hasColumn('st_product', 'size_vr_id'))
      {
        Schema::table('st_product', function($table){
          $table->dropColumn('size_vr_id');
          $table->dropColumn('color_vr_id');
        });
      }
    }
}

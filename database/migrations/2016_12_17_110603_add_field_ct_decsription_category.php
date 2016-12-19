<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldCtDecsriptionCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('st_category', function($table){
        $table->mediumText('ct_description');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      if(Schema::hasColumn('st_category', 'ct_description'))
      {
        Schema::table('st_category', function($table){
          $table->dropColumn('ct_description');
        });
      }
    }
}

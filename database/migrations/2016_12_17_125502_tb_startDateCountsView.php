<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbStartDateCountsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('st_startdatecountsview', function(Blueprint $table)
      {
        $table->engine = 'InnoDB';
        $table->date('startdate');
        $table->timestamps();
      });

      Schema::table('st_product', function($table){
        $table->integer('count_view');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('st_startdatecountsview');

      if(Schema::hasColumn('st_product', 'count_view'))
      {
        Schema::table('st_product', function($table){
          $table->dropColumn('count_view');
        });
      }
    }
}

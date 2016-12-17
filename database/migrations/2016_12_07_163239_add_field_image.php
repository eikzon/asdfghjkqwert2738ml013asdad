<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('st_product_images', function($table){
        $table->string('fk_pd_code');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      if(Schema::hasColumn('st_product_images', 'fk_pd_code'))
      {
        Schema::table('st_product_images', function($table){
          $table->dropColumn('fk_pd_code');
        });
      }
    }
}

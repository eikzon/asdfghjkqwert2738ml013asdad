<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldCategoryProductTB extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('st_product', function($table){
        $table->string('fk_category_id');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      if(Schema::hasColumn('st_product', 'fk_category_id'))
      {
        Schema::table('st_product', function($table){
          $table->dropColumn('fk_category_id');
        });
      }
    }
}

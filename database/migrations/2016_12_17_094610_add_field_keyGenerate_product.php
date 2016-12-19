<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldKeyGenerateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('st_product', function($table){
        $table->string('keyGenerate');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      if(Schema::hasColumn('st_product', 'keyGenerate'))
      {
        Schema::table('st_product', function($table){
          $table->dropColumn('keyGenerate');
        });
      }
    }
}

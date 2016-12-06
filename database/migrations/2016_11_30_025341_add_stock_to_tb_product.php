<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStockToTbProduct extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('st_product', function($table){
      $table->Integer('pd_stock')->default(0);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    if(Schema::hasColumn('st_product', 'pd_stock'))
    {
      Schema::table('st_product', function($table){
        $table->dropColumn('pd_stock');
      });
    }
  }
}

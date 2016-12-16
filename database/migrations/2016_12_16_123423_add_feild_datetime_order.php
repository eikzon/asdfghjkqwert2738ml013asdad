<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFeildDatetimeOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('st_order', function($table){
        $table->date('od_datetime_payment');
        $table->tinyInteger('od_payment_type');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      if(Schema::hasColumn('st_order', 'od_datetime_payment'))
      {
        Schema::table('st_order', function($table){
          $table->dropColumn(['od_datetime_payment', 'od_payment_type']);
        });
      }
    }
}

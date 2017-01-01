<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldAccountRegister extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('st_member', function($table){
        $table->string('billing_name');
      });
      Schema::table('st_order_shipping', function($table){
        $table->string('oa_billing_name');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      if(Schema::hasColumn('st_member', 'billing_name'))
      {
        Schema::table('st_member', function($table){
          $table->dropColumn('billing_name');
        });
      }

      if(Schema::hasColumn('st_order_shipping', 'oa_billing_name'))
      {
        Schema::table('st_order_shipping', function($table){
          $table->dropColumn('oa_billing_name');
        });
      }
    }
}

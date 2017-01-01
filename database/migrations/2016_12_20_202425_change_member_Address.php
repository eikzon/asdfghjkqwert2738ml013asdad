<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeMemberAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('st_member', function($table){
        $table->string('shipping_address')->nullable()->change();
        $table->string('shipping_province')->nullable()->change();
        $table->string('shipping_district')->nullable()->change();
        $table->string('shipping_sub_district')->nullable()->change();
        $table->integer('shipping_postcode')->nullable()->change();
        $table->string('billign_address')->nullable()->change();
        $table->string('user_tax_Id')->nullable()->change();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

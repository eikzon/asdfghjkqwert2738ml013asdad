<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('st_product', function (Blueprint $table) {
        $table->increments('pd_id');
        $table->string('pd_name');
        $table->mediumText('pd_short_desc');
        $table->longText('pd_long_desc');
        $table->string('pd_code')->unique();
        $table->float('pd_price');
        $table->string('pd_discount');
        $table->float('pd_price_discount');
        $table->integer('pd_badge');
        $table->integer('pd_status');
        $table->softDeletes();
        $table->timestamps();
      });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('st_product');
    }
}

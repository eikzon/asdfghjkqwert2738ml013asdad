<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StVariantMap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('st_variant_map', function (Blueprint $table) {
        $table->increments('vrm_id');
        $table->integer('fk_vr_id');
        $table->integer('fk_pd_id');
        $table->integer('vrm_stock');
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
      Schema::dropIfExists('st_variant_map');
    }
}

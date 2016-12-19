<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbPlatform extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('st_platform', function(Blueprint $table)
      {
        $table->engine = 'InnoDB';
        $table->increments('id');
        $table->string('pt_g_1_title');
        $table->string('pt_g_1_description');
        $table->string('pt_image_1_1');
        $table->integer('group_1_1');
        $table->string('pt_image_1_2');
        $table->integer('group_1_2');

        $table->string('pt_g_2_title');
        $table->string('pt_g_2_description');
        $table->string('pt_image_2_1');
        $table->integer('group_2_1');
        $table->string('pt_image_2_2');
        $table->integer('group_2_2');
        $table->string('pt_image_2_3');
        $table->integer('group_2_3');

        $table->string('pt_g_3_title');
        $table->string('pt_g_3_description');
        $table->string('pt_image_3_1');
        $table->integer('group_3_1');
        $table->string('pt_image_3_2');
        $table->integer('group_3_2');
        $table->string('pt_image_3_3');
        $table->integer('group_3_3');

        $table->tinyInteger('fk_category_id')->default(5);
        $table->tinyInteger('pt_status');
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
      Schema::drop('st_platform');
    }
}

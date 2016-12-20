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
        $table->string('head_1_1');
        $table->integer('group_1_1');
        $table->string('pt_image_1_2');
        $table->string('head_1_2');
        $table->integer('group_1_2');
        $table->string('pt_image_1_3');
        $table->string('head_1_3');
        $table->integer('group_1_3');

        $table->string('pt_g_2_title');
        $table->string('pt_g_2_description');
        $table->string('pt_image_2_1');
        $table->string('head_2_1');
        $table->integer('group_2_1');
        $table->string('pt_image_2_2');
        $table->string('head_2_2');
        $table->integer('group_2_2');
        $table->string('pt_image_2_3');
        $table->string('head_2_3');
        $table->integer('group_2_3');

        $table->string('pt_g_3_title');
        $table->string('pt_g_3_description');
        $table->string('pt_image_3_1');
        $table->string('head_3_1');
        $table->integer('group_3_1');
        $table->string('pt_image_3_2');
        $table->string('head_3_2');
        $table->integer('group_3_2');
        $table->string('pt_image_3_3');
        $table->string('head_3_3');
        $table->integer('group_3_3');

        $table->string('pt_g_4_title');
        $table->string('pt_g_4_description');
        $table->string('pt_image_4_1');
        $table->string('head_4_1');
        $table->integer('group_4_1');
        $table->string('pt_image_4_2');
        $table->string('head_4_2');
        $table->integer('group_4_2');
        $table->string('pt_image_4_3');
        $table->string('head_4_3');
        $table->integer('group_4_3');

        $table->string('pt_g_5_title');
        $table->string('pt_g_5_description');
        $table->string('pt_image_5_1');
        $table->string('head_5_1');
        $table->integer('group_5_1');
        $table->string('pt_image_5_2');
        $table->string('head_5_2');
        $table->integer('group_5_2');
        $table->string('pt_image_5_3');
        $table->string('head_5_3');
        $table->integer('group_5_3');

        $table->string('pt_g_6_title');
        $table->string('pt_g_6_description');
        $table->string('pt_image_6_1');
        $table->string('head_6_1');
        $table->integer('group_6_1')->allowNull;
        $table->string('pt_image_6_2');
        $table->string('head_6_2');
        $table->integer('group_6_2');
        $table->string('pt_image_6_3');
        $table->string('head_6_3');
        $table->integer('group_6_3');

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

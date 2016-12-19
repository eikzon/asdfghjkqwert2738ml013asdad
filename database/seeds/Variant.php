<?php

use Illuminate\Database\Seeder;

use App\Model\ST_Variant;

class Variant extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('st_variant')->delete();
      ST_Variant::insert([
        [
          'id'      => 1,
          'vr_name' => 'US',
          'vr_text' => 'US - 6',
          'vr_type' => 1
        ],
        [
          'id'      => 2,
          'vr_name' => 'US',
          'vr_text' => 'US - 7',
          'vr_type' => 1
        ],
        [
          'id'      => 3,
          'vr_name' => 'US',
          'vr_text' => 'US - 8',
          'vr_type' => 1
        ],
        [
          'id'      => 4,
          'vr_name' => 'US',
          'vr_text' => 'US - 9',
          'vr_type' => 1
        ],
        [
          'id'      => 5,
          'vr_name' => 'Color - 1',
          'vr_text' => 'red',
          'vr_type' => 2
        ],
        [
          'id'      => 6,
          'vr_name' => 'Color - 2',
          'vr_text' => 'black',
          'vr_type' => 2
        ],
      ]);
    }
}

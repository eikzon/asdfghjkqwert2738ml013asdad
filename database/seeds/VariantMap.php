<?php

use Illuminate\Database\Seeder;

use App\Model\ST_Variant_Map;

class VariantMap extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('st_variant_map')->delete();
      ST_Variant_Map::insert([
        [
          'id'       => 1,
          'fk_vr_id' => 1,
          'fk_pd_id' => 1
        ],
        [
          'id'       => 2,
          'fk_vr_id' => 5,
          'fk_pd_id' => 1
        ],
        [
          'id'       => 3,
          'fk_vr_id' => 1,
          'fk_pd_id' => 2
        ],
        [
          'id'       => 4,
          'fk_vr_id' => 6,
          'fk_pd_id' => 2
        ],
        [
          'id'       => 5,
          'fk_vr_id' => 2,
          'fk_pd_id' => 3
        ],
        [
          'id'       => 6,
          'fk_vr_id' => 5,
          'fk_pd_id' => 3
        ],
        [
          'id'       => 7,
          'fk_vr_id' => 2,
          'fk_pd_id' => 4
        ],
        [
          'id'       => 8,
          'fk_vr_id' => 6,
          'fk_pd_id' => 4
        ]
      ]);
    }
}

<?php

use Illuminate\Database\Seeder;

use App\Model\ST_Product;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('st_product')->delete();
      ST_Product::insert([
        [
          'id'             => 1,
          'pd_name'        => 'Cloth 01',
          'fk_group_id'    => 1,
          'fk_category_id' => 5,
          'pd_status'      => 1,
          'pd_code'        => 1,
          'size_vr_id'     => 1,
          'color_vr_id'    => 5,
        ],
        [
          'id'             => 2,
          'pd_name'        => 'Cloth 02',
          'fk_group_id'    => 1,
          'fk_category_id' => 5,
          'pd_status'      => 1,
          'pd_code'        => 2,
          'size_vr_id'     => 1,
          'color_vr_id'    => 6,
        ],
        [
          'id'             => 3,
          'pd_name'        => 'Cloth 03',
          'fk_group_id'    => 1,
          'fk_category_id' => 5,
          'pd_status'      => 1,
          'pd_code'        => 3,
          'size_vr_id'     => 2,
          'color_vr_id'    => 5,
        ],
        [
          'id'             => 4,
          'pd_name'        => 'Cloth 04',
          'fk_group_id'    => 1,
          'fk_category_id' => 5,
          'pd_status'      => 1,
          'pd_code'        => 4,
          'size_vr_id'     => 2,
          'color_vr_id'    => 6,
        ],
        [
          'id'             => 5,
          'pd_name'        => 'Cloth 05',
          'fk_group_id'    => 2,
          'fk_category_id' => 5,
          'pd_status'      => 1,
          'pd_code'        => 5,
          'size_vr_id'     => 4,
          'color_vr_id'    => 5,
        ],
        [
          'id'             => 6,
          'pd_name'        => 'Cloth 06',
          'fk_group_id'    => 2,
          'fk_category_id' => 5,
          'pd_status'      => 1,
          'pd_code'        => 6,
          'size_vr_id'     => 4,
          'color_vr_id'    => 6,
        ],
      ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Model\ST_Product_Group;

class VariantGruop extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('st_product_group')->delete();
      ST_Product_Group::insert([
        [
          'id'        => 1,
          'pg_name'   => 'cloth',
          'pg_status' => 1
        ],
        [
          'id'        => 2,
          'pg_name'   => 'shirt',
          'pg_status' => 1
        ],
        [
          'id'        => 3,
          'pg_name'   => 'short',
          'pg_status' => 1
        ],
        [
          'id'        => 4,
          'pg_name'   => 'cap',
          'pg_status' => 1
        ],
      ]);
    }
}

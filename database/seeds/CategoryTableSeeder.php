<?php

use Illuminate\Database\Seeder;

use App\Model\ST_Category;

class CategoryTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('st_category')->delete();
    ST_Category::insert([
      [
        'id'        => 1,
        'ct_name'   => 'futsal',
        'ct_image'  => 'menu_futsal.png',
        'ct_status' => 1
      ],
      [
        'id'        => 2,
        'ct_name'   => 'football',
        'ct_image'  => 'menu_football.png',
        'ct_status' => 1
      ],
      [
        'id'        => 3,
        'ct_name'   => 'running',
        'ct_image'  => 'menu_running.png',
        'ct_status' => 1
      ],
      [
        'id'        => 4,
        'ct_name'   => 'badminton',
        'ct_image'  => 'menu_badminton.png',
        'ct_status' => 1
      ],
      [
        'id'        => 5,
        'ct_name'   => 'student',
        'ct_image'  => 'menu_student.png',
        'ct_status' => 1
      ]
    ]);
  }
}

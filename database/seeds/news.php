<?php

use Illuminate\Database\Seeder;

class news extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker\Factory::create(); //Gọi faker, dùng để tạo dữ liệu mẫu có định nghĩa

        $limit = 40; // số lần tạo dữ liệu

        for ($i = 0; $i < $limit; $i++) {
            DB::table('News')->insert([ //liên kết tới bảng ""
            	'Title' => $faker -> name,
            	'description' => $faker -> realText($maxNbChars = 200, $indexSize = 2),
            	'view' => random_int(1,7000),
            	'Detail' => $faker -> name,
            	'Popular' => random_int(0, 1),
            ]);
        }
    }
}

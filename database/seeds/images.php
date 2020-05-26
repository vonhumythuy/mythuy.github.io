<?php

use Illuminate\Database\Seeder;

class images extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //Gọi faker, dùng để tạo dữ liệu mẫu có định nghĩa

        $limit = 500; // số lần tạo dữ liệu

        for ($i = 0; $i < $limit; $i++) {
            DB::table('Images')->insert([ //liên kết tới bảng ""
            	'name' => $faker -> name,
            	'Decreption' => $faker -> realText($maxNbChars = 200, $indexSize = 2),
            	'id_news' => random_int(1, 40),
            	'url' => $faker -> url,
            ]);
        }
    }
}

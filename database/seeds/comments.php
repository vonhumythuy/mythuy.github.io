<?php

use Illuminate\Database\Seeder;

class comments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker\Factory::create(); //Gọi faker, dùng để tạo dữ liệu mẫu có định nghĩa

        $limit = 100; // số lần tạo dữ liệu

        for ($i = 0; $i < $limit; $i++) {
            DB::table('Comments')->insert([ //liên kết tới bảng ""
            	'id_user' => random_int(1, 300),
            	'id_news'=>random_int(1,50),
            	'title' => $faker -> name,
            	'Detail' => $faker -> name,
            ]);
        }
    }
}

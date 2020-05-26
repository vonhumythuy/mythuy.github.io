<?php

use Illuminate\Database\Seeder;

class Area extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //Gọi faker, dùng để tạo dữ liệu mẫu có định nghĩa

        $limit = 3; // số lần tạo dữ liệu

        for ($i = 0; $i < $limit; $i++) {
            DB::table('Area')->insert([ //liên kết tới bảng ""
            	'name' => $faker -> name,
            	'address' => $faker -> address,
            	'phone' => $faker -> phoneNumber,
            ]);
        }
    }
}

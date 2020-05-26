<?php

use Illuminate\Database\Seeder;

class time extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //Gọi faker, dùng để tạo dữ liệu mẫu có định nghĩa

        $limit = 6; // số lần tạo dữ liệu

        for ($i = 0; $i < $limit; $i++) {
            DB::table('Time')->insert([ //liên kết tới bảng ""
            	'Value' => random_int(1,30),
            ]);
        }
    }
}

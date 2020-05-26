<?php

use Illuminate\Database\Seeder;

class courses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //Gọi faker, dùng để tạo dữ liệu mẫu có định nghĩa

        $limit = 10; // số lần tạo dữ liệu

        for ($i = 0; $i < $limit; $i++) {
            DB::table('Courses')->insert([ //liên kết tới bảng ""
            	'name' => $faker -> name,
            	'Price' => $faker -> randomNumber,
            	'Avatar' => $faker -> imageUrl(500, 700, 'people'),
            	'Details' => $faker -> lexify('Hello ????') ,// 'Hello wgt',
            ]);
        }
    }
}

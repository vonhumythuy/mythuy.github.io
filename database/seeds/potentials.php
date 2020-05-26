<?php

use Illuminate\Database\Seeder;

class potentials extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker\Factory::create(); //Gọi faker, dùng để tạo dữ liệu mẫu có định nghĩa

        $limit = 5; // số lần tạo dữ liệu

        for ($i = 0; $i < $limit; $i++) {
            DB::table('Potentials')->insert([ //liên kết tới bảng ""
            	'name' => $faker -> name,
            	'Email' => $faker -> email,
            	'phone' => $faker -> phoneNumber,
            	'Content' => $faker -> realText($maxNbChars = 200, $indexSize = 2),
            	'Courses_id' => random_int(1, 10),
            
            ]);
        }
    }
}

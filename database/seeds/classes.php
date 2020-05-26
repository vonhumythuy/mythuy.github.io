<?php

use Illuminate\Database\Seeder;

class classes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //Gọi faker, dùng để tạo dữ liệu mẫu có định nghĩa

        $limit = 30; // số lần tạo dữ liệu

        for ($i = 0; $i < $limit; $i++) {
            DB::table('classes')->insert([ //liên kết tới bảng ""
            	'Courses_id' => random_int(1, 10),
            	'Day_id'=>random_int(1,30),
                'Time_id' => random_int(1, 6),
                'Area_id'=>random_int(1,3),
                'Teacher_id'=>random_int(1,20),
            	'name' => $faker -> name,
            	'description' => $faker -> realText($maxNbChars = 200, $indexSize = 2) ,
            	'Slot' => $faker -> name,
            	'StartDate' => $faker -> date,
            	'EndDate' => $faker -> date,
            	'Popular' => random_int(0, 1),
                'Datetostudy' => $faker -> date ,
                'Timetostudy' => $faker -> date ,
                'keodai' => $faker ->date ,
            ]);
        }
    }
}

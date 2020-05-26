<?php

use Illuminate\Database\Seeder;

class teachers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //Gọi faker, dùng để tạo dữ liệu mẫu có định nghĩa

        $limit = 20; // số lần tạo dữ liệu

        for ($i = 0; $i < $limit; $i++) {
            DB::table('Teachers')->insert([ //liên kết tới bảng ""
            	'name' => $faker -> name,
            	'description' => $faker -> realText($maxNbChars = 200, $indexSize = 2) ,
            	'Birthday' => $faker -> date,
            	'Phone' => $faker -> phoneNumber,
            	'Avatar' => $faker -> imageUrl(400, 600, 'people'),
            	'Level' => $faker -> lexify('?????'),
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //Gọi faker, dùng để tạo dữ liệu mẫu có định nghĩa

        $limit = 200; // số lần tạo dữ liệu

        for ($i = 0; $i < $limit; $i++) {
            DB::table('Users')->insert([ //liên kết tới bảng ""
            	'Account' => $faker -> userName,
            	'Password' => $faker -> password ,
            	'Gender' => $faker -> date,
            	'Phone' => $faker -> phoneNumber,
            	'be_admin' => random_int(0, 1),
            	'Name' => $faker -> name,
            	'Avatar' => $faker -> imageUrl(400, 600, 'people'),
                'Email' => $faker -> Email,
                'Classes_id' => random_int(1, 30),
            ]);
        }
    }
}

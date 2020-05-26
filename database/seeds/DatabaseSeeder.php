<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this -> call('Area');
        $this -> call('Day');
       $this -> call('time');
        $this -> call('courses');
    $this -> call('teachers');
        $this -> call('news');
        //$this -> call('images');
       $this -> call('potentials');
       $this -> call('classes');
        $this -> call('users');
        //$this -> call('comments'); 
    }
}

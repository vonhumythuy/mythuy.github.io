<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Classes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Classes',function (Blueprint $table){
            $table ->increments('id');
            $table -> string('Name');
            $table -> string('description');
            $table -> string('Slot');
            $table -> string('StartDate');
            $table -> string('EndDate');
            $table -> string('Popular');
            $table -> string('Datetostudy');
            $table -> string('Timetostudy');
            $table -> string('keodai');
            $table -> integer('Courses_id')-> unsigned();
            $table -> integer('Day_id')-> unsigned();
            $table -> integer('Time_id')-> unsigned();
            $table -> integer('Area_id')-> unsigned();
            $table -> integer('Teacher_id')-> unsigned();
            $table -> softDeletes (); //co chuc nang an mot dong trong DB
            $table -> timestamps(); // luu thoi gian hoat dong tren db
            
            $table -> foreign('Courses_id') -> references('id') -> on ('Courses');
            $table -> foreign('Day_id') -> references('id') -> on ('Day');
            $table -> foreign('Time_id') -> references('id') -> on ('Time');
            $table -> foreign('Area_id') -> references('id') -> on ('Area');
            $table -> foreign('Teacher_id') -> references('id') -> on ('Teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

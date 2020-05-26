<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Potentials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Potentials',function (Blueprint $table){
            $table ->increments('id');
            $table -> string('Name');
            $table -> string('Email');
            $table -> string('Phone');
            $table -> string('Content');
            $table -> integer('Courses_id')-> unsigned();
            $table -> softDeletes (); //co chuc nang an mot dong trong DB
            $table -> timestamps(); // luu thoi gian hoat dong tren db
            
            $table -> foreign('Courses_id') -> references('id') -> on ('Courses');

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

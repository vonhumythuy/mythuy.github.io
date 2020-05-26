<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Users',function (Blueprint $table){
            $table ->increments('id');
            $table -> string('Account');
            $table -> string('Password');
            $table -> string('Gender');
            $table -> string('Email');
            $table -> string('Phone');
            $table -> integer('be_admin');
            $table -> string('Avatar');
            $table -> string('Name');
            $table -> integer('Classes_id')-> unsigned();
            $table -> softDeletes (); //co chuc nang an mot dong trong DB
            $table -> timestamps(); // luu thoi gian hoat dong tren db

            $table -> foreign('Classes_id') -> references('id') -> on ('Classes');

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

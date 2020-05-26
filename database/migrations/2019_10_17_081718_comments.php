<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Comments',function (Blueprint $table){
            $table ->increments('id');
            $table -> string('Title');
            $table -> string('Detail');
            $table -> integer('Users_id')-> unsigned();
            $table -> integer('News_id')-> unsigned();
            $table -> softDeletes (); //co chuc nang an mot dong trong DB
            $table -> timestamps(); // luu thoi gian hoat dong tren db

            $table -> foreign('Users_id') -> references('id') -> on ('Users');
            $table -> foreign('News_id') -> references('id') -> on ('News');

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
